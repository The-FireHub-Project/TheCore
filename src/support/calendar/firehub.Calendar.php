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

namespace FireHub\TheCore\Support\Calendar;

use FireHub\TheCore\Support\LowLevel\ {
    DataIs, DateAndTime, TimeZone
};
use FireHub\TheCore\Support\Enums\ {
    DateTime\DayName, DateTime\Month, DateTime\Ordinal, DateTime\TimeName, DateTime\TimeZone as TimeZones, DateTime\Unit, DateTime\WeekDay
};
use DateTime, Error, Throwable;

/**
 * ### Calendar support class
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
final class Calendar {

    /**
     * ### Base DateTime object
     * @since 0.2.1.pre-alpha.M2
     *
     * @var DateTime
     */
    private DateTime $dateTime;

    /**
     * ### Constructor
     * @since 0.2.1.pre-alpha.M2
     *
     * @param string $datetime [optional] <p>
     * A date/time string.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetime.formats.php To see valid date/time formats.
     *
     * @throws Error If $datetime is not in valid format.
     */
    public function __construct (string $datetime = 'now') {

        try {

            $this->dateTime = new DateTime($datetime);

        } catch (Throwable) {

            throw new Error("Datetime $datetime is not in valid format.");

        }

    }

    /**
     * ### Set calendar to current date and time
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW To get current date and time.
     *
     * @return self New calendar.
     */
    public static function now ():self {

        return new self(TimeName::NOW->value);

    }

    /**
     * ### Set calendar to current date
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\DayName::TODAY To get current date.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function today (TimeName|string $at = TimeName::MIDNIGHT):self {

        return new self(DayName::TODAY->value.' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set calendar to yesterday date
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\DayName::YESTERDAY To get yesterday's date.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function yesterday (TimeName|string $at = TimeName::MIDNIGHT):self {

        return new self(DayName::YESTERDAY->value.' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set relative time and date
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW As default parametar.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param int $number <p>
     * Number, positive or negative.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\Unit $unit <p>
     * Unit to use.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function relative (int $number, Unit $unit, TimeName|string $at = TimeName::NOW):self {

        return new self($number.' '.$unit->value.' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set calendar to first day of specified month
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Month As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Ordinal::FIRST To get first day of the first of the selected month.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger() To get current month as integer.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\Month|null $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param int|null $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function firstDay (?Month $month = null, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT):self {

        return new self(Ordinal::FIRST->value.' day of '.($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set datetime to last day of specified month
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\MonthAs parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Ordinal::LAST To get last day of the first of the selected month.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger() To get current month as integer.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\Month|null $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param int|null $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function lastDay (?Month $month, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT):self {

        return new self(Ordinal::LAST->value.' day of '.($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set datetime by ordinal day of specified weekday name and month
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\WeekDay As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Month As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger() To get current month as integer.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\Ordinal $ordinal <p>
     * Sets ordinal value for datetime.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\WeekDay $weekday <p>
     * Sets weekday name for datetime.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\Month|null $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param int|null $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return self New calendar.
     */
    public static function weekDay (Ordinal $ordinal, WeekDay $weekday, ?Month $month = null, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT):self {

        return new self($ordinal->value.' '.$weekday->name().' of '.($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value));

    }

    /**
     * ### Set datetime to yesterday date
     * @since 0.2.1.pre-alpha.M2
     *
     * @param int $timestamp <p>
     * Unix timestamp representing the date.
     * </p>
     *
     * @return self New datetime.
     */
    public static function fromTimestamp (int $timestamp):self {

        return new self(DateAndTime::format('Y-m-d H:i:s', $timestamp));

    }

    /**
     * ### Gets current timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone As return.
     * @uses \FireHub\TheCore\Support\LowLevel\TimeZone::getDefaultTimezone() To get default timezone.
     *
     * @throws Error If system could not get current timezone.
     *
     * @return \FireHub\TheCore\Support\Enums\DateTime\TimeZone Current timezone.
     */
    public function getTimeZone ():TimeZones {

        return ($timezone = TimeZone::getDefaultTimezone()) ? $timezone : throw new Error('Could not get current timezone.');

    }

    /**
     * ### Sets current timezone
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\TimeZone::setDefaultTimezone() To set default timezone.
     *
     * @throws Error If system could not set timezone.
     *
     * @return bool True if success, false otherwise.
     */
    public static function setTimeZone (TimeZones $time_zone):bool {

        return ($timezone = TimeZone::setDefaultTimezone($time_zone)) ? $timezone : throw new Error('Could not set timezone.');

    }

}