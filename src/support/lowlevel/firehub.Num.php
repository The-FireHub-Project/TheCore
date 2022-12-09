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

use FireHub\TheCore\Support\Enums\Number\RoundMode;

use function abs;
use function ceil;
use function floor;
use function max;
use function min;
use function pow;
use function round;

/**
 * ### Number low level class
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
class Num {

    /**
     * ### Checks if value is numeric
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::numeric() To check if value is numeric.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is numeric ? true : false) True if value is numeric, false otherwise.
     */
    public static function numeric (mixed $value):bool {

        return DataIs::numeric($value);

    }

    /**
     * ### Get absolute value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int|float $number <p>
     * The numeric value to process.
     * </p>
     *
     * @return ($number is int ? int : float) The absolute value of provided number.
     */
    final public static function absolute (int|float $number):int|float {

        return abs($number);

    }

    /**
     * ### Rounds a float
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Number\RoundMode::PHP_ROUND_HALF_UP To round numbers away from zero when it is half way there.
     *
     * @param int|float $number <p>
     * The value to round.
     * </p>
     * @param int $precision [optional] <p>
     * Number of decimal digits to round to.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Number\RoundMode $round_mode [optional] <p>
     * Specify the mode in which rounding occurs.
     * </p>
     *
     * @return ($precision is 0 ? int : float) Rounded number float.
     */
    final public static function round (int|float $number, int $precision = 0, RoundMode $round_mode = RoundMode::PHP_ROUND_HALF_UP):int|float {

        $round = round($number, $precision, $round_mode->value);

        return $precision > 0 ? $round : (int)$round;

    }

    /**
     * ### Round fractions up
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int|float $number <p>
     * The value to round up.
     * </p>
     *
     * @return int Rounded number up to the next highest integer.
     */
    final public static function ceil (int|float $number):int {

        return self::round(ceil($number));

    }

    /**
     * ### Round fractions down
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int|float $number <p>
     * The value to round down.
     * </p>
     *
     * @return int Rounded number up to the next lowest integer.
     */
    final public static function floor (int|float $number):int {

        return self::round(floor($number));

    }

    /**
     * ### Find highest value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Any comparable value.
     * </p>
     * @param mixed ...$values <p>
     * Any comparable values.
     * </p>
     *
     * @return mixed Parameter value considered highest according to standard comparisons. If an empty array is passed, then false will be returned.
     */
    final public static function max (mixed $value, mixed ...$values):mixed {

        return max($value, ...$values);

    }

    /**
     * ### Find lowest value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Any comparable value.
     * </p>
     * @param mixed ...$values <p>
     * Any comparable values.
     * </p>
     *
     * @return mixed Parameter value considered lowest according to standard comparisons. If an empty array is passed, then false will be returned.
     */
    final public static function min (mixed $value, mixed ...$values):mixed {

        return min($value, $values);

    }

    /**
     * ### Exponential expression
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int|float $base <p>
     * The base to use.
     * </p>
     * @param int|float $exponent <p>
     * The exponent.
     * </p>
     *
     * @return int|float Base raised to the power of exponent. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with int type, otherwise it will be returned as a float.
     */
    final public static function power (int|float $base, int|float $exponent):int|float {

        return pow($base, $exponent);

    }

}