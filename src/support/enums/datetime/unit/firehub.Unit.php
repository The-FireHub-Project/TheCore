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

namespace FireHub\TheCore\Support\Enums\DateTime\Unit;

use BackedEnum;

/**
 * ### Interface for unit enums
 * @since 0.2.1.pre-alpha.M2
 */
interface Unit extends BackedEnum {

    /**
     * ### Singular of enum case
     * @since 0.2.1.pre-alpha.M2
     *
     * @return string Singular.
     */
    public function singlar ():string;

    /**
     * ### Plural of enum case
     * @since 0.2.1.pre-alpha.M2
     *
     * @return string Plural.
     */
    public function plural ():string;

}