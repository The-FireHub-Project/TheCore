<?php
declare(strict_types = 1);

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
 * ### Interface for calculatable unit enums
 * @since 0.2.1.pre-alpha.M2
 */
interface Calculatable extends Unit {

    /**
     * ### Get parent enum case
     * @since 0.2.1.pre-alpha.M2
     *
     * @return \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic Parent enum case.
     */
    public function parent ():Basic;

    /**
     * ### Calculate number of units
     * @since 0.2.1.pre-alpha.M2
     *
     * @return positive-int Number of units.
     */
    public function calculate ():int;

}