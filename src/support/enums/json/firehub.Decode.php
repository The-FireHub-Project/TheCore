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
 * ### JSON decode flag enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Decode:int {

    /**
     * ### Decodes JSON objects as PHP array
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_OBJECT_AS_ARRAY = 1;

    /**
     * ### Decodes large integers as their original string value
     * @since 0.1.3.pre-alpha.M1
     */
    case JSON_BIGINT_AS_STRING = 2;

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