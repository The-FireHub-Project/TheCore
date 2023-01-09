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

namespace FireHub\TheCore\Support\Enums\DateTime\Unit;

/**
 * ### Basic unit enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Basic:string implements Unit {

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case YEAR = 'Y';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MONTH = 'M';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case DAY = 'D';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case HOUR = 'h';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MINUTE = 'm';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case SECOND = 's';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MICROSECOND = 'µs';

    /**
     * @inheritDoc
     */
    public function singlar ():string {

        return match ($this) {
            self::YEAR => 'year',
            self::MONTH => 'month',
            self::DAY => 'day',
            self::HOUR => 'hour',
            self::MINUTE => 'minute',
            self::SECOND => 'second',
            self::MICROSECOND => 'microsecond'
        };

    }

    /**
     * @inheritDoc
     */
    public function plural ():string {

        return match ($this) {
            self::YEAR => 'years',
            self::MONTH => 'months',
            self::DAY => 'days',
            self::HOUR => 'hours',
            self::MINUTE => 'minutes',
            self::SECOND => 'seconds',
            self::MICROSECOND => 'microseconds'
        };

    }

}