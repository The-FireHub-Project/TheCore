<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 * @since 0.1.1.pre-alpha.M1
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Public
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Initializers\Enums;

/**
 * ### Enum for available prefixes for files
 * @since 0.1.1.pre-alpha.M1
 */
enum Prefix:string {

    /**
     * ### Default FireHub prefix
     *
     * This prefix is used by intenal objects.
     * @since 0.1.1.pre-alpha.M1
     */
    case FIREHUB = 'firehub';

}