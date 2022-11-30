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

use FireHub\TheCore\Support\Enums\ {
    Data\Type as DataType, Order, Sort
};
use Error, Throwable;

use const ARRAY_FILTER_USE_BOTH;
use const ARRAY_FILTER_USE_KEY;
use const COUNT_NORMAL;
use const COUNT_RECURSIVE;
use const SORT_ASC;
use const SORT_DESC;
use const SORT_REGULAR;

use function array_column;
use function array_combine;
use function array_count_values;
use function array_diff;
use function array_diff_assoc;
use function array_diff_key;
use function array_fill;
use function array_fill_keys;
use function array_filter;
use function array_map;
use function array_merge;
use function array_merge_recursive;
use function array_multisort;
use function array_intersect;
use function array_intersect_assoc;
use function array_intersect_key;
use function array_key_exists;
use function array_key_first;
use function array_key_last;
use function array_keys;
use function array_pad;
use function array_pop;
use function array_push;
use function array_rand;
use function array_reverse;
use function array_search;
use function array_shift;
use function array_slice;
use function array_splice;
use function array_unique;
use function array_unshift;
use function array_values;
use function array_walk;
use function arsort;
use function asort;
use function count;
use function in_array;
use function krsort;
use function ksort;
use function range;
use function rsort;
use function shuffle;
use function sort;
use function uasort;
use function uksort;
use function usort;

/**
 * ### Array low level class
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
final class Arr {

    /**
     * ### Checks if value is array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data To get data type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type To check if value is array.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is array ? true : false) True if value is array, false otherwise.
     */
    public static function isArray (mixed $value):bool {

        return Data::getType($value) === DataType::T_ARRAY;

    }

    /**
     * ### Convert value to array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change value to array.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type As argumenent for Data method.
     *
     * @param mixed $value <p>
     * Value to convert.
     * </p>
     *
     * @return array{array-key, mixed} Array representation of value.
     */
    public static function toArray (mixed $value):array {

        return Data::setType($value, DataType::T_ARRAY);

    }

    /**
     * ### Checks if array is empty
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::count() To count items in array.
     *
     * @param array{array-key, mixed} $array <p>
     * Array to check.
     * </p>
     *
     * @return bool True if array is empty, false otherwise
     */
    public static function isEmpty (array $array):bool {

        return self::count($array) === 0;

    }

    /**
     * ### Checks if array is multidimensional
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Array to check.
     * </p>
     *
     * @return bool True if array is multidimensional, false otherwise.
     *
     * @note That any array that has at least one item as array will be considered as multidimensional array.
     */
    public static function isMultiDimensional (array $array):bool {

        return Arr::count(Arr::filter($array, [self::class, 'isArray'])) > 0;

    }

    /**
     * ### Checks if array is associative
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Array to check.
     * </p>
     *
     * @return bool True if array is associative, false otherwise
     */
    public static function isAssociative (array $array):bool {

        if (self::isEmpty($array)) return false;

        return self::keys($array) !== self::range(0, self::count($array) - 1);

    }

    /**
     * ### Counts all elements in the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses COUNT_NORMAL To count array items if $multi_dimensional is set to false.
     * @uses COUNT_RECURSIVE To count array items recursively if $multi_dimensional is set to true.
     *
     * @param array{array-key, mixed} $array <p>
     * Array to count.
     * </p>
     * @param bool $multi_dimensional [optional] <p>
     * Count multidimensional items.
     * </p>
     *
     * @return int{0, max} Number of elements in array.
     *
     * @caution Method can detect recursion to avoid an infinite loop, but will emit an E_WARNING every time it does (in case the array contains itself more than once) and return a count higher than may be expected.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function count (array $array, bool $multi_dimensional = false):int {

        return count($array, $multi_dimensional ? COUNT_RECURSIVE : COUNT_NORMAL);

    }

    /**
     * ### Counts all the values of an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::null() To check if $key is null.
     *
     * @param array{TKey, TValue} $array <p>
     * The array of values to count.
     * </p>
     * @param TKey|null $key [optional] <p>
     * Key to count if counting multidimensional array.
     * </p>
     *
     * @throws Error If you have to provide key when counting multidimensional array.
     *
     * @return array<TKey, int<1, max>> An associative array of values from input as keys and their count as value.
     */
    public static function countValues (array $array, null|int|string $key = null):array {

        if (!self::isMultiDimensional($array)) return array_count_values($array);

        return DataIs::null($key)
            ? throw new Error('You have to provide key when counting multidimensional array.')
            : (self::isMultiDimensional($column = self::column($array, $key))
                ? array_count_values(self::merge(...$column)) // @phpstan-ignore-line Wrong retun array shape
                : array_count_values($column));

    }

    /**
     * ### Checks if a value exists in an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * The searched value.
     *
     * note: If needle is a string, the comparison is done in a case-sensitive manner.
     * </p>
     * @param array{array-key, mixed} $array <p>
     * The array.
     * </p>
     *
     * @return bool True if value is found in the array, false otherwise.
     */
    public static function inArray (mixed $value, array $array):bool {

        return in_array($value, $array, true);

    }

    /**
     * ### Removes an item at the beginning of an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} &$array <p>
     * Array to shift.
     * </p>
     *
     * @return mixed The shifted value, or null if array is empty or is not an array.
     *
     * @note This function will reset the array pointer of the input array after use.
     */
    public static function shift (array &$array):mixed {

        return array_shift($array);

    }

    /**
     * ### Prepend elements to the beginning of the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} &$array <p>
     * Array to unshift.
     * </p>
     * @param mixed ...$values [optional] <p>
     * The prepended variables.
     * </p>
     *
     * @return int The number of elements in the array.
     *
     * @note Resets array's internal pointer to the first element.
     */
    public static function unshift (array &$array, mixed ...$values):int {

        return array_unshift($array, ...$values);

    }

    /**
     * ### Pop the element off the end of array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} &$array <p>
     * Array to pop.
     * </p>
     *
     * @return TValue|null The last value of array. If array is empty (or is not an array), null will be returned.
     */
    public static function pop (array &$array):mixed {

        return array_pop($array);

    }

    /**
     * ### Push elements onto the end of array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} &$array <p>
     * Array to unshift.
     * </p>
     * @param mixed ...$values [optional] <p>
     * The prepended variables.
     * </p>
     *
     * @return int The number of elements in the array.
     *
     * @note If you use push to add one element to the array, it's better to use $array[] = because in that way there is no overhead of calling a function.
     */
    public static function push (array &$array, mixed ...$values):int {

        return array_push($array, ...$values);

    }

    /**
     * ### Return the values from a single column in the input array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * A multi-dimensional array (record set) from which to pull a column of values.
     * </p>
     * @param int|string|null $key <p>
     * The column of values to return.
     * This value may be the integer key of the column you wish to retrieve, or it may be the string key name for an associative array.
     * It may also be NULL to return complete arrays (useful together with index_key to reindex the array).
     * </p>
     * @param int|string|null $index [optional] <p>
     * The column to use as the index/keys for the returned array.
     * This value may be the integer key of the column, or it may be the string key name.
     * The value is cast as usual for array keys.
     * </p>
     *
     * @return array{array-key, mixed} Array of values representing a single column from the input array.
     */
    public static function column (array $array, int|string|null $key, int|string|null $index = null) {

        /**
         * PHPStan stan reports that returns non-empty-array<int|string, mixed>.
         * @phpstan-ignore-next-line
         */
        return array_column($array, $key, $index);

    }

    /**
     * ### Merges the elements of one or more arrays together
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} ...$arrays [optional] <p>
     * Variable list of arrays to merge.
     * </p>
     *
     * @return array{array-key, mixed} The resulting array.
     *
     * @note If the input arrays have the same string keys, then the later value for that key will overwrite the previous one.
     * @note If the arrays contain numeric keys, the later value will be appended.
     * @note Numeric keys will be renumbered.
     */
    public static function merge (array ...$arrays):array {

        return array_merge(...$arrays);

    }

    /**
     * ### Merge two or more arrays recursively
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} ...$arrays [optional] <p>
     * Variable list of arrays to recursively merge.
     * </p>
     *
     * @return array{array-key, mixed} The resulting array.
     *
     * @note If the input arrays have the same string keys, then the values for these keys are merged together into an array, and this is done recursively, so that if one of the values is an array itself, the function will merge it with a corresponding entry in another array too. If, however, the arrays have the same numeric key, the later value will not overwrite the original value, but will be appended.
     */
    public static function mergeRecursive (array ...$arrays):array {

        /**
         * PHPStan stan reports that returns array.
         * @phpstan-ignore-next-line
         */
        return array_merge_recursive(...$arrays);

    }

    /**
     * ### Collapses array of arrays into a single, flat array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Multidimensional array to collapse.
     * </p>
     *
     * @throws Error If array is not multi-dimensional.
     *
     * @return array{array-key, mixed} The resulting array.
     */
    public static function collapse (array $array):array {

        return self::isMultiDimensional($array)
            ? self::merge(...Arr::filter($array, [self::class, 'isArray'])) // @phpstan-ignore-line Wrong retun array shape
            : throw new Error('Array need to be multi-dimensional to be able to collapse.');

    }

    /**
     * ### Creates an array by using one array for keys and another for its values
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::count() To count items in array.
     * @uses Throwable To cache error.
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{array-key, TKey} $keys <p>
     * Array of values to be used as keys. Illegal values for key will be converted to string.
     * </p>
     * @param array{array-key, TValue} $values <p>
     * Array of values to be used as values on combined array.
     * </p>
     *
     * @throws Error If current and combined arrays need to have the same number of items.
     *
     * @return array{TKey, TValue} The combined array, false if the number of elements for each array isn't equal or if the arrays are empty.
     */
    public static function combine (array $keys, array $values):array {

        try {

            /**
             * PHPStan stan reports that returns non-empty-array<TKey of (int|string), int|string|TValue>.
             * @phpstan-ignore-next-line
             */
            return array_combine($keys, $values);

        } catch (Throwable $error) {

            if (self::count($keys) !== self::count($values)) throw new Error('Current and combined array need to have the same number of items');

            throw new Error($error->getMessage());

        }

    }

    /**
     * ### Searches the array for a given value and returns the first corresponding key if successful
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * The searched value.
     * </p>
     * @param array{array-key, mixed} $array <p>
     * Array to search.
     * </p>
     * @param int|string|false $second_dimension [optional] <p>
     * Allows you to search second dimension on multidimensional array.
     * </p>
     *
     * @return int|string|false The key for needle if it is found in the array, false otherwise.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function search (mixed $value, array $array, int|string|false $second_dimension = false):int|string|false {

        return $second_dimension
            ? array_search($value, self::combine(self::keys($array), self::column($array, $second_dimension)), true)
            : array_search($value, $array, true);

    }

    /**
     * ### Searches the array for a given value and returns the list of corresponding keys if successful
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param TValue $value <p>
     * The searched value.
     * </p>
     * @param array{TKey, TValue} $array <p>
     * Array to search.
     * </p>
     *
     * @return array{int, TKey} The keys for needle if it is found in the array.
     */
    public static function searchAll (mixed $value, array $array):array {

        return self::keys($array, $value);

    }

    /**
     * ### Computes the difference of arrays
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array to compare from.
     * </p>
     * @param array{TKey, TValue} ...$excludes [optional] <p>
     * An array to compare against.
     * </p>
     *
     * @return array{TKey, TValue} An array containing all the entries from array1 that are not present in any of the other arrays.
     */
    public static function difference (array $array, array ...$excludes):array {

        /**
         * PHPStan stan reports that returns array<0|1, int|string|TValue>.
         * @phpstan-ignore-next-line
         */
        return array_diff($array, ...$excludes);

    }

    /**
     * ### Computes the difference of arrays using keys for comparison
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array to compare from.
     * </p>
     * @param array{TKey, TValue} ...$excludes [optional] <p>
     * An array to compare against.
     * </p>
     *
     * @return array{TKey, TValue} An array containing all the entries from array1 that are not present in any of the other arrays.
     */
    public static function differenceKey (array $array, array ...$excludes):array {

        /**
         * PHPStan stan reports that returns array<0|1, int|string|TValue>.
         * @phpstan-ignore-next-line
         */
        return array_diff_key($array, ...$excludes);

    }

    /**
     * ### Computes the difference of arrays with additional index check
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array to compare from.
     * </p>
     * @param array{TKey, TValue} ...$excludes [optional] <p>
     * An array to compare against.
     * </p>
     *
     * @return array{TKey, TValue} An array containing all the entries from array1 that are not present in any of the other arrays.
     */
    public static function differenceAssoc (array $array, array ...$excludes):array {

        /**
         * PHPStan stan reports that returns array<0|1, int|string|TValue>.
         * @phpstan-ignore-next-line
         */
        return array_diff_assoc($array, ...$excludes);

    }

    /**
     * ### Removes duplicate values from an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses SORT_REGULAR To compare items normally (don't change types).
     *
     * @param array{array-key, mixed} $array <p>
     * The array to remove duplicates.
     * </p>
     *
     * @return array{array-key, mixed} The filtered array.
     *
     * @note New array will preserve associative keys, and reindex others.
     * @note This method is not intended to work on multidimensional arrays.
     */
    public static function unique (array $array):array {

        /**
         * PHPStan stan reports that returns non-empty-array<0|1, mixed>.
         * @phpstan-ignore-next-line
         */
        return array_unique($array, SORT_REGULAR);

    }

    /**
     * ### Removes unique values from an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array to remove unique values.
     * </p>
     *
     * @return array{array-key, mixed} An array containing all duplicated entries.
     */
    public static function duplicates (array $array):array {

        return self::differenceAssoc($array, self::unique($array));

    }

    /**
     * ### Exchanges all keys with their associated values in array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue of array-key
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::int() To check if array value is integer.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if array value is string.
     *
     * @param array{TKey, TValue} $array <p>
     * The array to flip.
     * </p>
     *
     * @throws Error If method flip requires that all values be either int or string.
     *
     * @return array{TValue, TKey} The flipped array.
     */
    public static function flip (array $array):array {

        $items = [];
        foreach ($array as $key => $value) {

            /**
             * PHPStan stan reports that result of || is always true.
             * @phpstan-ignore-next-line
             */
            DataIs::int($value) || DataIs::string($value) ?: throw new Error('Method flip requires that all values be either int or string');

            $items[$value] = $key;

        }

        /**
         * PHPStan stan reports that result returns non-empty-array<TKey of (int|string), 0|1>.
         * @phpstan-ignore-next-line
         */
        return $items;

    }

    /**
     * ### Get all items from array with the specified keys
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array to filter items.
     * </p>
     * @param array{array-key, array-key} $keys <p>
     * List of keys to return.
     * </p>
     *
     * @throws Error If method flip requires that all values be either int or string.
     *
     * @return array{array-key, mixed} The filtered array.
     */
    public static function only (array $array, array $keys):array {

        return self::intersectKey($array, self::flip($keys));

    }

    /**
     * ### Get all items from array except for those with the specified keys
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array to filter items.
     * </p>
     * @param array{array-key, array-key} $keys <p>
     * List of keys to return.
     * </p>
     *
     * @throws Error If method flip requires that all values be either int or string.
     *
     * @return array{array-key, mixed} The filtered array.
     */
    public static function except (array $array, array $keys):array {

        return self::differenceKey($array, self::flip($keys));

    }

    /**
     * ### Pad array to the specified length with a value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Initial array of values to pad.
     * </p>
     * @param int $size <p>
     * New size of the array.
     * </p>
     * @param mixed $value <p>
     * Value to pad if input is less than pad_size.
     * </p>
     *
     * @return array{array-key, mixed} A copy of the input padded to size specified by pad_size with value pad_value. If pad_size is positive then the array is padded on the right, if it's negative then on the left. If the absolute value of pad_size is less than or equal to the length of the input then no padding takes place.
     */
    public static function pad (array $array, int $size, mixed $value):array {

        /**
         * PHPStan stan reports that result returns array.
         * @phpstan-ignore-next-line
         */
        return array_pad($array, $size, $value);

    }

    /**
     * ### Pick one or more random values out of the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * Array from we are picking random items.
     * </p>
     * @param positive-int $number [optional] <p>
     * Specifies how many entries you want to pick.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether you want to preserve keys from original array or not.
     * </p>
     *
     * @throws Error If asked number is less then 1.
     * @throws Error If asked number of items is greater than total number of items in array.
     *
     * @return ($preserve_keys is true ? int|string|array{TKey, TValue} : int|string|array{array-key, TValue}) If you are picking only one entry, returns the key for a random entry. Otherwise, it returns an array of keys for the random entries.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function random (array $array, int $number = 1, bool $preserve_keys = false):int|string|array {

        // check if $number is positive
        if ($number < 1) throw new Error("Cannot use $number as number, number most be positive"); // @phpstan-ignore-line Comparison operation '<' between int<1, max> and 1 is always false.

        // check if asked number of items is greater than total number of items in array
        !($number > self::count($array)) ?: throw new Error("Asked random values are $number, and are greater then total number of items in array ".self::count($array).".");

        // get the random keys from array items
        $keys = array_rand($array, $number);

        // if keys are not array
        if (!self::isArray($keys)) return $array[$keys]; // @phpstan-ignore-line Returns int|string|TValue.

        $items = [];
        if ($preserve_keys) foreach ($keys as $key) $items[$key] = $array[$key]; // if we turn on preserved key
        else foreach ($keys as $key) $items[] = $array[$key]; // if we turn off preserved key

        return $items; // @phpstan-ignore-line Returns array<int, int|string|TValue>.

    }

    /**
     * ### Reverse the order of array items
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * Array to reverse.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether you want to preserve keys from original array or not.
     * </p>
     *
     * @return ($preserve_keys is true ? array{TKey, TValue} : array{array-key, TValue}) The reversed array.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function reverse (array $array, bool $preserve_keys = false):array {

        /**
         * PHPStan stan reports that result returns array{TValue, TKey of (int|string)}.
         * @phpstan-ignore-next-line
         */
        return array_reverse($array, $preserve_keys);

    }

    /**
     * ### Computes the intersection of arrays
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array with main values to check.
     * </p>
     * @param array{array-key, mixed} ...$arrays [optional] <p>
     * An array to compare values against.
     * </p>
     *
     * @return array{TKey, TValue} The filtered array.
     *
     * @note Two elements are considered equal if and only if (string) $elem1 === (string) $elem2. In words: when the string representation is the same.
     */
    public static function intersect (array $array, array ...$arrays):array {

        /**
         * PHPStan stan reports that result array<0|1, int|string|TValue>.
         * @phpstan-ignore-next-line
         */
        return array_intersect($array, ...$arrays);

    }

    /**
     * ### Computes the intersection of arrays using keys for comparison
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array with main values to check.
     * </p>
     * @param array{array-key, mixed} ...$arrays [optional] <p>
     * An array to compare values against.
     * </p>
     *
     * @return array{TKey, TValue} The filtered array.
     */
    public static function intersectKey (array $array, array ...$arrays):array {

        return array_intersect_key($array, ...$arrays);

    }

    /**
     * ### Computes the intersection of arrays with additional index check
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * The array with main values to check.
     * </p>
     * @param array{array-key, mixed} ...$arrays [optional] <p>
     * An array to compare values against.
     * </p>
     *
     * @return array{TKey, TValue} The filtered array.
     *
     * @note The two values from the key => value pairs are considered equal only if (string) $elem1 === (string) $elem2 . In other words a strict type check is executed so the string representation must be the same.
     */
    public static function intersectAssoc (array $array, array ...$arrays):array {

        /**
         * PHPStan stan reports that result array<0|1, int|string|TValue>.
         * @phpstan-ignore-next-line
         */
        return array_intersect_assoc($array, ...$arrays);

    }

    /**
     * ### Shuffle array items
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * An array to shuffle.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether you want to preserve keys from original array or not.
     * </p>
     *
     * @throws Error If trying to shuffle empty array.
     *
     * @return ($preserve_keys is true ? non-empty-array<TKey, TValue|int|string> : non-empty-array<int, TValue|int|string>) Shuffled array.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function shuffle (array &$array, bool $preserve_keys = false):array {

        if (self::isEmpty($array)) throw new Error('Cannot shuffle empty array.');

        // if we want to preserve keys
        if ($preserve_keys) {

            $items = [];

            // get of keys from array
            $keys = self::keys($array);

            // shuffle out keys
            shuffle($keys);

            // add values from original items to shuffled one
            foreach($keys as $key) $items[$key] = $array[$key];

            // return shuffled array
            return $items;

        }

        // shuffle items without preserving keys
        shuffle($array);

        return $array;

    }

    /**
     * ### Extract a slice of the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * Array to slice.
     * </p>
     * @param int $offset <p>
     * If offset is non-negative, the sequence will start at that offset in the array.
     * If offset is negative, the sequence will start that far from the end of the array.
     * </p>
     * @param null|int $length [optional] <p>
     * If length is given and is positive, then the sequence will have that many elements in it.
     * If length is given and is negative then the sequence will stop that many elements from the end of the array.
     * If it is omitted, then the sequence will have everything from offset up until the end of the array.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Note that array_slice will reorder and reset the array indices by default.
     * You can change this behaviour by setting preserve_keys to true.
     * </p>
     *
     * @return ($preserve_keys is true ? array{TKey, TValue} : array{array-key, TValue}) Sliced array.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function slice (array $array, int $offset, ?int $length = null, bool $preserve_keys = false):array {

        return array_slice($array, $offset, $length, $preserve_keys);

    }

    /**
     * ### Remove a portion of the array and replace it with something else
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Array to splice.
     * </p>
     * @param int $offset <p>
     * If offset is positive then the start of removed portion is at that offset from the beginning of the input array.
     * If offset is negative then it starts that far from the end of the input array.
     * </p>
     * @param null|int $length [optional] <p>
     * If length is omitted, removes everything from offset to the end of the array.
     * If length is specified and is positive, then that many elements will be removed.
     * If length is specified and is negative then the end of the removed portion will be that many elements from the end of the array.
     * </p>
     * @param mixed $replacement [optional] <p>
     * If replacement array is specified, then the removed elements are replaced with elements from this array.
     * If offset and length are such that nothing is removed, then the elements from the replacement array or array are inserted in the place specified by the offset.
     * Keys in replacement array are not preserved.
     * </p>
     *
     * @return array{array-key, mixed} Spliced array.
     *
     * @note Numerical keys in array are not preserved.
     * @note If replacement is not an array, it will be typecast to one (i.e. (array) $replacement). This may result in unexpected behavior when using an object or null replacement.
     */
    public static function splice (array &$array, int $offset, ?int $length = null, mixed $replacement = []):array {

        /**
         * PHPStan stan reports that result array<0|1, mixed>.
         * @phpstan-ignore-next-line
         */
        return array_splice($array, $offset, $length, $replacement);

    }

    /**
     * ### Remove number of items from the beginning of the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{TKey, TValue} $array <p>
     * Array to skip.
     * </p>
     * @param int $offset <p>
     * Number of items to skip.
     * </p>
     *
     * @return array{TKey, TValue} An array without skipped items.
     */
    public static function skip (array $array, int $offset) {

        return self::slice($array, $offset, preserve_keys: true);

    }

    /**
     * ### Sorts array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{int|string, mixed} &$array <p>
     * Array to sort.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Order $order [optional] <p>
     * Order type.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether you want to preserve keys from original array or not.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Sort $flag [optional] <p>
     * Sorting flag.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note Resets array's internal pointer to the first element.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function sort (array &$array, Order $order = Order::ASC, bool $preserve_keys = false, Sort $flag = Sort::SORT_REGULAR):bool {

        return $order === Order::ASC
            ? ($preserve_keys
                ? asort($array, $flag->value)
                : sort($array, $flag->value))
            : ($preserve_keys
                ? arsort($array, $flag->value)
                : rsort($array, $flag->value));

    }

    /**
     * ### Sorts array by key
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{int|string, mixed} &$array <p>
     * Array to sort.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Order $order [optional] <p>
     * Order type.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note Resets array's internal pointer to the first element.
     */
    public static function sortByKey (array &$array, Order $order = Order::ASC):bool {

        return $order === Order::ASC ? ksort($array) : krsort($array);

    }

    /**
     * ### Sorts array by values using a user-defined comparison function
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{int|string, mixed} &$array <p>
     * Array to sort.
     * </p>
     * @param callable $callback <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than,
     * equal to, or greater than the second.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether you want to preserve keys from original array or not.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note Resets array's internal pointer to the first element.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function sortBy (array &$array, callable $callback, bool $preserve_keys = false):bool {

        return $preserve_keys ? uasort($array, $callback) : usort($array, $callback);

    }

    /**
     * ### Sorts array by key using a user-defined comparison function
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{int|string, mixed} &$array <p>
     * Array to sort.
     * </p>
     * @param callable $callback <p>
     * The callback comparison function. Function cmp_function should accept two parameters which will be filled by pairs of array keys.
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than,
     * equal to, or greater than the second.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note Resets array's internal pointer to the first element.
     */
    public static function sortKeyBy (array &$array, callable $callback):bool {

        return uksort($array, $callback);

    }

    /**
     * ### Sorts array by multiple fields
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if first $field value is string.
     * @uses \FireHub\TheCore\Support\Enums\Order::DESC To check if order is desc on second $field value.
     *
     * @param array{TKey, TValue} $array <p>
     * Array to sort.
     * </p>
     * @param array{int, array<int, string|\FireHub\TheCore\Support\Enums\Order>} $fields <p>
     * List of fields to sort by.
     * </p>
     *
     * @throws Error If each field has to have both field name and sort value.
     * @throws Error If first key of each field is not integer nor string.
     * @throws Error If sorting by many your array is not 2-dimensional array.
     * @throws Error If key does not exist.
     * @throws Error If key is missing somewhere.
     *
     * @return array{TKey, TValue} Sorter array.
     */
    public static function sortByMany (array $array, array $fields):array {

        $multi_sort = [];

        foreach ($fields as $field) {

            // check if both field name and sort value are present
            isset($field[0]) && isset($field[1]) ?: throw new Error('Each field has to have both field name and sort value.');

            $column = $field[0];
            $order = $field[1];

            // first key of each field must be string
            if (!DataIs::string($column)) throw new Error('First key of each field must be integer or string.');

            // when sorting by many your collection must be 2-dimensional array
            if (self::isArray($array[0]) === false) throw new Error('When sorting by many your collection must be 2-dimensional array.'); // @phpstan-ignore-line

            if (!self::keyExist($column, $array[0])) throw new Error("Key $column does not exist."); // @phpstan-ignore-line

            // field 1 will be converter to PHP order constants
            // it will default to SORT_ASC is FireHub\Support\Enums\Order is not the type
            $order = $order === Order::DESC ? SORT_DESC : SORT_ASC;

            self::count(self::keys($array)) === self::count(self::column($array, $column)) ?: throw new Error("Key $column is missing somewhere.");

            // first array is array of value from selected column
            $multi_sort[] = [...self::column($array, $column)];

            // second array is sort order
            $multi_sort[] = $order;

        }

        // attach items at the end of multi-sort
        $multi_sort[] = &$array; // @phpstan-ignore-line

        array_multisort(...$multi_sort);

        return $array;

    }

    /**
     * ### Checks if the given key or index exists in the array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array-key $key <p>
     * Key to check.
     * </p>
     * @param array{int|string, mixed} $array <p>
     * An array with keys to check.
     * </p>
     *
     * @return bool True if key exist in array, false otherwise.
     *
     * @note Method will search for the keys in the first dimension only. Nested keys in multidimensional arrays will not be found.
     */
    public static function keyExist (int|string $key, array $array):bool {

        return array_key_exists($key, $array);

    }

    /**
     * ### Return all the keys or a subset of the keys of an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::null() To check if filter is null.
     *
     * @param array{TKey, TValue} $array <p>
     * An array containing keys to return.
     * </p>
     * @param TValue $filter [optional] <p>
     * If specified, then only keys containing these values are returned.
     * </p>
     *
     * @return array{int, TKey} An array of all the keys in input.
     */
    public static function keys (array $array, mixed $filter = null):array {

        /**
         * PHPStan stan reports that returns array{0, 1}.
         * @phpstan-ignore-next-line
         */
        return DataIs::null($filter) ? array_keys($array) : array_keys($array, $filter, true);

    }

    /**
     * ### Return all the values from array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TValue
     *
     * @param array{array-key, TValue} $array <p>
     * The array.
     * </p>
     *
     * @return array{int, TValue} An indexed array of values.
     */
    public static function values (array $array):array {

        return array_values($array);

    }

    /**
     * ### Get first value from array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs To check if last key is null.
     *
     * @param array{array-key, mixed} $array <p>
     * The array.
     * </p>
     *
     * @return mixed First value from array or null if array is empty.
     */
    public static function first (array $array):mixed {

        return !DataIs::null(self::firstKey($array)) ? $array[self::firstKey($array)] : null;

    }

    /**
     * ### Gat last value from array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs To check if last key is null.
     *
     * @param array{array-key, mixed} $array <p>
     * The array.
     * </p>
     *
     * @return mixed Last value from array or null if array is empty.
     */
    public static function last (array $array):mixed {

        return !DataIs::null(self::lastKey($array)) ? $array[self::lastKey($array)] : null;

    }

    /**
     * ### Get first key from array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array.
     * </p>
     *
     * @return array-key|null First key from array or null if array is empty.
     */
    public static function firstKey (array $array):null|int|string {

        return array_key_first($array);

    }

    /**
     * ### Get last key from array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array.
     * </p>
     *
     * @return array-key|null First key from array or null if array is empty.
     */
    public static function lastKey (array $array):null|int|string {

        return array_key_last($array);

    }

    /**
     * ### Filter elements in an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs To check if last key is null.
     * @uses ARRAY_FILTER_USE_BOTH To pass key as the only argument to callback instead of the value.
     * @uses ARRAY_FILTER_USE_KEY To both value and key as arguments to callback instead of the value.
     *
     * @param array{array-key, mixed} $array <p>
     * The array to iterate over.
     * </p>
     * @param null|callable $callback [optional] <p>
     * The callback function to use.
     * If no callback is supplied, all empty and false entries of array will be removed.
     * </p>
     * @param bool $pass_key [optional] <p>
     * Pass key as the argument to callback.
     * </p>
     * @param bool $pass_value [optional] <p>
     * Pass value as the argument to callback.
     * </p>
     *
     * @return array{array-key, mixed} Filtered array.
     *
     * @caution If the array is changed from the callback function (e.g. element added, deleted or unset) the behavior of this function is undefined.
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Because it is static low level method.
     */
    public static function filter (array $array, ?callable $callback = null, bool $pass_key = false, bool $pass_value = true):array {

        if (DataIs::null($callback)) return array_filter($array); // @phpstan-ignore-line Returns array{0?: (int<min, -1>|int<1, max>|non-falsy-string), 1?: mixed}

        $mode = $pass_key && $pass_value
            ? ARRAY_FILTER_USE_BOTH
            : ($pass_key
                ? ARRAY_FILTER_USE_KEY
                : 0);

        return array_filter($array, $callback, $mode); // @phpstan-ignore-line Returns  array<0|1, mixed>

    }

    /**
     * ### Create an array containing a range of elements
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses Throwable To cache error.
     *
     * @param int|float|string $start <p>
     * First value of the sequence.
     * </p>
     * @param int|float|string $end <p>
     * The sequence is ended upon reaching the end value.
     * </p>
     * @param int|float $step [optional] <p>
     * If a step value is given, it will be used as the increment between elements in the sequence.
     * Step should be given as a positive number. If not specified, step will default to 1.
     * </p>
     *
     * @throws Error If Your start is bigger then the end of array.
     * @throws Error If Your step is bigger then the end of array.
     *
     * @return array<int, (float|int|string)> An array of elements from start to end, inclusive.
     */
    public static function range (int|float|string $start, int|float|string $end, int|float $step = 1):array {

        try {

            return range($start, $end, $step);

        } catch (Throwable $error) {

            if ($start > $end) throw new Error("Your start $start is bigger then the end of array $end.");

            if ($end < $step) throw new Error("Your step $end is bigger then the end of array $step.");

            throw new Error($error->getMessage());

        }

    }

    /**
     * ### Apply a user function to every member of an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * The array to apply a user function.
     * </p>
     * @param callable $callback <p>
     * Typically, function name takes on two parameters. The array parameter's value being the first, and the key/index second.
     * If function name needs to be working with the actual values of the array, specify the first parameter of function name as a reference.
     * Then, any changes made to those elements will be made in the original array itself.
     *
     * Users may not change the array itself from the callback function. e.g. Add/delete elements, unset elements, etc.
     * If the array that walk is applied to is changed, the behavior of this function is undefined, and unpredictable.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function walk (array &$array, callable $callback):bool {

        return array_walk($array, $callback);

    }

    /**
     * ### Applies the callback to the elements of the given array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param array{array-key, mixed} $array <p>
     * Array to run through the callback function.
     * </p>
     * @param callable $callback <p>
     * Callback function to run for each element in each array.
     * </p>
     *
     * @return array{array-key, mixed} Array containing all the elements of arr1 after applying the callback function.
     */
    public static function map (array $array, callable $callback):array {

        return array_map($callback, $array);

    }

    /**
     * ### Fill an array with values
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TValue
     *
     * @param int $start_index <p>
     * The first index of the returned array.
     * </p>
     * @param int<0, max> $length <p>
     * Number of elements to insert. Must be greater than or equal to zero.
     * </p>
     * @param TValue $value p>
     * Value to use for filling.
     * </p>
     *
     * @return array<int, TValue> Filled array.
     */
    public static function fill (int $start_index, int $length, mixed $value):array {

        return array_fill($start_index, $length, $value);

    }

    /**
     * ### Fill an array with values, specifying keys
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param array{array-key, TKey} $keys <p>
     * Array of values that will be used as keys. Illegal values for key will be converted to string.
     * </p>
     * @param TValue $value p>
     * Value to use for filling.
     * </p>
     *
     * @throws Error If array is empty.
     *
     * @return non-empty-array<TKey, TValue> Filled array.
     */
    public static function fillKeys (array $keys, mixed $value):array {

        return self::isEmpty($keys)
            ? throw new Error('Array cannot be empty.')
            : array_fill_keys($keys, $value);

    }

}