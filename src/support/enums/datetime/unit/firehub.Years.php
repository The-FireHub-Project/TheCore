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
 * ### Years unit enum
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 */
enum Years:string implements Calculatable {

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case MILLENNIUM = 'M';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case CENTURY = 'C';

    /**
     * @since 0.2.1.pre-alpha.M2
     */
    case DECADE = 'D';

    /**
     * @inheritDoc
     *
     * @uses \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::YEAR As parent.
     */
    public function parent ():Basic {

        return Basic::YEAR;

    }

    /**
     * @inheritDoc
     */
    public function singlar ():string {

        return match ($this) {
            self::MILLENNIUM => 'millennium',
            self::CENTURY => 'century',
            self::DECADE => 'decade'
        };

    }

    /**
     * @inheritDoc
     */
    public function plural ():string {

        return match ($this) {
            self::MILLENNIUM => 'millenniums',
            self::CENTURY => 'centurys',
            self::DECADE => 'decades'
        };

    }

    /**
     * @inheritDoc
     */
    public function calculate ():int {

        return match ($this) {
            self::MILLENNIUM => 1000,
            self::CENTURY => 100,
            self::DECADE => 10
        };

    }

}