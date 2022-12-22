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
 * ### Days unit enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Days:string implements Calculatable {

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case FORTNIGHT = 'fn';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case WEEK = 'w';

    /**
     * @inheritDoc
     *
     * uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::DAY As parent.
     */
    public function parent ():Basic {

        return Basic::DAY;

    }

    /**
     * @inheritDoc
     */
    public function singlar ():string {

        return match ($this) {
            self::FORTNIGHT => 'fortnight',
            self::WEEK => 'week'
        };

    }

    /**
     * @inheritDoc
     */
    public function plural ():string {

        return match ($this) {
            self::FORTNIGHT => 'fortnights',
            self::WEEK => 'weeks'
        };

    }

    /**
     * @inheritDoc
     */
    public function calculate ():int {

        return match ($this) {
            self::FORTNIGHT => 14,
            self::WEEK => 7
        };

    }

}