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

use FireHub\TheCore\Support\Collections\Type\ {
    Associative, Basic
};
use Closure;

/**
 * ### Collection type
 * @since 0.2.2.pre-alpha.M2
 */
final class Type {

    /**
     * ### Constructor
     * @since 0.2.2.pre-alpha.M2
     *
     * @param class-string $storage <p>
     * Storage for collection to use.
     * </p>
     */
    public function __construct (
        private readonly string $storage
    ) {}

    /**
     * ### Basic array collection type
     *
     * Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).
     * @since 0.2.2.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Collections\Type\Basic As return.
     *
     * @param Closure $callable <p>
     * Data from callable source.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Collections\Type\Basic Basic collection.
     */
    public function basic (Closure $callable):Basic {

        return new Basic($callable, $this->storage);

    }

    /**
     * ### Associative array collection type
     *
     * Collections that use named keys that you assign to them.
     * @since 0.2.2.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Collections\Type\Associative As return.
     *
     * @param Closure $callable <p>
     * Data from callable source.
     * </p>
     *
     * @return \FireHub\TheCore\Support\Collections\Type\Associative Associative collection.
     */
    public function associative (Closure $callable):Associative {

        return new Associative($callable, $this->storage);

    }

}