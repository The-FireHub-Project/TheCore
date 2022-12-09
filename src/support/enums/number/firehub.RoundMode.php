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

namespace FireHub\TheCore\Support\Enums\Number;

/**
 * ### Round mode number enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum RoundMode:int {

    /**
     * ### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2
     * @since 0.1.3.pre-alpha.M1
     */
    case PHP_ROUND_HALF_UP = 1;

    /**
     * ### Rounds number towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1
     * @since 0.1.3.pre-alpha.M1
     */
    case PHP_ROUND_HALF_DOWN = 2;

    /**
     * ### towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2
     * @since 0.1.3.pre-alpha.M1
     */
    case PHP_ROUND_HALF_EVEN = 3;

    /**
     * ### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3
     * @since 0.1.3.pre-alpha.M1
     */
    case PHP_ROUND_HALF_ODD = 4;

}