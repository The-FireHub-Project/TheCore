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

use FireHub\TheCore\Support\Enums\Side;

use const PHP_INT_MAX;

use function explode;
use function implode;
use function str_contains;
use function str_ends_with;
use function str_repeat;
use function str_replace;
use function str_ireplace;
use function str_starts_with;
use function strip_tags;
use function stripslashes;
use function ltrim;
use function rtrim;
use function trim;

/**
 * ### String safe low level class
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
abstract class StrSafe {

    /**
     * ### Checks if value is string
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::string() To check if value is string.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is string ? true : false) True if value is string, false otherwise.
     */
    final public static function isString (mixed $value):bool {

        return DataIs::string($value);

    }

    /**
     * ### Checks if value is empty
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is non-empty-string ? false : true) True if string is empty, false otherwise.
     */
    final public static function isEmpty (string $value):bool {

        return empty($value);

    }

    /**
     * ### Checks if a string ends with a given value
     *
     * Note that multibyte characters may not work as expected while $case_sensitive is on.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string|array{int, string} $search <p>
     * The replacement value that replaces found search values.
     * An array may be used to designate multiple replacements.
     * </p>
     * @param string|array{int, string} $replace <p>
     * The string being searched and replaced on.
     * </p>
     * @param string $string <p>
     * The value being searched for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Searched values are case-insensitive.
     * </p>
     * @param int &$count [optional] <p>
     * If passed, this will hold the number of matched and replaced needles.
     * </p>
     *
     * @return string String with the replaced values.
     */
    public static function replace (string|array $search, string|array $replace, string $string, bool $case_sensitive = true, int &$count = null):string {

        if ($case_sensitive) return str_replace($search, $replace, $string, $count);

        return str_ireplace($search, $replace, $string, $count);

    }

    /**
     * ### Repeat a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string to be repeated.
     * </p>
     * @param int<1, max> $times <p>
     * Number of time the input string should be repeated.
     * Multiplier has to be greater than or equal to 0. If the multiplier is set to 0, the function will return an empty string.
     * </p>
     * @param string $separator [optional] <p>
     * Seperator in between any repeated string.
     * </p>
     *
     * @return string Repeated string.
     */
    public static function repeat (string $string, int $times, string $separator = ''):string {

        return $times === 0 ? '' : str_repeat($string.$separator, $times - 1).$string;

    }

    /**
     * ### Split a string by a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * String being exploded.
     * </p>
     * @param non-empty-string $separator <p>
     * Boundary string.
     * </p>
     * @param int $limit [optional] <p>
     * If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.
     * If the limit parameter is negative, all components except the last -limit are returned.
     * If the limit parameter is zero, then this is treated as 1.
     * </p.
     *
     * @return string[]|false If delimiter contains a value that is not contained in string and a negative limit is used, then an empty array will be returned. For any other limit, an array containing string will be returned. Returnes false is seperator is empty.
     */
    public static function explode (string $string, string $separator, int $limit = PHP_INT_MAX):array|false {

        return explode($separator, $string, $limit);

    }

    /**
     * ### Join array elements with a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string[] $array <p>
     * The array of strings to implode.
     * </p>
     * @param string $separator [optional] <p>
     * Defaults to an empty string. This is not the preferred usage of implode as glue would be the second parameter and thus,
     * the bad prototype would be used.
     * </p>
     *
     * @return string A string containing a string representation of all the array elements in the same order, with the glue string between each element.
     */
    public static function implode (array $array, string $separator = ''):string {

        return implode($separator, $array);

    }

    /**
     * ### Strip HTML and PHP tags from a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * A string to strip tags.
     * </p>
     * @param null|string|string[] $allowed_tags <p>
     * Specify tags which should not be stripped.
     * </p>
     *
     * @return string the Stripped string.
     */
    public static function stripTags (string $string, null|string|array $allowed_tags = null):string {

        return strip_tags($string, $allowed_tags);

    }

    /**
     * ### Un-quotes a quoted string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * A string to un-quote.
     * </p>
     *
     * @return string A string with backslashes stripped off. (\' becomes ' and so on.) Double backslashes (\\) are made into a single backslash (\).
     */
    public static function stripSlashes (string $string):string {

        return stripslashes($string);

    }

    /**
     * ### Strip whitespace (or other characters) from the beginning and end of a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Side::BOTH As parameter.
     * @uses \FireHub\TheCore\Support\Enums\Side::LEFT If $side parameter is set to left.
     * @uses \FireHub\TheCore\Support\Enums\Side::RIGHT If $side parameter is set to right.
     *
     * @param string $string <p>
     * The string that will be trimmed.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Side $side [optional] <p>
     * Side to trim string.
     * </p>
     * @param string $characters [optional] <p>
     * The stripped characters can also be specified using the char-list parameter.
     * Simply list all characters that you want to be stripped.
     * </p>
     *
     * @return string The trimmed string.
     */
    public static function trim (string $string, Side $side = Side::BOTH, string $characters = " \n\r\t\v\x00"):string {

        return match($side) {
            Side::LEFT => ltrim($string, $characters),
            Side::RIGHT => rtrim($string, $characters),
            default => trim($string, $characters)
        };

    }

    /**
     * ### Checks if string contains value
     *
     * Performs a case-sensitive check indicating bif $string is contained in $string.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $value <p>
     * The value to search for.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Search case-sensitive string.
     * </p>
     *
     * @return bool True if string contains value, false otherwise.
     */
    final public static function contains (string $value, string $string, bool $case_sensitive = true):bool {

        if (!$case_sensitive && static::firstPosition($value, $string, false)) return true;

        return str_contains($string, $value);

    }

    /**
     * ### Checks if a string starts with a given value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $value <p>
     * The value to search for.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     *
     * @return bool True if string starts with value, false otherwise.
     */
    public static function startsWith (string $value, string $string):bool {

        return str_starts_with($string, $value);

    }

    /**
     * ### Checks if a string ends with a given value
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $value <p>
     * The value to search for.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     *
     * @return bool True if string ends with value, false otherwise.
     */
    public static function endsWith (string $value, string $string):bool {

        return str_ends_with($string, $value);

    }

    /**
     * ### Get string length
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     *
     * @return int<0, max> String length.
     */
    abstract public static function length (string $string):int;

    /**
     * ### Find the position of the first occurrence of a substring in a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $search <p>
     * A string to find position.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Search case-sensitive position.
     * </p>
     *
     * @return int|false Numeric position of the first occurrence or false if none exist.
     */
    abstract public static function firstPosition (string $search, string $string, bool $case_sensitive = true):int|false;

    /**
     * ### Find the position of the last occurrence of a substring in a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $search <p>
     * A string to find position.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Search case-sensitive position.
     * </p>
     *
     * @return int|false Numeric position of the last occurrence or false if none exist.
     */
    abstract public static function lastPosition (string $search, string $string, bool $case_sensitive = true):int|false;

    /**
     * ### Get part of string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string to extract the substring from.
     * </p>
     * @param int $start <p>
     * If start is non-negative, the returned string will start at the start position in string, counting from zero.
     * For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
     * If start is negative, the returned string will start at the start character from the end of string.
     * </p>
     * @param null|int $length [optional] <p>
     * Maximum number of characters to use from string.
     * If omitted or NULL is passed, extract all characters to the end of the string.
     * </p>
     *
     * @return string The portion of string specified by the start and length parameters.
     */
    abstract public static function part (string $string, int $start, ?int $length = null):string;

    /**
     * ### Get part of string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being checked.
     * </p>
     * @param string $search <p>
     * The string being found.
     * </p>
     *
     * @return int Number of times the searched substring occurs in the string.
     */
    abstract public static function partCount (string $string, string $search);

    /**
     * ### Pad a string to a certain length with another string
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Side::RIGHT As parameter.
     *
     * @param string $string <p>
     * The string being padded.
     * </p>
     * @param int $length <p>
     * If the value of pad_length is negative, less than, or equal to the length of the input string, no padding takes place.
     * </p>
     * @param string $pad [optional] <p>
     * The pad_string may be truncated if the required number of padding characters can't be evenly divided by the pad_string's length.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\Side $side [optional] <p>
     * Pad side.
     * </p>
     *
     * @return string|false Padded string, false otherwise.
     */
    abstract public static function pad (string $string, int $length, string $pad = " ", Side $side = Side::RIGHT):string|false;

    /**
     * ### Make a string lowercase
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being lowercased.
     * </p>
     *
     * @return string String with all alphabetic characters converted to lowercase.
     */
    abstract public static function toLower (string $string):string;

    /**
     * ### Make a string uppercase
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being uppercased.
     * </p>
     *
     * @return string String with all alphabetic characters converted to uppercase.
     */
    abstract public static function toUpper (string $string):string;

    /**
     * ### Make a string title-cased
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being title cased.
     * </p>
     *
     * @return string String with title-cased conversion.
     */
    abstract public static function toTitle (string $string):string;

    /**
     * ### Make a first charater of string uppercased
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     *
     * @return string String with first charater uppercased.
     */
    abstract public static function capitalize (string $string):string;

    /**
     * ### Make a first charater of string lowercased
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     *
     * @return string String with first charater lowercased.
     */
    abstract public static function deCapitalize (string $string):string;

    /**
     * ### Convert a string to an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string being split.
     * </p>
     * @param int<1, max> $length [optional] <p>
     * If specified, each element of the returned array will be composed of multiple characters instead of a single character.
     * </p>
     *
     * @return array<int, string> If the optional length parameter is specified, the returned array will be broken down into chunks with each being length in length, except the final chunk which may be shorter if the string does not divide evenly. The default length is 1, meaning every chunk will be one byte in size.
     */
    abstract public static function split (string $string, int $length = 1):array;

    /**
     * ### Find first part of a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, returns the part of the string before the first occurrence (excluding the find string).
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     *
     * @return string|false The portion of string, or false if needle is not found.
     */
    abstract public static function firstPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true):string|false;

    /**
     * ### Find last part of a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     *
     * @return string|false The portion of string, or false if needle is not found.
     */
    abstract public static function lastPart (string $find, string $string):string|false;

    /**
     * ### Wraps a string to a given number of characters
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string to warp.
     * </p>
     * @param int $width [optional] <p>
     * The column width.
     * </p>
     * @param string $break [optional] <p>
     * The line is broken using the optional break parameter.
     * </p>
     * @param bool $cut_long_words [optional] <p>
     * If the cut is set to true, the string is always wrapped at or before the specified width.
     * So if you have a word that is larger than the given width, it is broken apart.
     * </p>
     *
     * @return string The given string wrapped at the specified column, false otherwise.
     */
    abstract public static function wrap (string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false):string|false;

    /**
     * ### Generate a single-byte string from a number
     * @since 0.1.3.pre-alpha.M1
     *
     * @param int $number <p>
     * ASCII code.
     * </p>
     *
     * @return string The specified character, false otherwise.
     */
    abstract public static function chr (int $number):string|false;

    /**
     * ### Get Unicode code point of character
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * A character.
     * </p>
     *
     * @return int The ASCII value as an integer, false otherwise.
     */
    abstract public static function ord (string $string):int|false;

}