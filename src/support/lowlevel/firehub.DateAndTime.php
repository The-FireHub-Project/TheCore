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

use function date;
use function date_sun_info;
use function idate;
use function strtotime;

/**
 * ### Date and time low level class
 *
 * @since 0.1.3.pre-alpha.M1
 * @since 0.2.1.pre-alpha.M2 Removed timezone methods, changed default $format in format method.
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
final class DateAndTime {

    /**
     * ### Parse about any English textual datetime description into a Unix timestamp
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $datetime <p>
     * A date/time string.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetime.formats.php To check how to pass $datetime parameter.
     *
     * @return int|false Timestamp on success, false otherwise.
     *
     * @note f the number of the year is specified in a two digit format, the values between 00-69 are mapped to 2000-2069 and 70-99 to 1970-1999. See the notes below for possible differences on 32bit systems (possible dates might end on 2038-01-19 03:14:07).
     * @note The valid range of a timestamp is typically from Fri, 13 Dec 1901 20:45:54 UTC to Tue, 19 Jan 2038 03:14:07 UTC. (These are the dates that correspond to the minimum and maximum values for a 32-bit signed integer.). For 64-bit versions of PHP, the valid range of a timestamp is effectively infinite, as 64 bits can represent approximately 293 billion years in either direction.
     */
    public static function toTimestamp (string $datetime):int|false {

        return strtotime($datetime);

    }

    /**
     * ### Format a local time/date
     *
     * @since 0.1.3.pre-alpha.M1
     * @since 0.2.1.pre-alpha.M2 Changed default $format.
     *
     * @param string $format [optional] <p>
     * The format of the outputted date string.
     * </p>
     * @param int|null $timestamp [optional] <p>
     * The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetime.format.php To check valid $format formats.
     *
     * @return string Formatted date string.
     */
    public static function format (string $format = 'Y-m-d H:i:s.u', ?int $timestamp = null):string {

        return date($format, $timestamp);

    }

    /**
     * ### Format a local time/date as integer
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $format <p>
     * Single format character.
     * </p>
     * @param int|null $timestamp [optional] <p>
     * The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given.
     * </p>
     *
     * @see https://www.php.net/manual/en/function.idate.php
     *
     * @return int|false Formatted date as integer, false otherwise.
     */
    public static function formatInteger (string $format, ?int $timestamp = null):int|false {

        return idate($format, $timestamp);

    }

    /**
     * ### Gets information about sunset/sunrise and twilight begin/end
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int $timestamp <p>
     * Unix timestamp.
     * </p>
     * @param float $latitude <p>
     * Latitude in degrees.
     * </p>
     * @param float $longitude <p>
     * Longitude in degrees.
     * </p>
     *
     * @return array{
     *      sunrise: int|bool,
     *      sunset: int|bool,
     *      transit: int|bool,
     *      civil_twilight_begin: int|bool,
     *      civil_twilight_end: int|bool,
     *      nautical_twilight_begin: int|bool,
     *      nautical_twilight_end: int|bool,
     *      astronomical_twilight_begin: int|bool,
     *      astronomical_twilight_end: int|bool
     * }Array with sunset and twilight details.
     */
    public static function sunInfo (int $timestamp, float $latitude, float $longitude):array {

        /**
         * PHPStan reports that date_sun_info returns array<string, bool|int>
         * @phpstan-ignore-next-line
         */
        return date_sun_info($timestamp, $latitude, $longitude);

    }

}