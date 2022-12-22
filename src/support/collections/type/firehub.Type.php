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

namespace FireHub\TheCore\Support\Collections\Type;

use Closure;

/**
 * ### Collection type
 * @since 0.2.2.pre-alpha.M2
 */
abstract class Type {

    /**
     * ### Constructor
     * @since 0.2.2.pre-alpha.M2
     *
     * @param Closure $callable <p>
     * Data from callable source.
     * </p>
     * @param class-string $storage <p>
     * Storage for collection to use.
     * </p>
     */
    public function __construct (
        private readonly Closure $callable,
        private readonly string $storage
    ) {}

}