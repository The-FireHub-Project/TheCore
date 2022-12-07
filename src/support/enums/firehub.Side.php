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

namespace FireHub\TheCore\Support\Enums;

/**
 * ### Side enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Side:int {

    /**
     * ### Use left side
     * @since 0.1.3.pre-alpha.M1
     */
    case LEFT = 0;

    /**
     * ### Use right side
     * @since 0.1.3.pre-alpha.M1
     */
    case RIGHT = 1;

    /**
     * ### Use both sides
     * @since 0.1.3.pre-alpha.M1
     */
    case BOTH = 2;

}