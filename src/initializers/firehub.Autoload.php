<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package.
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Initializers;

use function spl_autoload_register;

/**
 * ### Autoload for called classes
 *
 * Firehub autoloader implementation used to
 * call main Firehub classes and its components.
 * @since 0.1.1.pre-alpha.M1
 */
final class Autoload {

    /**
     * ### Register new autoload implementation
     * @since 0.1.1.pre-alpha.M1
     *
     * @param string $path <p>
     * Root path where register will try to find classes.
     * </p>
     * @param bool $prefix [optional] <p>
     * If true, first namespace component from class will be used as prefix for file name.
     *
     * note: Prefix must be listed in \FireHub\Initializers\Enums\Prefix to work.
     * </p>
     * @param bool $suffix [optional] <p>
     * If true, you can use underscore after class name to add type to class.
     *
     * note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work.
     * </p>
     * @param bool $phar [optional] <p>
     * If true, your first available namespace component will get .phar suffix.
     * </p>
     * @param bool $prepend [optional] <p>
     * If true, register will prepend the autoloader on the autoload stack instead of appending it.
     * </p>
     *
     * @return bool True if autoload is registered, false otherwise.
     */
    public function register (string $path, bool $prefix = false, bool $suffix = false, bool $phar = false, bool $prepend = false):bool {

        var_dump(\Phar::running(false));
        var_dump(\Phar::running(true));

        return spl_autoload_register(fn(string $class_fqn) => $this->callback($path, $class_fqn, $prefix, $suffix, $phar), true, $prepend);

    }

    /**
     * ### The autoload function being registered
     * @since 0.1.1.pre-alpha.M1
     *
     * @param string $path <p>
     * Root path where register will try to find classes.
     * </p>
     * @param string $class_fqn <p>
     * Fully qualified class name to search for.
     * </p>
     * @param bool $prefix <p>
     * If true, first namespace component from class will be used as prefix for file name.
     *
     * note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work.
     * </p>
     * @param bool $suffix <p>
     * If true, you can use underscore after class name to add type to class.
     *
     * note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work.
     * </p>
     * @param bool $phar <p>
     * If true, your first available namespace component will get .phar suffix.
     * </p>
     *
     * @return void
     */
    private function callback (string $path, string $class_fqn, bool $prefix, bool $suffix, bool $phar):void {

        var_dump($path);

        //include $file;

    }

}