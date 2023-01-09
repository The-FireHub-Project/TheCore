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

use FireHub\TheCore\Support\Enums\DateTime\TimeZone as TimeZones;

use function date_default_timezone_get;
use function date_default_timezone_set;

/**
 * ### TimeZone low level class
 * @since 0.2.0.pre-alpha.M2
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolean arguments.
 */
final class TimeZone {

    /**
     * ### Gets the default timezone used by all date/time functions in a script
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone To check for valid timezone.
     *
     * @return \FireHub\TheCore\Support\Enums\DateTime\TimeZone|false Timezone, false if timezone doesn't exist.
     */
    public static function getDefaultTimezone ():TimeZones|false {

        $default = date_default_timezone_get();

        return ($time_zone = TimeZones::tryFrom($default)) ? $time_zone : false;

    }

    /**
     * ### Sets the default timezone used by all date/time functions in a script
     * @since 0.2.0.pre-alpha.M2
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone <p>
     * The timezone identifier.
     * </p>
     *
     * @return bool False if the timezone_identifier isn't valid, or true otherwise.
     */
    public static function setDefaultTimezone (TimeZones $time_zone):bool {

        return date_default_timezone_set($time_zone->value);

    }

}