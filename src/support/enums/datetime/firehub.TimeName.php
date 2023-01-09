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
 *
 * @since 0.1.3.pre-alpha.M1
 * @since 0.2.0.pre-alpha.M2 Added NOW enum.
 *
 * @api
 */
enum TimeName:string {

    /**
     * ### Current time
     * @since 0.2.0.pre-alpha.M2
     */
    case NOW = 'now';

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