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

namespace FireHub\TheCore\Initializers;

/**
 * ### Abstract Base Kernel
 *
 * Process requests that come in through various sources
 * and give client appropriate response.
 * @since 0.1.2.pre-alpha.M1
 */
abstract class Kernel {

    /**
     * ### Handle client runtime
     * @since 0.1.2.pre-alpha.M1
     *
     * @return string Response from Kernel.
     */
    abstract public function runtime ():string;

}