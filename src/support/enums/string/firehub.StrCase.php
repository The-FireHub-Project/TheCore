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

namespace FireHub\TheCore\Support\Enums\String;

/**
 * ### String case enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum StrCase:int {

    /**
     * ### Performs a full upper-case folding
     * @since 0.1.3.pre-alpha.M1
     */
    case UPPER = 0;

    /**
     * ### Performs a full lower-case folding
     * @since 0.1.3.pre-alpha.M1
     */
    case LOWER = 1;

    /**
     * ### Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. In particular this improves handling of quotes and apostrophes
     * @since 0.1.3.pre-alpha.M1
     */
    case TITLE = 2;

    /**
     * ### Performs a full case fold conversion which removes case distinctions present in the string. This is used for caseless matching
     * @since 0.1.3.pre-alpha.M1
     */
    case MB_CASE_FOLD = 3;

}