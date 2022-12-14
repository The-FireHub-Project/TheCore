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
 * ### Date and time unit names enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Unit:string {

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case YEAR = 'year';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MONTH = 'month';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case DAY = 'day';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case HOUR = 'hour';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MINUTE = 'minute';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case SECOND = 'second';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MILISECOND = 'milisecond';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MICROSECOND = 'microsecond';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case FORTNIGHT = 'fortnight';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case WEEK = 'week';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case WEEKDAY = 'weekday';

}