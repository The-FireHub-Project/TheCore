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

use function checkdate;

/**
 * ### Date and time low level class
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolian arguments.
 */
final class Date {

    /**
     * ### Check for valid date
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int<1, 31> $day <p>
     * The day is within the allowed number of days for the given month. Leap years are taken into consideration.
     * </p>
     * @param int $month <p>
     * The month is between 1 and 12 inclusive.
     * </p>
     * @param int<1, 12> $year <p>
     * The year is between 1 and 32767 inclusive
     * </p>
     *
     * @return bool True if the date given is valid, otherwise returns false.
     */
    public static function check (int $day, int $month, int $year):bool {

        return checkdate($month, $day, $year);

    }

}