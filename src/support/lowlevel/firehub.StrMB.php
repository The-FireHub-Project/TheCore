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

use FireHub\TheCore\Support\Enums\ {
    Side, String\Encoding, String\StrCase
};

use const ENT_QUOTES;
use const ENT_SUBSTITUTE;
use const ENT_HTML401;

use function html_entity_decode;
use function htmlentities;
use function mb_chr;
use function mb_detect_encoding;
use function mb_convert_case;
use function mb_convert_encoding;
use function mb_ord;
use function mb_str_split;
use function mb_stripos;
use function mb_stristr;
use function mb_strlen;
use function mb_strpos;
use function mb_strrchr;
use function mb_strrichr;
use function mb_strripos;
use function mb_strrpos;
use function mb_strstr;
use function mb_substr;
use function mb_substr_count;

/**
 * ### String multi-byte low level class
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
final class StrMB extends StrSafe {

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function length (string $string, ?Encoding $encoding = null):int {

        return mb_strlen($string, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
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
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function firstPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0, ?Encoding $encoding = null):int|false {

        if ($case_sensitive) return mb_strpos($string, $search, $offset, $encoding?->value);

        return mb_stripos($string, $search, $offset, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
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
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function lastPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0, ?Encoding $encoding = null):int|false {

        if ($case_sensitive) return mb_strrpos($string, $search, $offset, $encoding?->value);

        return mb_strripos($string, $search, $offset, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
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
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function part (string $string, int $start, ?int $length = null, ?Encoding $encoding = null):string {

        return mb_substr($string, $start, $length, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * The string being checked.
     * </p>
     * @param string $search <p>
     * The string being found.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function partCount (string $string, string $search, ?Encoding $encoding = null):int {

        return mb_substr_count($string, $search, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\Side::RIGHT As parameter.
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::repeat() To repeat string.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::part() To get part of string.
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
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @todo Replace max, intval, floor and ceil with internal function.
     */
    public static function pad (string $string, int $length, string $pad = " ", Side $side = Side::RIGHT, ?Encoding $encoding = null):string {

        $short = max(0, $length - self::length($string, $encoding));
        $shortLeft = intval(floor($short / 2));
        $shortRight = intval(ceil($short / 2));

        /**
         * @todo Error will go away after implementing math low level
         */
        return match ($side) {
            Side::LEFT => $short > 0 ? self::part(self::repeat($pad, $short), 0, $short, $encoding).$string : $string,
            Side::RIGHT => $short > 0 ? $string.self::part(self::repeat($pad, $short), 0, $short, $encoding) : $string,
            Side::BOTH => self::part(self::repeat($pad, $shortLeft), 0, $shortLeft, $encoding). $string. self::part(self::repeat($pad, $shortRight), 0, $shortRight, $encoding) # @phpstan-ignore-line
        };

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrCase::LOWER() To convert string to lowercase.
     *
     * @param string $string <p>
     * The string being lowercased.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function toLower (string $string, ?Encoding $encoding = null):string {

        return self::convert($string, StrCase::LOWER, $encoding);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrCase::UPPER() To convert string to uppercase.
     *
     * @param string $string <p>
     * The string being uppercased.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function toUpper (string $string, ?Encoding $encoding = null):string {

        return self::convert($string, StrCase::UPPER, $encoding);

    }

    /**
     * @inheritDoc
     *
     * @param string $string <p>
     * The string being title cased.
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrCase::UPPER() To convert string to title case.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function toTitle (string $string, ?Encoding $encoding = null):string {

        return self::convert($string, StrCase::TITLE, $encoding);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::toUpper To convert string to uppercase.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::part To get part of string.
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function capitalize (string $string, ?Encoding $encoding = null):string {

        return self::toUpper(self::part($string, 0, 1, $encoding)).self::part($string, 1, encoding: $encoding);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::toUpper To convert string to lowercase.
     * @uses \FireHub\TheCore\Support\LowLevel\StrMB::part To get part of string.
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function deCapitalize (string $string, ?Encoding $encoding = null):string {

        return self::toLower(self::part($string, 0, 1, $encoding)).self::part($string, 1, encoding: $encoding);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * The string being split.
     * </p>
     * @param int<1, max> $length [optional] <p>
     * If specified, each element of the returned array will be composed of multiple characters instead of a single character.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function split (string $string, int $length = 1, ?Encoding $encoding = null):array {

        return mb_str_split($string, $length, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
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
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function firstPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, ?Encoding $encoding = null):string|false {

        if ($case_sensitive) return mb_strstr($string, $find, $before_needle, $encoding?->value);

        return mb_stristr($string, $find, $before_needle, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, returns the part of the string before the last occurrence (excluding the find string).
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encodging. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function lastPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, ?Encoding $encoding = null):string|false {

        if ($case_sensitive) return mb_strrchr($string, $find, $before_needle, $encoding?->value);

        return mb_strrichr($string, $find, $before_needle, $encoding?->value);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::null() To check if return is not null.
     *
     * @todo Replace preg_replace with low level function.
     */
    public static function wrap (string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false):string|false {

        if ($cut_long_words) return !DataIs::null($wrap = preg_replace('/(.{1,'.$width.'})(\s)|(.{'.$width.'})(?!$)/uS', '$1$2'.$break, $string)) ? $wrap : false;

        return !DataIs::null($wrap = preg_replace('/(?<=\s|^)(.{1,'.$width.'}\S*)(\s)/uS', '$1'.$break, $string)) ? $wrap : false;

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param int $number <p>
     * ASCII code.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function chr (int $number, ?Encoding $encoding = null):string|false {

        if (!$chr = mb_chr($number, $encoding?->value)) return false;

        return $chr;

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * A character.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     */
    public static function ord (string $string, ?Encoding $encoding = null):int|false {

        if (!$ord = mb_ord($string, $encoding?->value)) return false;

        return $ord;

    }

    /**
     * ### Convert a string from one character encoding to another
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * The string to be converted.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\String\Encoding $to <p>
     * The desired encoding of the result.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $from [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string|false Encoded string or false on failure.
     */
    public static function convertEncoding (string $string, Encoding $to, ?Encoding $from = null):string|false {

        return mb_convert_encoding($string, $to->value, $from?->value);

    }

    /**
     * ### Detect character encoding
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As check cases.
     *
     * @param string $string <p>
     * The string to detect encoding.
     * </p>
     *
     * @return string|false The detected character encoding, or false if the string is not valid in any of the listed encodings.
     *
     * @note Return encoding enum
     */
    public static function detectEncoding (string $string):string|false {

        $cases = [];
        foreach (Encoding::cases() as $case) $cases[] = $case->value;

        return mb_detect_encoding($string, $cases, true);

    }

    /**
     * ### Convert all applicable characters to HTML entities
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * String to encode.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string The encoded string.
     */
    public static function htmlEncode (string $string, ?Encoding $encoding = null):string {

        return htmlentities($string, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, $encoding?->value);

    }

    /**
     * ### Convert HTML entities to their corresponding characters
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param string $string <p>
     * String to decode.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string The decoded string.
     */
    public static function htmlDecode (string $string, ?Encoding $encoding = null):string {

        return html_entity_decode($string, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, $encoding?->value);

    }

    /**
     * ### Perform case folding on a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\String\StrCase As parameter.
     * @uses \FireHub\TheCore\Support\Enums\String\Encoding As parameter.
     *
     * @param $string <p>
     * The string being converted.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\String\StrCase $case <p>
     * The mode of the conversion.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string Converted string.
     */
    private static function convert (string $string, StrCase $case, ?Encoding $encoding = null):string {

        return mb_convert_case($string, $case->value, $encoding?->value);

    }

}