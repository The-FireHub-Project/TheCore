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

namespace FireHub\TheCore\Support\DateTime;

use FireHub\TheCore\Support\LowLevel\TimeZone as TimeZone_LL;
use FireHub\TheCore\Support\Enums\ {
    DateTime\TimeZone as Zone, Geo\Continent, Geo\Country
};
use DateTime, DateTimeZone, Error, Throwable;

/**
 * ### TimeZone support class
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
final class TimeZone {

    /**
     * ### Base DateTimeZone object
     * @since 0.2.1.pre-alpha.M2
     *
     * @var DateTimeZone
     */
    private DateTimeZone $date_time_zone;

    /**
     * ### Constructor
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone As parametar.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone $timezone <p>
     * TimeZone enum.
     * </p>
     *
     * @throws Error If $timezone is not in valid.
     */
    public function __construct (private readonly Zone $timezone) {

        try {

            $this->date_time_zone = new DateTimeZone($timezone->value);

        } catch (Throwable) { // @phpstan-ignore-line PHPStan error, there can be Execption

            throw new Error("Timezone $timezone->value is not in valid.");

        }

    }

    /**
     * ### Name of the timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @return string Timezone name.
     */
    public function name ():string {

        return $this->timezone->value;

    }

    /**
     * ### GMT offset for the timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone To get GMT timezone.
     *
     * @throws Error If error happened while calculating GMT offset.
     *
     * @return int Time zone offset in seconds between selected timezone and Greenwich Mean Time.
     */
    public function offsetGMT ():int {

        try {

            return $this->date_time_zone->getOffset(
                new DateTime(Zone::EUROPE_LONDON->value)
            );

        } catch (Throwable) {

            throw new Error("There was an error calculating GMT offset.");

        }

    }

    /**
     * ### Get timezone latitude
     * @since 0.2.1.pre-alpha.M2
     *
     * @throws Error If system could not get timezone latitude.
     *
     * @return float Timezone latitude.
     */
    public function latitude ():float {

        return $this->date_time_zone->getLocation()['latitude'] ?? throw new Error('Could not get timezone latitude.');

    }

    /**
     * ### Get timezone longitude
     * @since 0.2.1.pre-alpha.M2
     *
     * @throws Error If system could not get timezone longitude.
     *
     * @return float Timezone longitude.
     */
    public function longitude ():float {

        return $this->date_time_zone->getLocation()['longitude'] ?? throw new Error('Could not get timezone longitude.');

    }

    /**
     * ### Get country for timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\Geo\Country As return.
     *
     * @throws Error If system could not get timezone country.
     *
     * @return Country Country enum for timezone.
     */
    public function country ():Country {

        return ($country_code = $this->date_time_zone->getLocation()['country_code'] ?? false) && ($country = Country::tryFrom($country_code))
            ? $country
            : throw new Error('Could not get timezone country.');

    }

    /**
     * ### Get continent for timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\Geo\Continent As return.
     *
     * @throws Error If system could not get timezone country.
     *
     * @return Continent Continent enum for country timezone.
     */
    public function continent ():Continent {

        return $this->country()->continent();

    }

    /**
     * ### Gets default timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone As return.
     * @uses \FireHub\TheCore\Support\LowLevel\TimeZone::getDefaultTimezone() To get default timezone.
     *
     * @throws Error If system could not get default timezone.
     *
     * @return \FireHub\TheCore\Support\Enums\DateTime\TimeZone Current timezone.
     */
    public static function getDefaultTimeZone ():Zone {

        return ($timezone = TimeZone_LL::getDefaultTimezone()) ? $timezone : throw new Error('Could not get default timezone.');

    }

    /**
     * ### Sets default timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\TimeZone::setDefaultTimezone() To set default timezone.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone <p>
     * TimeZone enum.
     * </p>
     *
     * @throws Error If system could not set default timezone.
     *
     * @return bool True if success, false otherwise.
     */
    public static function setDefaultTimeZone (Zone $time_zone):bool {

        return (TimeZone_LL::setDefaultTimezone($time_zone)) ? true : throw new Error('Could not set default timezone.');

    }

}