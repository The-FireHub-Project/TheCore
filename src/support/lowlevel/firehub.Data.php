<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Support\LowLevel;

use FireHub\TheCore\Support\Enums\Data\Type as DataType;
use FireHub\TheCore\Support\Enums\Json\ {
    Encode as JsonEncode, Decode as JsonDecode
};
use Error, ReflectionClass, Throwable;

use function gettype;
use function json_decode;
use function json_encode;
use function serialize;
use function settype;
use function unserialize;

/**
 * ### Data Type low level class
 *
 * This low level support class is for manipulating data.
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 */
final class Data {

    /**
     * ### Get data type
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check type.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Enums\Data\Type Data type.
     */
    public static function getType (mixed $value):DataType {

        return DataType::from(gettype($value));

    }

    /**
     * ### Convert data to type
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to convert.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Data\Type $type <p>
     * Type to convert data to.
     * </p>
     *
     * @throws Error If type you are trying to set is not settable.
     *
     * @return ($type is DataType::T_ARRAY ? array{array-key, mixed} : mixed) Converted value.
     */
    public static function setType (mixed $value, DataType $type):mixed {

        // check if type is settable
        if (!$type->settable()) throw new Error('Type you are trying to set is not settable.');

        settype($value, $type->value);

        return $value;

    }

    /**
     * ### Generates storable representation of data
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::object() To check if value is object.
     * @uses Throwable To cache error.
     * @uses ReflectionClass To reflect object if value is one.
     *
     * @param string|int|float|bool|array{array-key, mixed}|object|null $value <p>
     * The value to be serialized.
     * </p>
     *
     * @throws Error If system cannot reflect class, value cannot be serialized or unknown error during serialization process.
     *
     * @return string String containing a byte-stream representation of value that can be stored anywhere.
     *
     * @note This is a binary string which may include null bytes, and needs to be stored and handled as such. For example, serialize() output should generally be stored in a BLOB field in a database, rather than a CHAR or TEXT field.
     */
    public static function serialize (string|int|float|bool|array|object|null $value):string {

        // anonymous classes and functions cannot be serialized
        try {

            return serialize($value);

        } catch (Throwable) {

            // if value is object
            if (DataIs::object($value)) {

                try {

                    $reflection = new ReflectionClass($value);

                } catch (Throwable) { // @phpstan-ignore-line

                    throw new Error("Cannot reflect class.");

                }

                $value_name = match (true) {
                    $reflection->name === 'Closure' => $value::class,
                    $reflection->isAnonymous() => 'Anonymous class',
                    default => 'Unknown'
                };

                throw new Error("$value_name cannot be serialized.");

            }

            throw new Error("Unknown error during serialization process.");

        }

    }

    /**
     * ### Creates a PHP value from a stored representation
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $data <p>
     * The serialized string.
     * </p>
     * @param bool|array{class-string} $allowed_classes [optional] <p>
     * Either an array of class names which should be accepted, false to accept no classes, or true to accept all classes.
     * </p>
     * @param positive-int $max_depth [optional] <p>
     * The maximum depth of structures permitted during unserialization, and is intended to prevent stack overflows.
     * </p>
     *
     * @throws Error If failed to unserialize data or trying to unserialize serialized NULL value.
     *
     * @return string|int|float|bool|array{array-key, mixed} The converted value is returned.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function unserialize (string $data, bool|array $allowed_classes = false, int $max_depth = 4096):string|int|float|bool|array {

        // return false if $data is serialized false already
        if ($data === 'b:0;') return false;

        // if $data is NULL
        if ($data === 'N;') throw new Error('Cannot unserialize NULL.');

        return ($unserialized_data = unserialize($data, ['allowed_classes' => $allowed_classes, 'max_depth' => $max_depth]))
            ? $unserialized_data
            : throw new Error('Failed to unserialize data.');

    }

    /**
     * ### Returns JSON representation of a value
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::walk() To replace array value from json encode enum with enum values.
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::unique() To remove duplicated enum values.
     *
     * @param mixed $value <p>
     * The value being encoded.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Json\Encode ...$flags [optional] <p>
     * Bitmask consisting of JSON encode flags.
     * </p>
     *
     * @return string|false JSON encoded string on success or false on failure.
     */
    public static function jsonEncode (mixed $value, JsonEncode ...$flags):string|false {

        // replace array value from json encode enum with enum values
        Arr::walk($flags, fn(JsonEncode &$value):int => $value = $value->value);

        // remove duplicates and count total value
        $total_flags = 0;
        foreach (Arr::unique($flags) as $flag) $total_flags += $flag;

        return json_encode($value, $total_flags);

    }

    /**
     * ### Decodes JSON string
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::walk() To replace array value from json encode enum with enum values.
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::unique() To remove duplicated enum values.
     *
     * @param string $json <p>
     * The json string being decoded.
     * </p>
     * @param positive-int $max_depth [optional] <p>
     * User specified recursion depth.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Json\Decode ...$flags [optional] <p>
     * Bitmask consisting of JSON decode flags.
     * </p>
     *
     * @return mixed Value encoded in json in appropriate PHP type.
     */
    public static function jsonDecode (string $json, int $max_depth = 512, JsonDecode ...$flags):mixed {

        // replace array value from json decode enum with enum values
        Arr::walk($flags, fn(JsonDecode &$value):int => $value = $value->value);

        // remove duplicates and count total value
        $total_flags = 0;
        foreach (Arr::unique($flags) as $flag) $total_flags += $flag;

        return json_decode($json, null, $max_depth, $total_flags);

    }

}