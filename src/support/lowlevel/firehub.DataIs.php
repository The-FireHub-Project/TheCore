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

use function is_array;
use function is_bool;
use function is_callable;
use function is_countable;
use function is_dir;
use function is_executable;
use function is_file;
use function is_finite;
use function is_float;
use function is_infinite;
use function is_int;
use function is_iterable;
use function is_link;
use function is_nan;
use function is_null;
use function is_numeric;
use function is_object;
use function is_readable;
use function is_resource;
use function is_scalar;
use function is_string;
use function is_uploaded_file;
use function is_writable;

/**
 * ### DataIs low level class
 *
 * This low level support class is for checking data type.
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
final class DataIs {

    /**
     * ### Checks if value is array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is array ? true : false) True if value is array, false otherwise.
     */
    public static function array (mixed $value):bool {

        return is_array($value);

    }

    /**
     * ### Checks if value is boolean
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is bool ? true : false) True if value is boolean, false otherwise.
     */
    public static function bool (mixed $value):bool {

        return is_bool($value);

    }

    /**
     * ### Verify that the contents of a variable can be called as a function
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is callable ? true : false) True if value is callable, false otherwise.
     */
    public static function callable (mixed $value):bool {

        return is_callable($value);

    }

    /**
     * ### Verify that the contents of a variable is a countable value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is array|\Countable ? true : false) True if value is countable, false otherwise.
     */
    public static function countable (mixed $value):bool {

        return is_countable($value);

    }

    /**
     * ### Tells whether the filename is executable
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * Path to the file.
     * </p>
     *
     * @return bool True if the filename exists and is executable, or false on error.
     *
     * @note On Windows, a file is considered executable, if it is a properly executable file as reported by the Win API GetBinaryType(); for BC reasons, files with a .bat or .cmd extension are also considered executable.
     */
    public static function executable (string $filename):bool {

        return is_executable($filename);

    }

    /**
     * ### Tells whether the given file is a regular file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * Path to the file.
     * </p>
     *
     * @return bool True if the filename exists and is a regular file, false otherwise.
     *
     * @note Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2 GB.
     */
    public static function file (string $filename):bool {

        return is_file($filename);

    }

    /**
     * ### Finds whether a value is a legal finite number
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The value to check.
     * </p>
     *
     * @return bool True if number is a legal finite number within the allowed range for a PHP float on this platform, false otherwise.
     */
    public static function finite (float $number):bool {

        return is_finite($number);

    }

    /**
     * ### Finds whether the type of variable is a float
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is float ? true : false) True if value is float, false otherwise.
     */
    public static function float (mixed $value):bool {

        return is_float($value);

    }

    /**
     * ### Tells whether the filename is a folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * Path to the file.
     * </p>
     *
     * @return bool Returns true if the filename exists and is a folder, false otherwise.
     */
    public static function folder (string $filename):bool {

        return is_dir($filename);

    }

    /**
     * ### Finds whether a value is infinite
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * The value to check.
     * </p>
     *
     * @return bool True if number is infinite, false otherwise.
     */
    public static function infinite (float $number):bool {

        return is_infinite($number);

    }

    /**
     * ### Find whether the type of variable is an integer
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is int ? true : false) True if value is integer, false otherwise.
     */
    public static function int (mixed $value):bool {

        return is_int($value);

    }

    /**
     * ### Verify that the contents of a variable is an iterable value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is iterable ? true : false) True if value is iterable, false otherwise.
     */
    public static function iterable (mixed $value):bool {

        return is_iterable($value);

    }

    /**
     * ### Tells whether the filename is a symbolic link
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * Path to the file.
     * </p>
     *
     * @return bool True if the filename exists and is a symbolic link, false otherwise.
     */
    public static function link (string $filename):bool {

        return is_link($filename);

    }

    /**
     * ### Finds whether a value is not a number
     * @since 0.1.3.pre-alpha.M1
     *
     * @param float $number <p>
     * Value to check.
     * </p>
     *
     * @return bool True if number is 'not a number', false otherwise.
     */
    public static function nan (float $number):bool {

        return is_nan($number);

    }

    /**
     * ### Finds whether a variable is null
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is null ? true : false) True if value is null, false otherwise.
     */
    public static function null (mixed $value):bool {

        return is_null($value);

    }

    /**
     * ### Finds whether a variable is a number or a numeric string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is numeric ? true : false) True if value is numeric, false otherwise.
     */
    public static function numeric (mixed $value):bool {

        return is_numeric($value);

    }

    /**
     * ### Finds whether a variable is an object
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is object ? true : false) True if value is object, false otherwise.
     */
    public static function object (mixed $value):bool {

        return is_object($value);

    }

    /**
     * ### Tells whether a file exists and is readable
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * Path to the file.
     * </p>
     *
     * @return bool True if the file or directory specified by filename exists and is readable, false otherwise.
     */
    public static function readable (string $filename):bool {

        return is_readable($filename);

    }

    /**
     * ### Finds whether a variable is a resource
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is resource ? true : false) True if value is resource, false otherwise.
     */
    public static function resource (mixed $value):bool {

        return is_resource($value);

    }

    /**
     * ### Finds whether a variable is a scalar
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is scalar ? true : false) True if value is scalar, false otherwise.
     *
     * @note Method does not consider resource type values to be scalar as resources are abstract datatypes which are currently based on integers. This implementation detail should not be relied upon, as it may change.
     * @note Method does not consider NULL to be scalar.
     */
    public static function scalar (mixed $value):bool {

        return is_scalar($value);

    }

    /**
     * ### Find whether the type of variable is a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is string ? true : false) True if value is string, false otherwise.
     */
    public static function string (mixed $value):bool {

        return is_string($value);

    }

    /**
     * ### Tells whether the file was uploaded via HTTP POST
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * The filename being checked.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note For proper working, the function is_uploaded_file() needs an argument like $_FILES['userfile']['tmp_name'], - the name of the uploaded file on the client's machine $_FILES['userfile']['name'] does not work.
     */
    public static function uploadedFile (string $filename):bool {

        return is_uploaded_file($filename);

    }

    /**
     * ### Tells whether the filename is writable
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * The filename being checked.
     * </p>
     *
     * @return bool True if filename exists and is writable, false otherwise.
     */
    public static function writable (string $filename):bool {

        return is_writable($filename);

    }

}