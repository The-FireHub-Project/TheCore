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

namespace FireHub\TheCore\Support\Enums\DateTime\Format;

/**
 * ### Month format enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Month:string implements Format {

    /**
     * ### Full textual representation of a month
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * January, December
     * ```
     */
    case TEXTUAL_LONG = 'F';

    /**
     * ### Short textual representation of a month, three letters
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * Jan, Dec
     * ```
     */
    case TEXTUAL_SHORT = 'M';

    /**
     * ### Numeric representation of a month, with leading zeros
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 01 through 12
     * ```
     */
    case NUMERIC_LONG = 'm';

    /**
     * ### Numeric representation of a month, without leading zeros
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 1 through 12
     * ```
     */
    case NUMERIC_SHORT = 'n';

    /**
     * ### Number of days in the given month
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 28 through 31
     * ```
     */
    case NUMBER_OF_DAYS = 't';

}