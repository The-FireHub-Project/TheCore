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

use function intdiv;

/**
 * ### Integer low level class
 * @since 0.1.3.pre-alpha.M1
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
final class IntNum extends Num {

    /**
     * ### Checks if value is integer
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::int() To check if value is integer.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is int ? true : false) True if value is interger, false otherwise.
     */
    public static function isInt (mixed $value):bool {

        return DataIs::int($value);

    }

    /**
     * ### Integer division
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int $dividend <p>
     * Number to be divided.
     * </p>
     * @param int $divisor <p>
     * Number which divides the $dividend.
     * </p>
     *
     * @return int The integer quotient of the division of $dividend by $divisor.
     */
    public static function divide (int $dividend, int $divisor):int {

        return intdiv($dividend, $divisor);

    }

}