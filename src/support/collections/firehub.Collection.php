<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Support\Calendar
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Support\Collections;

use FireHub\TheCore\Support\Collections\Storage\ {
    Eager, Lazy
};
use FireHub\TheCore\Support\Collections\Type\Basic;
use Closure;

/**
 * ### ### Data collection
 *
 * Collection is a wrapper for working with lists of data.
 * @since 0.2.2.pre-alpha.M2
 *
 * @api
 */
final class Collection {

    /**
     * ### Constructor
     *
     * Prevents instantiation of main collection class
     * @since 0.2.2.pre-alpha.M2
     */
    private function __construct () {}

    /**
     * ### Array collection type
     *
     * Array Collection type is collection that has main focus of performance
     * and doesn't concern itself about memory consumption.
     * This collection can hold any type of data.
     * @since 0.2.2.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Collections\Type As return.
     * @uses \FireHub\TheCore\Support\Collections\Type\Basic As default return.
     * @uses \FireHub\TheCore\Support\Collections\Storage\Eager As type of storage.
     *
     * @param Closure|null $callable [optional] <p>
     * Data from callable source.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic Array collection.
     */
    public static function create (?Closure $callable = null):Type|Basic {

        return $callable ? new Basic($callable, Eager::class) : new Type(Eager::class);

    }

    /**
     * ### Lazy collection type
     *
     * @uses \FireHub\TheCore\Support\Collections\Type As return.
     * @uses \FireHub\TheCore\Support\Collections\Type\Basic As default return.
     * @uses \FireHub\TheCore\Support\Collections\Storage\Lazy As type of storage.
     *
     * Lazy Collection allow you to work with very large datasets
     * while keeping memory usage low.
     * @since 0.2.2.pre-alpha.M2
     *
     * @param Closure|null $callable [optional] <p>
     * Data from callable source.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic Lazy collection.
     */
    public static function lazy (?Closure $callable = null):Type|Basic {

        return $callable ? new Basic($callable, Lazy::class) : new Type(Lazy::class);

    }

}