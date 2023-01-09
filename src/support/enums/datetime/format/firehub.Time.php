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
 * ### Time format enum
 * @since 0.2.0.pre-alpha.M2
 *
 * @api
 */
enum Time:string implements Format {

    /**
     * ### Lowercase Ante meridiem and Post meridiem
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * am or pm
     * ```
     */
    case MERDIEM_LC = 'a';

    /**
     * ### Uppercase Ante meridiem and Post meridiem
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * AM or PM
     * ```
     */
    case MERDIEM_UC = 'A';

    /**
     * ### Swatch Internet time
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 000 or 999
     * ```
     */
    case BEATS = 'B';

    /**
     * ### 12-hour format of an hour without leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 through 12
     * ```
     */
    case HOUR_SHORT_12 = 'g';

    /**
     * ### 24-hour format of an hour without leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 0 through 23
     * ```
     */
    case HOUR_SHORT_24 = 'G';

    /**
     * ### 12-hour format of an hour with leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 01 through 12
     * ```
     */
    case HOUR_LONG_12 = 'h';

    /**
     * ### 24-hour format of an hour with leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 00 through 23
     * ```
     */
    case HOUR_LONG_24 = 'H';

    /**
     * ### Minutes with leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 00 to 59
     * ```
     */
    case MINUTES = 'i';

    /**
     * ### Seconds with leading zeros
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 00 through 59
     * ```
     */
    case SECONDS = 's';

    /**
     * ### Miliseconds
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 654
     * ```
     */
    case MILISECONDS = 'v';

    /**
     * ### Microseconds
     * @since 0.2.0.pre-alpha.M2
     *
     * @example
     * ```php
     * 654321
     * ```
     */
    case MICROSECONDS = 'u';

}