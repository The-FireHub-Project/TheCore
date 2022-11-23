<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Initializers\Enums;

use FireHub\TheCore\Initializers\Kernel as Base_Kernel;
use FireHub\TheCore\Kernel\ {
    HTTP\Kernel as HTTP_Kernel,
    HTTP\Micro\Kernel as HTTP_Micro_Kernel,
    Console\Kernel as Console_Kernel
};

/**
 * ### Enum for available Kernel types
 * @since 0.1.2.pre-alpha.M1
 *
 * @api
 */
enum Kernel {

    /**
     * ### Fully functional HTTP Kernel
     * @since 0.1.2.pre-alpha.M1
     *
     * @see \FireHub\TheCore\Kernel\HTTP\Kernel To find more details on how to use this kernel.
     */
    case HTTP;

    /**
     * ### Simplified Micro HTTP Kernel
     * @since 0.1.2.pre-alpha.M1
     *
     * @see \FireHub\TheCore\Kernel\HTTP\Micro\Kernel To find more details on how to use this kernel.
     */
    case MICRO_HTTP;

    /**
     * ### Console Kernel
     * @since 0.1.2.pre-alpha.M1
     *
     * @see \FireHub\TheCore\Kernel\Console\Kernel To find more details on how to use this kernel.
     */
    case CONSOLE;

    /**
     * ### Run selected Kernel
     * @since 0.1.2.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Kernel\HTTP\Kernel To create HTTP Kernel.
     * @uses \FireHub\TheCore\Kernel\HTTP\Micro\Kernel To create Micro HTTP Kernel.
     * @uses \FireHub\TheCore\Kernel\Console\Kernel To create Console Kernel.
     *
     * @return \FireHub\TheCore\Initializers\Kernel Selected Kernel.
     */
    public function run ():Base_Kernel {

        return match ($this) {
            self::HTTP => new HTTP_Kernel(),
            self::MICRO_HTTP => new HTTP_Micro_Kernel(),
            self::CONSOLE => new Console_Kernel
        };

    }

}