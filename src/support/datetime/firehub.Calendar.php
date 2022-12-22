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

use FireHub\TheCore\Support\LowLevel\ {
    Data, DataIs, DateAndTime
};
use FireHub\TheCore\Support\Enums\ {
    Data\Type, DateTime\DayName,
    DateTime\Format\Day as DayFormat, DateTime\Format\Format, DateTime\Format\Month as MonthFormat, DateTime\Format\Predefined as PredefinedFormat,
    DateTime\Format\Year as YearFormat, DateTime\Format\Week as WeekFormat, DateTime\Format\Time as TimeFormat, DateTime\Format\TimeZone as TimeZoneFormat,
    DateTime\Month, DateTime\Ordinal, DateTime\TimeName, DateTime\TimeZone as TimeZones, DateTime\Unit\Unit, DateTime\WeekDay
};
use DateTime, DateTimeZone, Error, Throwable;

/**
 * ### Calendar support class
 *
 * @since 0.2.0.pre-alpha.M2
 * @since 0.2.1.pre-alpha.M2 Added add, sub, diffrence and fromFormat methods, constructor market as private and added separate method Create.
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Calendar {

    /**
     * ### Base DateTime object
     * @since 0.2.0.pre-alpha.M2
     *
     * @var DateTime
     */
    private readonly DateTime $date_time;

    private TimeZone $time_zone;

    /**
     * ### Constructor
     *
     * @since 0.2.0.pre-alpha.M2
     * @since 0.2.1.pre-alpha.M2 Marked as private.
     *
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone() To get default timezone.
     *
     * @param string $datetime [optional] <p>
     * A date/time string.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetime.formats.php To see valid date/time formats.
     *
     * @throws Error If $datetime is not in valid format.
     */
    private function __construct (string $datetime = 'now', ?TimeZones $time_zone = null) {

        try {

            $this->date_time = new DateTime($datetime, new DateTimeZone($time_zone ? $time_zone->value : (TimeZone::getDefaultTimeZone())->value));
            $this->time_zone = new TimeZone($time_zone ?: (TimeZone::getDefaultTimeZone()));

        } catch (Throwable) {

            throw new Error("Datetime $datetime is not in valid format.");

        }

    }

    /**
     * ### Set calendar to current date and time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     *
     * @param string $datetime <p>
     * A date/time string.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetime.formats.php To see valid date/time formats.
     *
     * @return self New calendar.
     */
    public static function create (string $datetime, ?TimeZones $time_zone = null):self {

        return new self($datetime, $time_zone);

    }

    /**
     * ### Set calendar to current date and time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW To get current date and time.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function now (?TimeZones $time_zone = null):self {

        return new self(TimeName::NOW->value, $time_zone);

    }

    /**
     * ### Set calendar to current date
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\DayName::TODAY To get current date.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function today (TimeName|string $at = TimeName::MIDNIGHT, ?TimeZones $time_zone = null):self {

        return new self(DayName::TODAY->value.' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Set calendar to yesterday date
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\DayName::YESTERDAY To get yesterday's date.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function yesterday (TimeName|string $at = TimeName::MIDNIGHT, ?TimeZones $time_zone = null):self {

        return new self(DayName::YESTERDAY->value.' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Set relative time and date
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @param int $number <p>
     * Number, positive or negative.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit $unit <p>
     * Unit to use.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function relative (int $number, Unit $unit, TimeName|string $at = TimeName::NOW, ?TimeZones $time_zone = null):self {

        return new self($number.' '.$unit->plural().' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Set calendar to first day of specified month
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Month As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Ordinal::FIRST To get first day of the first of the selected month.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger() To get current month as integer.
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
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function firstDay (?Month $month = null, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT, ?TimeZones $time_zone = null):self {

        return new self(Ordinal::FIRST->value.' day of '.($month ? $month->name() : Month::from(DateAndTime::dateInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Set datetime to last day of specified month
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\MonthAs parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Ordinal::LAST To get last day of the first of the selected month.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger() To get current month as integer.
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
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function lastDay (?Month $month, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT, ?TimeZones $time_zone = null):self {

        return new self(Ordinal::LAST->value.' day of '.($month ? $month->name() : Month::from(DateAndTime::dateInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Set datetime by ordinal day of specified weekday name and month
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\WeekDay As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Month As parametar.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT As default parametar.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger() To get current month as integer.
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
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @return self New calendar.
     */
    public static function weekDay (Ordinal $ordinal, WeekDay $weekday, ?Month $month = null, ?int $year = null, TimeName|string $at = TimeName::MIDNIGHT, ?TimeZones $time_zone = null):self {

        return new self($ordinal->value.' '.$weekday->name().' of '.($month ? $month->name() : Month::from(DateAndTime::dateInteger('m') ?: 1)->name()).' '.($year ?? '').' '.(DataIs::string($at) ? $at : $at->value), $time_zone);

    }

    /**
     * ### Parses a time string according to a specified format
     * @since 0.2.1.pre-alpha.M2
     *
     * @param string $format <p>
     * The format that the passed in string should be in.
     * </p>
     * @param string $datetime <p>
     * String representing the datetime.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone [optional] <p>
     * TimeZone enum representing the timezone of $datetime.
     * If $timezone is omitted, the current timezone will be used.
     * </p>
     *
     * @see https://www.php.net/manual/en/datetimeimmutable.createfromformat.php To see valid $datetime formats.
     *
     * @throws Error If system cannot create Calendar from format.
     *
     * @return self New calendar.
     */
    public static function fromFormat (string $format, string $datetime, ?TimeZones $time_zone = null):self {

        $date_time = DateTime::createFromFormat($format, $datetime);

        return new self(
            $date_time ? $date_time->format(PredefinedFormat::DATE_MICRO_TIME->value) : throw new Error("Cannot create Calendar from format: $format"),
            $time_zone
        );

    }

    /**
     * ### Set datetime from timestamp
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DateAndTime::date() To format date and time from timestamp.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATETIME As datetime format.
     *
     * @param int $timestamp <p>
     * Unix timestamp representing the date.
     * </p>
     *
     * @return self New calendar.
     */
    public static function fromTimestamp (int $timestamp):self {

        return new self(DateAndTime::date(PredefinedFormat::DATETIME->value, $timestamp));

    }

    /**
     * ### Gets timestamp from datetime
     * @since 0.2.0.pre-alpha.M2
     *
     * @return int Unix timestamp representing the date.
     */
    public function toTimestamp ():int {

        return $this->date_time->getTimestamp();

    }

    /**
     * ### Formats datetime according to given format
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Format As parameter.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME As default parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if $format is a string.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\Format\Format|string $format [optional] <p>
     * Format enum or string accepted by date().
     * </p>
     *
     * @throws Error If system could not set timezone.
     *
     * @see https://www.php.net/manual/en/datetime.format.php To view valied $format options.
     *
     * @return string Formated datetime.
     */
    public function format (Format|string $format = PredefinedFormat::DATE_MICRO_TIME):string {

        return $this->date_time->format((DataIs::string($format) ? $format : $format->value)); //@phpstan-ignore-line Report that value doesn't exist.

    }

    /**
     * ### Get year
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Year::LONG As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, two digit representation of a year will be returned.
     * </p>
     *
     * @return int Year.
     */
    public function year (bool $short = false):int {

        return Data::setType($short ? $this->format(YearFormat::SHORT) : $this->format(YearFormat::LONG), Type::T_INT);

    }

    /**
     * ### Whether it's a leap year
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Year::LEAP As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_BOOL To set type as booliean.
     *
     * @return bool True if is leap year, false otherwise.
     */
    public function leapYear ():bool {

        return Data::setType($this->format(YearFormat::LEAP), Type::T_BOOL);

    }

    /**
     * ### Get month name
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_SHORT As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_LONG As format type.
     *
     * @param bool $short [optional] <p>
     * If true, three letters of a month will be returned.
     * </p>
     *
     * @return string Month name.
     */
    public function monthName (bool $short = false):string {

        return $short ? $this->format(MonthFormat::TEXTUAL_SHORT) : $this->format(MonthFormat::TEXTUAL_LONG);

    }

    /**
     * ### Get month number
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_SHORT As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_LONG As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of a month will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Month number.
     */
    public function month (bool $short = false):int|string {

        return $short ? Data::setType($this->format(MonthFormat::NUMERIC_SHORT), Type::T_INT) : $this->format(MonthFormat::NUMERIC_LONG);

    }

    /**
     * ### Get number of days in the given month
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMBER_OF_DAYS As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @return int Number of days in the given month.
     */
    public function monthDays ():int {

        return Data::setType($this->format(MonthFormat::NUMBER_OF_DAYS), Type::T_INT);

    }

    /**
     * ### The day of the year
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMBER aS format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @return int Number of days in the given month.
     */
    public function dayinYear ():int {

        return Data::setType($this->format(DayFormat::NUMBER), Type::T_INT) + 1;

    }

    /**
     * ### The day of the month
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_SHORT As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_LONG As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::SUFFIX As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of a day in month will be returned.
     * </p>
     * @param bool $suffix [optional] <p>
     * If true, English ordinal suffix for the day of the month will be added.
     * </p>
     *
     * @return ($short is true ? ($suffix is false ? int : string) : string) Day in month number.
     */
    public function dayInMonth (bool $short = false, bool $suffix = false):int|string {

        return $suffix
            ? ($short
                ? $this->format(DayFormat::NUMERIC_IN_MONTH_SHORT).$this->format(DayFormat::SUFFIX)
                : $this->format(DayFormat::NUMERIC_IN_MONTH_LONG).$this->format(DayFormat::SUFFIX)
            )
            : ($short
                ? Data::setType($this->format(DayFormat::NUMERIC_IN_MONTH_SHORT), Type::T_INT)
                : $this->format(DayFormat::NUMERIC_IN_MONTH_SHORT)
            );

    }

    /**
     * ### The day of the week, starting from Sunday with value 0
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_WEEK_ISO_8601 As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_WEEK As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $iso8601 [optional] <p>
     * If true, Monday will be the first day of the week, with value 1.
     * </p>
     *
     * @return int Day in week.
     */
    public function dayInWeek (bool $iso8601 = false):int {

        return Data::setType($iso8601 ? $this->format(DayFormat::NUMERIC_IN_WEEK_ISO_8601) : $this->format(DayFormat::NUMERIC_IN_WEEK), Type::T_INT);

    }

    /**
     * ### The day name of the week
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::TEXTUAL_IN_WEEK_SHORT As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::TEXTUAL_IN_WEEK_LONG As format type.
     *
     * @param bool $short [optional] <p>
     * If true, three digit representation of a day in week will be returned.
     * </p>
     *
     * @return string Dayname in week.
     */
    public function dayNameInWeek (bool $short = false):string {

        return $short ? $this->format(DayFormat::TEXTUAL_IN_WEEK_SHORT) : $this->format(DayFormat::TEXTUAL_IN_WEEK_LONG);

    }

    /**
     * ### The week number of the year
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\WeekFormat::NUMBER As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @return int Week number of the year.
     */
    public function weekInYear ():int {

        return Data::setType($this->format(WeekFormat::NUMBER), Type::T_INT);

    }

    /**
     * ### 12 hour type of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_SHORT_12 As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_LONG_12 As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MERDIEM_LC As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of an hour in month will be returned.
     * </p>
     * @param bool $meridiem [optional] <p>
     * If true, Ante meridiem and Post meridiem suffix for the hour will be added.
     * </p>
     *
     * @return ($short is true ? ($meridiem is false ? int : string) : string) Hour of the time number.
     */
    public function hourShort (bool $short = false, bool $meridiem = false):int|string {

        return $meridiem
            ? ($short
                ? $this->format(TimeFormat::HOUR_SHORT_12).$this->format(TimeFormat::MERDIEM_LC)
                : $this->format(TimeFormat::HOUR_LONG_12).$this->format(TimeFormat::MERDIEM_LC)
            )
            : ($short
                ? Data::setType($this->format(TimeFormat::HOUR_SHORT_12), Type::T_INT)
                : $this->format(TimeFormat::HOUR_SHORT_12)
            );

    }

    /**
     * ### 24 type hour of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_SHORT_24 As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_LONG_24 As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of an hour in the day will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Hour of the time number.
     */
    public function hourLong (bool $short = false):int|string {

        return $short ? Data::setType($this->format(TimeFormat::HOUR_SHORT_24), Type::T_INT) : $this->format(TimeFormat::HOUR_LONG_24);

    }

    /**
     * ### Minute of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MINUTES As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of the minute in hour will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Minute of the time number.
     */
    public function minute (bool $short = false):int|string {

        return $short ? Data::setType($this->format(TimeFormat::MINUTES), Type::T_INT) : $this->format(TimeFormat::MINUTES);

    }

    /**
     * ### Second of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::SECONDS As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of the second in minute will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Seconds of the time number.
     */
    public function second (bool $short = false):int|string {

        return $short ? Data::setType($this->format(TimeFormat::SECONDS), Type::T_INT) : $this->format(TimeFormat::SECONDS);

    }

    /**
     * ### Milisecond of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MILISECONDS As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of the milisecond in second will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Miliseconds of the time number.
     */
    public function miliSecond (bool $short = false):int|string {

        return $short ? Data::setType($this->format(TimeFormat::MILISECONDS), Type::T_INT) : $this->format(TimeFormat::MILISECONDS);

    }

    /**
     * ### Microsecond of the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MICROSECONDS As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as integer.
     *
     * @param bool $short [optional] <p>
     * If true, single digit representation of the microsecond in second will be returned.
     * </p>
     *
     * @return ($short is true ? int : string) Miliseconds of the time number.
     */
    public function microSecond (bool $short = false):int|string {

        return $short ? Data::setType($this->format(TimeFormat::MICROSECONDS), Type::T_INT) : $this->format(TimeFormat::MICROSECONDS);

    }

    /**
     * ### Daylight saving time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::DAYLIGHT_SAVING_TIME As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_BOOL To set type as boolian.
     *
     * @return bool Whether the date is in daylight saving time.
     */
    public function timeZoneDaylightSavingTime ():bool {

        return Data::setType($this->format(TimeZoneFormat::DAYLIGHT_SAVING_TIME), Type::T_BOOL);

    }

    /**
     * ### Difference to Greenwich time (GMT) without colon between hours and minutes
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF_COLON As format type.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF As format type.
     *
     * @param bool $colon [optional] <p>
     * If true, return diffrence will be with colon between hours and minutes.
     * </p>
     *
     * @return string GMT difference.
     */
    public function timeZoneGMTdiff (bool $colon = false):string {

        return $this->format($colon ? TimeZoneFormat::GMT_DIFF_COLON : TimeZoneFormat::GMT_DIFF);

    }

    /**
     * ### Timezone abbreviation if known; otherwise the GMT offset
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::ABBREVIATION As format type.
     *
     * @return string Timezone abbreviation or GMT offset.
     */
    public function timeZoneAbbreviation ():string {

        return $this->format(TimeZoneFormat::ABBREVIATION);

    }

    /**
     * ### Timezone offset in seconds
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To change type.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::format() To format datetime according to given format.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::OFFSET As format type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set type as boolian.
     *
     * @return int Timezone offset in seconds.
     */
    public function timeZoneOffset ():int {

        return Data::setType($this->format(TimeZoneFormat::OFFSET), Type::T_INT);

    }

    /**
     * ### Sets the date
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::year() To get current year.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::month() To get current month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::dayInMonth() To get current day in month.
     *
     * @param int|null $year [optional] <p>
     * Year of the date.
     * </p>
     * @param int|null $month [optional] <p>
     * Year of the date.
     * </p>
     * @param int|null $day [optional] <p>
     * Year of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setDate (?int $year = null, ?int $month = null, ?int $day = null):self {

        $this->date_time->setDate($year ?? $this->year(), $month ?? $this->month(true), $day ?? $this->dayInMonth(true));

        return $this;

    }

    /**
     * ### Sets the time
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::hourLong() To get current hour.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::minute() To get current minute.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::second() To get current second.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::microSecond() To get current micro second.
     *
     * @param int|null $hour [optional] <p>
     * Hour of the time.
     * </p>
     * @param int|null $minute [optional] <p>
     * Minute of the time.
     * </p>
     * @param int|null $second [optional] <p>
     * Second of the time.
     * </p>
     * @param int|null $micro_second [optional] <p>
     * Micro second of the time.
     * </p>
     *
     * @return $this This object.
     */
    public function setTime (?int $hour = null, ?int $minute = null, ?int $second = null, ?int $micro_second = null):self {

        $this->date_time->setTime($hour ?? $this->hourLong(true), $minute ?? $this->minute(true), $second ?? $this->second(true), $micro_second ?? $this->microSecond(true));

        return $this;

    }

    /**
     * ### Gets current timezone object
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone() To get current timezone.
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As return.
     *
     * @throws Error If system could not get current timezone.
     *
     * @return \FireHub\TheCore\Support\DateTime\TimeZone Current timezone object.
     */
    public function timeZone ():TimeZone {

        return $this->time_zone;

    }

    /**
     * ### Sets timezone
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\TimeZone As parameter.
     *
     * @param \FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone <p>
     * TimeZone enum representing the timezone of $datetime.
     * </p>
     *
     * @throws Error If there was error setting timezone.
     *
     * @return bool True if timezone was set.
     */
    public function changeTimeZone (TimeZones $time_zone):bool {

        try {

            $this->date_time->setTimezone(new DateTimeZone($time_zone->value));
            $this->time_zone = new TimeZone($time_zone);

        } catch (Throwable) {

            throw new Error("There was error setting timezone $time_zone->value.");

        }

        return true;

    }

    /**
     * ### Add interval to datetime
     * @since 0.2.0.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Interval As parameter.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::setDate() To se date.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::setTime() To set time.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::year() To get current year.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::month() To get current month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::dayInMonth() To get current day in month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::hourLong() To get current hour.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::minute() To get current minute.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::second() To get current second.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::microSecond() To get current microsecond.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getYears() As get years from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMonths() As get months from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getDays() As get days from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getHours() As get hours from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMinutes() As get minutes from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getSeconds() As get seconds from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds() As get from Interval.
     *
     * @param \FireHub\TheCore\Support\DateTime\Interval $interval $time_zone <p>
     * Datetime interval.
     * </p>
     *
     * @return $this This object.
     */
    public function add (Interval $interval):self {

        $this->setDate(
            ($this->year() + $interval->getYears()),
            ($this->month(true) + $interval->getMonths()),
            ($this->dayInMonth(true) + $interval->getDays())
        );
        $this->setTime(
            ($this->hourLong(true) + $interval->getHours()),
            ($this->minute(true) + $interval->getMinutes()),
            ($this->second(true) + $interval->getSeconds()),
            ($this->microSecond(true) + $interval->getMicroSeconds())
        );

        return $this;

    }

    /**
     * ### Calculate interval to datetime
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Interval As parameter.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::setDate() To se date.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::setTime() To set time.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::year() To get current year.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::month() To get current month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::dayInMonth() To get current day in month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::hourLong() To get current hour.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::minute() To get current minute.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::second() To get current second.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::microSecond() To get current microsecond.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getYears() As get years from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMonths() As get months from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getDays() As get days from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getHours() As get hours from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMinutes() As get minutes from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getSeconds() As get seconds from Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds() As get from Interval.
     *
     * @param \FireHub\TheCore\Support\DateTime\Interval $interval $time_zone <p>
     * Datetime interval.
     * </p>
     *
     * @return $this This object.
     */
    public function sub (Interval $interval):self {

        $this->setDate(
            ($this->year() - $interval->getYears()),
            ($this->month(true) - $interval->getMonths()),
            ($this->dayInMonth(true) - $interval->getDays())
        );
        $this->setTime(
            ($this->hourLong(true) - $interval->getHours()),
            ($this->minute(true) - $interval->getMinutes()),
            ($this->second(true) - $interval->getSeconds()),
            ($this->microSecond(true) - $interval->getMicroSeconds())
        );

        return $this;

    }

    /**
     * ### Difference between two Calendars
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\DateTime\Calendar As parameter.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::year() To get current year.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::month() To get current month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::dayInMonth() To get current day in month.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::hourLong() To get current hour.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::minute() To get current minute.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::second() To get current second.
     * @uses \FireHub\TheCore\Support\DateTime\Calendar::microSecond() To get current microsecond.
     * @uses \FireHub\TheCore\Support\DateTime\Interval As return.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::years() As add years to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addMonths() As add months to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addDays() As add days to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addHours() As add hours to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addMinutes() As add minutes to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addSeconds() As add seconds to Interval.
     * @uses \FireHub\TheCore\Support\DateTime\Interval::addMicroSeconds() As add microseconds to Interval.
     *
     * @param \FireHub\TheCore\Support\DateTime\Calendar $date <p>
     * Datetime interval.
     * </p>
     *
     * @return \FireHub\TheCore\Support\DateTime\Interval Interval diffrence between two Calendars.
     */
    public function diffrence (Calendar $date):Interval {

        return Interval::years($this->year() - $date->year())
            ->addMonths($this->month(true) - $date->month(true))
            ->addDays($this->dayInMonth(true) - $date->dayInMonth(true))
            ->addHours($this->hourLong(true) - $date->hourLong(true))
            ->addMinutes($this->minute(true) - $date->minute(true))
            ->addSeconds($this->second(true) - $date->second(true))
            ->addMicroSeconds($this->microSecond(true) - $date->microSecond(true));

    }

}