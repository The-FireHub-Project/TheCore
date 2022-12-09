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

namespace FireHub\Support\Enums\Operator;

/**
 * ### Comparison operator enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Comparison {

    /**
     * ### Returns true if $x is equal to $y
     * @since 0.1.3.pre-alpha.M1
     */
    case EQUAL;

    /**
     * ### Returns true if $x is not equal to $y, or they are not of the same type
     * @since 0.1.3.pre-alpha.M1
     */
    case NOT_EQUAL;

    /**
     * ### Returns true if $x is greater than $y
     * @since 0.1.3.pre-alpha.M1
     */
    case GREATER;

    /**
     * ### Returns true if $x is greater than or equal to $y
     * @since 0.1.3.pre-alpha.M1
     */
    case GREATER_OR_EQUAL;

    /**
     * ### Returns true if $x is less than $y
     * @since 0.1.3.pre-alpha.M1
     */
    case LESS;

    /**
     * ### Returns true if $x is less than or equal to $y
     * @since 0.1.3.pre-alpha.M1
     */
    case LESS_OR_EQUAL;

    /**
     * ### Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y
     * @since 0.1.3.pre-alpha.M1
     */
    case SPACESHIP;

    /**
     * ### Compare current enum with provided values
     * @since 0.1.3.pre-alpha.M1
     *
     * @param mixed $a <p>
     * Value A to compare.
     * </p>
     * @param mixed $b <p>
     * Value B to with value A.
     * </p>
     *
     * @return bool|int Comparison result: true, false, -1, 0 or 1 if SPACESHIP is used
     */
    public function compare (mixed $a, mixed $b):bool|int {

        return match ($this) {
            self::EQUAL => $a === $b,
            self::NOT_EQUAL => $a !== $b,
            self::GREATER => $a > $b,
            self::GREATER_OR_EQUAL => $a >= $b,
            self::LESS => $a < $b,
            self::LESS_OR_EQUAL => $a <= $b,
            self::SPACESHIP => $a <=> $b
        };

    }

}