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
 * ### Day names notations enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum DayName:string {

    /**
     * @since 0.1.3.pre-alpha.M1
     */
    case NOW = 'now';

    /**
     * @since 0.1.3.pre-alpha.M1
     */
    case TODAY = 'today';

    /**
     * @since 0.1.3.pre-alpha.M1
     */
    case YESTERDAY = 'yesterday';

    /**
     * @since 0.1.3.pre-alpha.M1
     */
    case FIRST_DAY = 'first day of';

    /**
     * @since 0.1.3.pre-alpha.M1
     */
    case LAST_DAY = 'last day of';

}