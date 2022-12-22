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
    Arr, StrSB
};
use FireHub\TheCore\Support\Enums\DateTime\Unit\ {
    Basic, Calculatable, Days, Microseconds, Months, Years
};
use Error;

/**
 * ### Interval support class
 * @since 0.2.1.pre-alpha.M2
 *
 * @method static self millenniums (int $number) ### Create interval specifying a number of millenniums
 * @method static self centurys (int $number) ### Create interval specifying a number of centurys
 * @method static self decades (int $number) ### Create interval specifying a number of decades
 * @method static self years (int $number) ### Create interval specifying a number of years
 * @method static self quarters (int $number) ### Create interval specifying a number of quarters
 * @method static self months (int $number) ### Create interval specifying a number of months
 * @method static self fortnights (int $number) ### Create interval specifying a number of fortnights
 * @method static self weeks (int $number) ### Create interval specifying a number of weeks
 * @method static self days (int $number) ### Create interval specifying a number of days
 * @method static self hours (int $number) ### Create interval specifying a number of hours
 * @method static self minutes (int $number) ### Create interval specifying a number of minutes
 * @method static self seconds (int $number) ### Create interval specifying a number of seconds
 * @method static self milliseconds (int $number) ### Create interval specifying a number of milliseconds
 * @method static self microSeconds (int $number) ### Create interval specifying a number of microseconds
 * @method int getYears () ### Get years from interval
 * @method int getMonths () ### Get months from interval
 * @method int getDays () ### Get days from interval
 * @method int getHours () ### Get hours from interval
 * @method int getMinutes () ### Get minutes from interval
 * @method int getSeconds () ### Get seconds from interval
 * @method int getMicroSeconds () ### Get microseconds from interval
 * @method self addMillenniums (int $number) ### Add given number of millenniums to the current interval
 * @method self addCenturys (int $number) ### Add given number of centurys to the current interval
 * @method self addDecades (int $number) ### Add given number of decades to the current interval
 * @method self addYears (int $number) ### Add given number of years to the current interval
 * @method self addQuarters (int $number) ### Add given number of quarters to the current interval
 * @method self addMonths (int $number) ### Add given number of months to the current interval
 * @method self addFortnights (int $number) ### Add given number of fortnights to the current interval
 * @method self addWeeks (int $number) ### Add given number of weeks to the current interval
 * @method self addDays (int $number) ### Add given number of days to the current interval
 * @method self addHours (int $number) ### Add given number of hours to the current interval
 * @method self addMinutes (int $number) ### Add given number of minutes to the current interval
 * @method self addSeconds (int $number) ### Add given number of seconds to the current interval
 * @method self addMilliSeconds (int $number) ### Add given number of milliseconds to the current interval
 * @method self addMicroSeconds (int $number) ### Add given number of microseconds to the current intervaL
 * @method self subMillenniums (int $number) ### Sub given number of millenniums to the current interval
 * @method self subCenturys (int $number) ### Sub given number of centurys to the current interval
 * @method self subDecades (int $number) ### Sub given number of decades to the current interval
 * @method self subYears (int $number) ### Sub given number of years to the current interval
 * @method self subQuarters (int $number) ### Sub given number of quarters to the current interval
 * @method self subMonths (int $number) ### Sub given number of months to the current interval
 * @method self subFortnights (int $number) ### Sub given number of fortnights to the current interval
 * @method self subWeeks (int $number) ### Sub given number of weeks to the current interval
 * @method self subDays (int $number) ### Sub given number of days to the current interval
 * @method self subHours (int $number) ### Sub given number of hours to the current interval
 * @method self subMinutes (int $number) ### Sub given number of minutes to the current interval
 * @method self subSeconds (int $number) ### Sub given number of seconds to the current interval
 * @method self subMilliSeconds (int $number) ### Sub given number of milliseconds to the current interval
 * @method self subMicroSeconds (int $number) ### Sub given number of microseconds to the current interval
 *
 * @api
 */
final class Interval {

    /**
     * ### Basic units
     * @since 0.2.1.pre-alpha.M2
     *
     * @var Basic[]
     */
    private array $basic_units;

    /**
     * ### Units
     * @since 0.2.1.pre-alpha.M2
     *
     * @var Calculatable[]
     */
    private array $calculatable_units;

    /**
     * ### Constructor
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::merge() To merge all calculatable enums.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::cases() To get all basic unit enums.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Days::cases() To get all days unit enums.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Microseconds::cases() To get all days unit enums.
     */
    private function __construct () {

        // add basic units
        $this->basic_units = Basic::cases();

        // collect all units
        $this->calculatable_units = Arr::merge(
            Years::cases(),
            Months::cases(),
            Days::cases(),
            Microseconds::cases()
        );

    }

    /**
     * ### Reading from inaccessible properties
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::merge() To merge all unit enums.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::plural() To get plural of enum case.
     *
     * @param string $name <p>
     * Property name.
     * </p>
     *
     * @throws Error If called property doest't exist.
     *
     * @return int Property value.
     */
    public function __get (string $name):int {

        foreach ($this->basic_units as $basic_unit) {

            if ($basic_unit->plural() === $name) {

                return $this->$name = 0;

            }

        }

        foreach ($this->calculatable_units as $calculatable_unit) {

            if ($calculatable_unit->plural() === $name) {

                return 0;

            }

        }

        throw new Error("Property $name doesn't exist.");

    }

    /**
     * ### Writing to inaccessible properties
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::merge() To merge all unit enums.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::plural() To get plural of enum case.
     *
     * @param string $name <p>
     * Property name.
     * </p>
     * @param mixed $value <p>
     * Property value.
     * </p>
     *
     * @throws Error If called property doest't exist.
     *
     * @return void
     */
    public function __set (string $name, mixed $value):void {

        foreach ($this->basic_units as $basic_unit) {

            if ($basic_unit->plural() === $name) {

                $this->$name = $value;

                return;

            }

        }

        foreach ($this->calculatable_units as $calculatable_unit) {

            if ($calculatable_unit->plural() === $name) {

                $parent = $calculatable_unit->parent()->plural();

                $this->$parent = $this->$parent + ($calculatable_unit->calculate() * $value);

                return;

            }

        }

        throw new Error("Property $name doesn't exist.");

    }

    /**
     * ### Invoking inaccessible methods in an object context
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::startsWith() To check with what method argument starts.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toLower() To lowercase method name.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::part() To extract part of method name.
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::plural() To get plural from enum case.
     *
     * @param string $method <p>
     * Method name.
     * </p>
     * @param array{array-key, string} $arguments <p>
     * List of arguments.
     * </p>
     *
     * @throws Error If called method doest't exist.
     * @throws Error If method doest't have first parameter.
     *
     * @return self|int New interval for add or sub methods, or int for get method is called.
     */
    public function __call (string $method, array $arguments):self|int {

        if (StrSB::startsWith('get', $method)) {

            $property = StrSB::toLower(StrSB::part($method, 3));

            foreach ($this->basic_units as $unit) if ($property === $unit->plural()) return $this->$property;

        }

        if (StrSB::startsWith('add', $method)) {

            $property = StrSB::toLower(StrSB::part($method, 3));

            $this->$property = $this->$property + ($arguments[0] ?? throw new Error("Method $method must have first parameter."));

            return $this;

        }

        if (StrSB::startsWith('sub', $method)) {

            $property = StrSB::toLower(StrSB::part($method, 3));

            $this->$property = $this->$property - ($arguments[0] ?? throw new Error("Method $method must have first parameter."));

            return $this;

        }

        throw new Error("Method $method doesn't exist.");

    }

    /**
     * ### Invoking inaccessible static methods in an object context
     * @since 0.2.1.pre-alpha.M2
     *
     * @param string $method <p>
     * Method name.
     * </p>
     * @param array{array-key, string} $arguments <p>
     * List of arguments.
     * </p>
     *
     * @return self New interval.
     */
    public static function __callStatic (string $method, array $arguments):self {

        $addMethod = 'add'.$method;

        $interval = (new self());
        $interval->$addMethod(($arguments[0] ?? throw new Error("Method $method must have first parameter.")));

        return $interval;

    }

}