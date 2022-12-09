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

namespace FireHub\TheCore\Support\Enums\FileFolder;

/**
 * ### File lock enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Lock:int {

    /**
     * ### Acquire a shared lock (reader)
     * @since 0.1.3.pre-alpha.M1
     */
    case SHARED = 1;

    /**
     * ### Acquire an exclusive lock (writer)
     * @since 0.1.3.pre-alpha.M1
     */
    case EXCLUSIVE = 2;

    /**
     * ### Release lock (shared or exclusive)
     * @since 0.1.3.pre-alpha.M1
     */
    case RELEASE = 3;

    /**
     * ### Shared non-blocking operation while locking
     * @since 0.1.3.pre-alpha.M1
     */
    case SHARED_NON_BLOCKING = 5;

    /**
     * ### Exclusive non-blocking operation while locking
     * @since 0.1.3.pre-alpha.M1
     */
    case EXCLUSIVE_NON_BLOCKING = 6;

}