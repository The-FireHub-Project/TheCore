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
 * ### Week format enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Week:string implements Format {

    /**
     * ### ISO 8601 week number of year, weeks starting on Monday
     * @since 0.2.1.pre-alpha.M2
     *
     * @example
     * ```php
     * 42 (the 42nd week in the year)
     * ```
     */
    case NUMBER = 'W';

}