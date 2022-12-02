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

namespace FireHub\TheCore\Support\LowLevel\Iterable;

use FireHub\TheCore\Support\LowLevel\Data\DataIs;
use Traversable;

use function iterator_apply;
use function iterator_count;
use function iterator_to_array;

/**
 * ### Iterator low level class
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
final class Iterator {

    /**
     * ### Checks if value is iterator
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data\DataIs::iterable() To check if value is iterable.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is iterable ? true : false) True if value is array, false otherwise.
     */
    public static function isIterator (mixed $value):bool {

        return DataIs::iterable($value);

    }

    /**
     * ### Checks if iterator is empty
     * @since 0.1.3.pre-alpha.M1
     *
     * @param Traversable<array-key, mixed> $iterator <p>
     * Array to check.
     * </p>
     *
     * @return bool True if array is empty, false otherwise.
     */
    public static function isEmpty (Traversable $iterator):bool {

        return self::count($iterator) === 0;

    }

    /**
     * ### Count the elements in an iterator
     * @since 0.1.3.pre-alpha.M1
     *
     * @param Traversable<array-key, mixed> $iterator <p>
     * The iterator being counted.
     * </p>
     *
     * @return int{0, max} Number of elements in array.
     */
    public static function count (Traversable $iterator):int {

        return iterator_count($iterator);

    }

    /**
     * ### Copy the iterator into an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param Traversable<TKey, TValue> $iterator <p>
     * The iterator being copied.
     * </p>
     *
     * @return array<TKey, TValue> An array containing items of the iterator.
     */
    public static function toArray (Traversable $iterator):array {

        return iterator_to_array($iterator);

    }

    /**
     * ### Call a function for every element in an iterator
     * @since 0.1.3.pre-alpha.M1
     *
     * @param Traversable<array-key, mixed> $iterator <p>
     * The class to iterate over.
     * </p>
     * @param callable $callback <p>
     * The callback function to call on every element.
     * The function must return true in order to continue iterating over the iterator.
     * </p>
     *
     * @return int Iteration count.
     */
    public static function apply (Traversable $iterator, callable $callback):int {

        return iterator_apply($iterator, $callback);

    }

}