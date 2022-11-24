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

namespace FireHub\TheCore\Support\Enums;

/**
 * ### Data type enum
 *
 * DataType enum defines the type of data a variable can store.
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum DataType:string {

    /**
     * ### A bool expresses a truth value, it can be either true or false
     * @since 0.1.3.pre-alpha.M1
     */
    case T_BOOL = 'boolean';

    /**
     * ### An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}
     * @since 0.1.3.pre-alpha.M1
     */
    case T_INT = 'integer';

    /**
     * ### A floating-point number is represented approximately with a fixed number of significant digits
     * @since 0.1.3.pre-alpha.M1
     */
    case T_FLOAT = 'double';

    /**
     * ### A string is series of characters, where a character is the same as a byte
     * @since 0.1.3.pre-alpha.M1
     */
    case T_STRING = 'string';

    /**
     * ### An ordered map where map is a type that associates values to keys
     * @since 0.1.3.pre-alpha.M1
     */
    case T_ARRAY = 'array';

    /**
     * ### An object is an individual instance of the data structure defined by a class
     * @since 0.1.3.pre-alpha.M1
     */
    case T_OBJECT = 'object';

    /**
     * ### The special null value represents a variable with no value
     * @since 0.1.3.pre-alpha.M1
     */
    case T_NULL = 'NULL';

    /**
     * ### The special resoure type is used to store references to some function call or to external PHP resources
     * @since 0.1.3.pre-alpha.M1
     */
    case T_RESOURCE = 'resource';

    /**
     * ### Get type of data type
     * @since 0.1.3.pre-alpha.M1
     *
     * @return \FireHub\TheCore\Support\Enums\DataTypeType Type of data type.
     */
    public function type ():DataTypeType {

        return match ($this) {
            self::T_BOOL, self::T_INT, self::T_FLOAT, self::T_STRING => DataTypeType::SCALAR,
            self::T_ARRAY, self::T_OBJECT => DataTypeType::COMPOUND,
            self::T_NULL, self::T_RESOURCE => DataTypeType::SPECIAL
        };

    }

    /**
     * ### Check if value can be set to data type
     * @since 0.1.3.pre-alpha.M1
     *
     * @return bool True if data type is settable, false otherwise.
     */
    public function settable ():bool {

        return match ($this) {
            self::T_RESOURCE => false,
            default => true
        };

    }

}