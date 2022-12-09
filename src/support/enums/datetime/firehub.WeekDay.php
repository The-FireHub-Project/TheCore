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

use FireHub\TheCore\Support\LowLevel\StrSB;

/**
 * ### Week day names notations enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum WeekDay:int {

    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 7;

    /**
     * ### Get week day name
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::capitalize() To capitalize day name.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toLower() To lowercase day name.
     *
     * @return string Day name.
     */
    public function name ():string {

        return StrSB::capitalize(StrSB::toLower($this->name));

    }

    /**
     * ### Get short week day name
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::capitalize() To capitalize day name.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toLower() To lowercase day name.
     *
     * @return string Short day name.
     */
    public function nameShort ():string {

        return StrSB::part($this->name(), 0, 3);

    }

}