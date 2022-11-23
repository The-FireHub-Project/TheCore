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
 * ### Type of data type enum
 *
 * DataType enum defines the type of data a variable can store.
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum DataTypeType {

    /**
     * ### Scalar (predefined) type
     * @since 0.1.3.pre-alpha.M1
     */
    case SCALAR;

    /**
     * ### Compound (user-defined) type
     * @since 0.1.3.pre-alpha.M1
     */
    case COMPOUND;

    /**
     * ### Special type
     * @since 0.1.3.pre-alpha.M1
     */
    case SPECIAL;

}