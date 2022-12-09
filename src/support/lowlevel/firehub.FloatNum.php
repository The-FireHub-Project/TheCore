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

use const FireHub\TheCore\Initializers\Constants\EULER_NUM;

use function acos;
use function acosh;
use function asin;
use function asinh;
use function atan;
use function atan2;
use function atanh;
use function cos;
use function cosh;
use function deg2rad;
use function exp;
use function fdiv;
use function rad2deg;
use function sin;
use function sinh;
use function sqrt;
use function tan;
use function tanh;

/**
 * ### Float low level class
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
final class FloatNum extends Num {

    /**
     * ### Checks if value is float
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::float() To check if value is float.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is float ? true : false) True if value is float, false otherwise.
     */
    public static function isFloat (mixed $value):bool {

        return DataIs::float($value);

    }

    /**
     * ### Cosine value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process in radians.
     * </p>
     *
     * @return float The cosine of angle.
     */
    public static function cosine (float $number):float {

        return cos($number);

    }

    /**
     * ### Arc cosine value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float The arc cosine of num in radians.
     */
    public static function cosineArc (float $number):float {

        return acos($number);

    }

    /**
     * ### Hyperbolic cosine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic cosine of number, defined as (exp($number) + exp(-$number))/2.
     */
    public static function cosineHyperbolic (float $number):float {

        return cosh($number);

    }

    /**
     * ### Inverse hyperbolic cosine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Inverse hyperbolic cosine of num, i.e. the value whose hyperbolic cosine is number.
     */
    public static function cosineInverseHyperbolic (float $number):float {

        return acosh($number);

    }

    /**
     * ### Sine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Sine of number.
     */
    public static function sine (float $number):float {

        return sin($number);

    }

    /**
     * ### Arc sine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Arc sine of num in radians.
     */
    public static function sineArc (float $number):float {

        return asin($number);

    }

    /**
     * ### Hyperbolic sine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic sine of number.
     */
    public static function sineHyperbolic (float $number):float {

        return sinh($number);

    }

    /**
     * ### Inverse hyperbolic sine
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Inverse hyperbolic sine of number.
     */
    public static function sineHyperbolicInverse (float $number):float {

        return asinh($number);

    }

    /**
     * ### Tangent
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process in radians.
     * </p>
     *
     * @return float Tangent of number.
     */
    public static function tangent (float $number):float {

        return tan($number);

    }

    /**
     * ### Arc tangent
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Arc tangent of num in radians.
     */
    public static function tangentArc (float $number):float {

        return atan($number);

    }

    /**
     * ### Arc tangent of two variables
     *
     * This method calculates the arc tangent of the two variables x and y.
     * It is similar to calculating the arc tangent of y / x, except that the signs of both arguments are used to determine the quadrant of the result.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $x <p>
     * Divisor parameter.
     * </p>
     * @param float $y <p>
     * Dividend parameter.
     * </p>
     *
     * @return float Arc tangent of y/x in radians.
     */
    public static function tangentArc2 (float $x, float $y):float {

        return atan2($y, $x);

    }

    /**
     * ### Hyperbolic Tangent
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic tangent of number.
     */
    public static function tangentHyperbolic (float $number):float {

        return tanh($number);

    }

    /**
     * ### Inverse hyperbolic Tangent
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Inverse hyperbolic tangent of number.
     */
    public static function tangentHyperbolicInverse (float $number):float {

        return atanh($number);

    }

    /**
     * ### Converts the number in degrees to the radian equivalent
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * Angular value in degrees.
     * </p>
     *
     * @return float Radian equivalent of number.
     */
    public static function degreesToRadian (float $number):float {

        return deg2rad($number);

    }

    /**
     * ### Converts the radian number to the equivalent number in degrees
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * Radian value.
     * </p>
     *
     * @return float Equivalent of number in degrees.
     */
    public static function radianTodegrees (float $number):float {

        return rad2deg($number);

    }

    /**
     * ### Calculates the exponent of e
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float 'e' raised to the power of number.
     *
     * @note 'e' is the base of the natural system of logarithms, or approximately 2.718282.
     */
    public static function exponent (float $number):float {

        return exp($number);

    }

    /**
     * ### Divides two numbers, according to IEEE 754
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $dividend  <p>
     * Number to be divided.
     * </p>
     * @param float $divisor <p>
     * Number which divides the $dividend.
     * </p>
     *
     * @return float The floating point result of the division of $dividend by $divisor.
     */
    public static function divide (float $dividend, float $divisor):float {

        return fdiv($dividend, $divisor);

    }

    /**
     * ### Natural logarithm
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\EULER_NUM As default parameter.
     *
     * @param float $number  <p>
     * The value to calculate the logarithm for.
     * </p>
     * @param float $base [optional] <p>
     * The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm).
     * </p>
     *
     * @return float The floating point result of the division of $dividend by $divisor.
     */
    public static function logarithm (float $number, float $base = EULER_NUM):float {

        return log($number, $base);

    }

    /**
     * ### Square root
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number  <p>
     * The argument to process.
     * </p>
     *
     * @return float The square root of num or the special value NAN for negative numbers.
     */
    public static function squareRoot (float $number):float {

        return sqrt($number);

    }

}