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

use FireHub\TheCore\Support\Enums\Data\Type;
use FireHub\TheCore\Support\Enums\Json\ {
    Decode as JsonDecode, Encode as JsonEncode
};
use Throwable;

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
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolian arguments.
 */
final class Data {

    /**
     * ### Get data type
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Data\Type As return.
     *
     * @param mixed $value <p>
     * Value to check type.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Enums\Data\Type Data type.
     */
    public static function getType (mixed $value):Type {

        return Type::from(gettype($value));

    }

    /**
     * ### Convert data to type
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Data\Type As parameter.
     *
     * @param mixed $value <p>
     * Value to convert.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Data\Type $type <p>
     * Type to convert data to.
     * </p>.
     *
     * @return (
     *      $type is Type::T_ARRAY
     *      ? array{array-key, mixed}
     *      : ($type is Type::T_STRING
     *          ? string
     *          : ($type is Type::T_INT
     *              ? int
     *              : ($type is Type::T_FLOAT
     *                  ? float
     *                  : ($type is Type::T_OBJECT
     *                      ? object
     *                      : ($type is Type::T_BOOL
     *                          ? bool
     *                          : ($type is Type::T_NULL
     *                              ? null
     *                              : ($type is Type::T_RESOURCE
     *                                  ? false
     *                                  : mixed)))))))) Converted value or false if failed.
     */
    public static function setType (mixed $value, Type $type):mixed {

        // check if type is settable
        if (!$type->settable()) return false;

        settype($value, $type->value);

        return $value;

    }

    /**
     * ### Generates storable representation of data
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses Throwable To cache error.
     *
     * @param string|int|float|bool|array{array-key, mixed}|object|null $value <p>
     * The value to be serialized.
     * </p>
     *
     * @return string|false String containing a byte-stream representation of value that can be stored anywhere, false otherwise.
     *
     * @note This is a binary string which may include null bytes, and needs to be stored and handled as such. For example, serialize() output should generally be stored in a BLOB field in a database, rather than a CHAR or TEXT field.
     */
    public static function serialize (string|int|float|bool|array|object|null $value):string|false {

        try {

            return serialize($value);

        } catch (Throwable) { // anonymous classes and functions cannot be serialized

            return false;

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
     * @return string|int|float|bool|array{array-key, mixed} The converted value is returned, false otherwise.
     */
    public static function unserialize (string $data, bool|array $allowed_classes = false, int $max_depth = 4096):string|int|float|bool|array {

        // return false if $data is serialized false already
        if ($data === 'b:0;') return false;

        // if $data is NULL
        if ($data === 'N;') return false;

        return ($unserialized_data = unserialize($data, ['allowed_classes' => $allowed_classes, 'max_depth' => $max_depth]))
            ? $unserialized_data
            : false;

    }

    /**
     * ### Returns JSON representation of a value
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Json\Encode As parameter.
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
     * @uses \FireHub\TheCore\Support\Enums\Json\Decode As parameter.
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