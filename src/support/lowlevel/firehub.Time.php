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

namespace FireHub\TheCore\Support\LowLevel;

use FireHub\TheCore\Support\Enums\Data\Type;

use function microtime;
use function time;

/**
 * ### Time low level class
 * @since 0.2.1.pre-alpha.M2
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolean arguments.
 */
final class Time {

    /**
     * ### Get current Unix timestamp
     * @since 0.2.1.pre-alpha.M2
     *
     * @return int Current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
     */
    public static function timestamp ():int {

        return time();

    }

    /**
     * ### Get current Unix microseconds
     * @since 0.2.1.pre-alpha.M2
     *
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::explode() To split microtime function.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::setType() To set microtime to other type.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To set microtime as integer.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSB::part() To get part of microtime.
     *
     * @return int|false Current microseconds, false otherwise.
     */
    public static function microtime ():int|false {

        if (!$time_list = StrSB::explode(microtime(), ' ')) return false;

        return Data::setType(StrSB::part($time_list[0], 2, 6), Type::T_INT);

    }

}