<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package.
 * @since 0.1.3.pre-alpha.M1
 *
 * @author Danijel Galić
 * @copyright 2022 FireHub Web Application Framework
 * @license OSL Open Source License version 3 - [https://opensource.org/licenses/OSL-3.0](https://opensource.org/licenses/OSL-3.0)
 *
 * @package FireHub\Support
 * @version 1.0
 */

namespace FireHub\TheCore\Support\Enums\Json;

/**
 * ### JSON encode flag enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Encode:int {

    /**
     * ### All &lt; and &gt; are converted to \u003C and \u003E
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_HEX_TAG = 1;

    /**
     * ### All &s are converted to \u0026
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_HEX_AMP = 2;

    /**
     * ### All ' are converted to \u0027
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_HEX_APOS = 4;

    /**
     * ### All " are converted to \u0022
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_HEX_QUOT = 8;

    /**
     * ### Outputs an object rather than an array when a non-associative array is used
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_FORCE_OBJECT = 16;

    /**
     * ### Encodes numeric strings as numbers
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_NUMERIC_CHECK = 32;

    /**
     * ### Don't escape /
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_UNESCAPED_SLASHES = 64;

    /**
     * ### Use whitespace in returned data to format it
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_PRETTY_PRINT = 128;

    /**
     * ### Encode multibyte Unicode characters literally (default is to escape as \uXXXX)
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_UNESCAPED_UNICODE = 256;

    /**
     * ### Substitute some un-encodable values instead of failing
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_PARTIAL_OUTPUT_ON_ERROR = 512;

    /**
     * ### Ensures that float values are always encoded as a float value
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_PRESERVE_ZERO_FRACTION = 1024;

    /**
     * ### The line terminators are kept unescaped when JSON_UNESCAPED_UNICODE is supplied
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_UNESCAPED_LINE_TERMINATORS = 2048;

    /**
     * ### Ignore invalid UTF-8 characters
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_INVALID_UTF8_IGNORE = 1048576;

    /**
     * ### Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER')
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_INVALID_UTF8_SUBSTITUTE = 2097152;

    /**
     * ### Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error() and json_last_error_msg()
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_THROW_ON_ERROR = 4194304;

}