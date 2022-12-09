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

namespace FireHub\TheCore\Support\Enums\DateTime;

/**
 * ### Time names notations enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum TimeName:string {

    /**
     * ### Middle of the day
     * @since 0.1.3.pre-alpha.M1
     */
    case NOON = 'noon';

    /**
     * ### Middle of the night
     * @since 0.1.3.pre-alpha.M1
     */
    case MIDNIGHT = 'midnight';

}