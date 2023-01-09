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
 * ### Day format enum
 * @since 0.2.0.pre-alpha.M2
 *
 * @api
 */
enum Day:string implements Format {

    /**
     * ### The day of the year (starting from 0)
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 0 through 365
     * ```
     */
    case NUMBER = 'z';

    /**
     * ### Day of the month, 2 digits with leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 01 to 31
     * ```
     */
    case NUMERIC_IN_MONTH_LONG = 'd';

    /**
     * ### Day of the month without leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 to 31
     * ```
     */
    case NUMERIC_IN_MONTH_SHORT = 'j';

    /**
     * ### Full textual representation of the day of the week
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * Sunday through Saturday
     * ```
     */
    case TEXTUAL_IN_WEEK_LONG = 'l';

    /**
     * ### Textual representation of a day, three letters
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * Mon through Sun
     * ```
     */
    case TEXTUAL_IN_WEEK_SHORT = 'D';

    /**
     * ### Numeric representation of the day of the week
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 0 (for Sunday) through 6 (for Saturday)
     * ```
     */
    case NUMERIC_IN_WEEK = 'w';

    /**
     * ### ISO 8601 numeric representation of the day of the weeK
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 (for Monday) through 7 (for Sunday)
     * ```
     */
    case NUMERIC_IN_WEEK_ISO_8601 = 'N';

    /**
     * ### English ordinal suffix for the day of the month, 2 characters
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * st, nd, rd or th
     * ```
     *
     * @note Works well with NUMERIC_IN_MONTH_SHORT.
     */
    case SUFFIX = 'S';

}