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

namespace FireHub\TheCore\Support\Enums\DateTime\Format;

/**
 * ### Year format enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Year:string implements Format {

    /**
     * ### Full numeric representation of a year, at least 4 digits, with - for years BCE
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * -0055, 0787, 1999, 2003, 10191
     * ```
     */
    case LONG = 'Y';

    /**
     * ### Two digit representation of a year
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 99 or 03
     * ```
     */
    case SHORT = 'y';

    /**
     * ### 1 if it is a leap year, 0 otherwise
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 or 0
     * ```
     */
    case LEAP = 'L';

}