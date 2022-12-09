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
 * ### Month names enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Month:int {

    case JANUARY = 1;
    case FEBRUARY = 2;
    case MARCH = 3;
    case APRIL = 4;
    case MAY = 5;
    case JUNE = 6;
    case JULY = 7;
    case AUGUST = 8;
    case SEPTEMBER = 9;
    case OCTOBER = 10;
    case NOVEMBER = 11;
    case DECEMBER = 12;

    /**
     * ### Get month name
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::capitalize() To capitalize month name.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toLower() To lowercase month name.
     *
     * @return string Month name.
     */
    public function name ():string {

        return StrSB::capitalize(StrSB::toLower($this->name));

    }

    /**
     * ### Get short month name
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::capitalize() To capitalize month name.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::toLower() To lowercase month name.
     *
     * @return string Month name.
     */
    public function nameShort ():string {

        return StrSB::part($this->name(), 0, 3);

    }

}