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

use function chr;
use function lcfirst;
use function ord;
use function str_pad;
use function str_split;
use function str_word_count;
use function strcasecmp;
use function strcmp;
use function strcspn;
use function stripos;
use function stristr;
use function strlen;
use function strpbrk;
use function strpos;
use function strrchr;
use function strripos;
use function strrpos;
use function strspn;
use function strstr;
use function strtolower;
use function strtoupper;
use function strtr;
use function substr;
use function substr_count;
use function ucfirst;
use function ucwords;
use function wordwrap;

/**
 * ### String single-byte low level class
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
final class StrSB extends StrSafe {

    /**
     * @inheritDoc
     */
    public static function length (string $string):int {

        return strlen($string);

    }

    /**
     * @inheritdoc
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
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the beginning of the string.
     * </p>
     */
    public static function firstPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0):int|false {

        if ($case_sensitive) return strpos($string, $search, $offset);

        return stripos($string, $search, $offset);

    }

    /**
     * @inheritdoc
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
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the beginning of the string.
     * </p>
     */
    public static function lastPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0):int|false {

        if ($case_sensitive) return strrpos($string, $search, $offset);

        return strripos($string, $search, $offset);

    }

    /**
     * @inheritDoc
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
     */
    public static function part (string $string, int $start, ?int $length = null):string {

        return substr($string, $start, $length);

    }

    /**
     * @inheritDoc
     *
     * @param string $string <p>
     * The string being checked.
     * </p>
     * @param string $search <p>
     * The string being found.
     * </p>
     * @param int $start [optional] <p>
     * The offset where to start counting. If the offset is negative, counting starts from the end of the string..
     * </p>
     * @param null|int $length [optional] <p>
     * The maximum length after the specified offset to search for the substring. It outputs a warning if the offset plus the length is greater than the $string length. A negative length counts from the end of $string.
     * </p>
     */
    public static function partCount (string $string, string $search, int $start = 0, ?int $length = null):int {

        return substr_count($string, $search, $start, $length);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\Side::RIGHT As parameter.
     */
    public static function pad (string $string, int $length, string $pad = " ", Side $side = Side::RIGHT):string {

        return str_pad($string, $length, $pad, $side->value);

    }

    /**
     * @inheritDoc
     */
    public static function toLower (string $string):string {

        return strtolower($string);

    }

    /**
     * @inheritDoc
     */
    public static function toUpper (string $string):string {

        return strtoupper($string);

    }

    /**
     * @inheritDoc
     */
    public static function toTitle (string $string):string {

        return ucwords($string);

    }

    /**
     * @inheritDoc
     */
    public static function capitalize (string $string):string {

        return ucfirst($string);

    }

    /**
     * @inheritDoc
     */
    public static function deCapitalize (string $string):string {

        return lcfirst($string);

    }

    /**
     * @inheritDoc
     */
    public static function split (string $string, int $length = 1):array {

        return str_split($string, $length);

    }

    /**
     * @inheritDoc
     */
    public static function firstPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true,):string|false {

        if ($case_sensitive) return strstr($string, $find, $before_needle);

        return stristr($string, $find, $before_needle);

    }

    /**
     * @inheritDoc
     */
    public static function lastPart (string $find, string $string):string|false {

        return strrchr($string, $find);

    }

    /**
     * @inheritDoc
     */
    public static function wrap (string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false):string {

        return wordwrap($string, $width, $break, $cut_long_words);

    }

    /**
     * @inheritdoc
     */
    public static function chr (int $number):string {

        return chr($number);

    }

    /**
     * @inheritdoc
     */
    public static function ord (string $string):int {

        return ord($string);

    }

    /**
     * ### Find part of a string with characters
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $characters <p>
     * Characters to find.
     *
     * This parameter is case-sensitive.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     *
     * @return string|false
     */
    public static function partFrom (string $characters, string $string):string|false {

        return strpbrk($string, $characters);

    }

    /**
     * ### Compare two strings
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toUpper() To convert both strings to uppercase.
     *
     * @param string $string_1 <p>
     * String to compare against.
     * </p>
     * @param string $string_2 <p>
     * String to compare with.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is comparison case-sensitive or not.
     * </p>
     *
     * @return bool True if two strings are same, false otherwise.
     */
    public static function compare (string $string_1, string $string_2, bool $case_sensitive = true):bool {

        if ($case_sensitive) return strcmp($string_1, $string_2) === 0;

        return strcasecmp(self::toUpper($string_1), self::toUpper($string_2)) === 0;

    }

    /**
     * ### Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string to examine.
     * </p>
     * @param string $characters <p>
     * The list of allowable characters.
     * </p>
     * @param int $offset [optional] <p>
     * The position in subject to start searching.
     * If start is given and is non-negative, then strspn will begin examining subject at the start position. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
     * If start is given and is negative, then strspn will begin examining subject at the start position from the end of subject.
     * </p>
     * @param int|null $length [optional] <p>
     * The length of the segment from subject to examine.
     * If length is given and is non-negative, then subject will be examined for length characters after the starting position.
     * If length is given and is negative, then subject will be examined from the starting position up to length characters from the end of subject.
     * </p>
     *
     * @return int The length of the initial segment of string which consists entirely of characters in characters.
     */
    public static function segmentMatching (string $string, string $characters, int $offset = 0, ?int $length = null):int {

        return strspn($string, $characters, $offset, $length);

    }

    /**
     * ### Find length of initial segment not matching mask
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * The string to examine.
     * </p>
     * @param string $characters <p>
     * The string containing every disallowed character.
     * </p>
     * @param int $offset [optional] <p>
     * The position in subject to start searching.
     * If start is given and is non-negative, then strspn will begin examining subject at the start position. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
     * If start is given and is negative, then strspn will begin examining subject at the start position from the end of subject.
     * </p>
     * @param int|null $length [optional] <p>
     * The length of the segment from subject to examine.
     * If length is given and is non-negative, then subject will be examined for length characters after the starting position.
     * If length is given and is negative, then subject will be examined from the starting position up to length characters from the end of subject.
     * </p>
     *
     * @return int The length of the initial segment of string which consists entirely of characters not in characters.
     */
    public static function segmentNotMatching (string $string, string $characters, int $offset = 0, ?int $length = null):int {

        return strcspn($string, $characters, $offset, $length);

    }

    /**
     * ### Count number of words in string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * A string to search words.
     * </p>
     * @param null|string $characters [optional] <p>
     * A list of additional characters which will be considered as 'word'.
     * </p>
     * @param int<0, 2> $format [optional] <p>
     * A string to search words.
     *
     * 0 - returns the number of words found.
     *
     * 1 - returns an array containing all the words found inside the string.
     *
     * 2 - returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself.
     * </p>
     *
     * @return int|array<int, string>|false Number of words found or list of words.
     */
    public static function countWords (string $string, ?string $characters = nulL, int $format = 0):int|array|false {

        return str_word_count($string, $format, $characters);

    }

    /**
     * ### Translate a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $string <p>
     * A string to translate.
     * </p>
     * @param array{string, string} $pairs <p>
     * An array of key-value pairs for translation.
     * </p>
     *
     * @return string Translated string.
     */
    public static function translate (string $string, array $pairs):string {

        return strtr($string, $pairs);

    }

}