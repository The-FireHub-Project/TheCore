<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Kernel\HTTP
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Kernel\HTTP\Micro;

use FireHub\TheCore\Initializers\Kernel as BaseKernel;

/**
 * ### Micro HTTP Kernel
 *
 * Process Micro HTTP requests that come in through various sources
 * and give client appropriate response.
 * @since 0.1.2.pre-alpha.M1
 */
final class Kernel extends BaseKernel {

    /**
     * @inheritDoc
     */
    public function runtime ():string {

        return 'HTTP Micro Torch';

    }

}