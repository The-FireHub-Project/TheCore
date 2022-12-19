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

/**
 * ### Interval support class
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
final class Interval {

    /**
     * ### Constructor
     * @since 0.2.1.pre-alpha.M2
     *
     * @param int $years [optional] <p>
     * Number of years.
     * </p>
     * @param int $months [optional] <p>
     * Number of months.
     * </p>
     * @param int $weeks [optional] <p>
     * Number of weeks.
     * </p>
     * @param int $days [optional] <p>
     * Number of days.
     * </p>
     * @param int $hours [optional] <p>
     * Number of hours.
     * </p>
     * @param int $minutes [optional] <p>
     * Number of minutes.
     * </p>
     * @param int $seconds [optional] <p>
     * Number of seconds.
     * </p>
     * @param int $microseconds [optional] <p>
     * Number of microseconds.
     * </p>
     */
    public function __construct (
        public int $years = 0,
        public int $months = 0,
        private readonly int $weeks = 0,
        public int $days = 0,
        public int $hours = 0,
        public int $minutes = 0,
        public int $seconds = 0,
        public int $microseconds = 0
    ) {

        $this->days = $this->days + ($this->weeks * 7);

    }

}