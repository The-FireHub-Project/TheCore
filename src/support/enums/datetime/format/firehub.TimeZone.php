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
 * ### Timezone format enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum TimeZone:string implements Format {

    /**
     * ### Whether the date is in daylight saving time
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 if Daylight Saving Time, 0 otherwise
     * ```
     */
    case DAYLIGHT_SAVING_TIME = 'I';

    /**
     * ### Difference to Greenwich time (GMT) without colon between hours and minutes
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * +0200
     * ```
     */
    case GMT_DIFF = 'O';

    /**
     * ### Difference to Greenwich time (GMT) with colon between hours and minutes
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * +02:00
     * ```
     */
    case GMT_DIFF_COLON = 'P';

    /**
     * ### Timezone abbreviation, if known; otherwise the GMT offset
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * EST, MDT, +05
     * ```
     */
    case ABBREVIATION = 'T';

    /**
     * ### Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * -43200 through 50400
     * ```
     */
    case OFFSET = 'Z';

}