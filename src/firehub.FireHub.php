<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore;

use FireHub\TheCore\Initializers\Autoload;
use DirectoryIterator, Error, Throwable;

use const FireHub\TheCore\Initializers\Constants\DS;
use const FireHub\TheCore\Initializers\Constants\CORE_ROOT;
use const FireHub\TheCore\Initializers\Constants\VENDOR_ROOT;
use const FireHub\TheCore\Initializers\Constants\PROJECT_ROOT;
use const DIRECTORY_SEPARATOR;

use function implode;

/**
 * ### Main FireHub class for bootstrapping
 *
 * This class contains all system definitions, constants and dependant
 * components for FireHub bootstrapping.
 * @since 0.1.1.pre-alpha.M1
 */
final class Firehub {

    /**
     * ### Light the torch
     *
     * This methode serves for instantiating FireHub framework.
     * @since 0.1.1.pre-alpha.M1
     *
     * @return $this This object.
     */
    public function boot ():self {

        return $this
            ->bootloaders();

    }

    /**
     * ### Initialize bootloaders
     *
     * Load series of bootloaders required for
     * booting FireHub framework.
     * @since 0.1.1.pre-alpha.M1
     *
     * @return $this This object.
     */
    private function bootloaders ():self {

        return $this
            ->registerConstants()
            ->autoload();

    }

    /**
     * ### Register init constants
     *
     * This method will scan FireHub\Initializers\Constants folder
     * and automatically include all PHP files.
     * @since 0.1.1.pre-alpha.M1
     *
     * @uses DirectoryIterator To find all php files in folder.
     *
     * @throws Error If FireHub cannot load constant files.
     *
     * @return $this This object.
     */
    private function registerConstants ():self {

        try {

            foreach ($folder = new DirectoryIterator(__DIR__.DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR, ['initializers', 'constants'])) as $file)
                if ($file->isFile() && $file->getExtension() === 'php') include $file->getPathname();

        } catch (Throwable) {

            throw new Error('Cannot load constant files, please contact your administrator');

        }

        return $this;

    }

    /**
     * ### Load autoload file
     *
     * This file contains definitions and series of functions
     * needed for calling classes.
     * @since 0.1.1.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\CORE_ROOT To find FireHub framework root path.
     * @uses \FireHub\TheCore\Initializers\Constants\VENDOR_ROOT To find vendor root path.
     * @uses \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT To find project root path.
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Initializers\Autoload To autoload called classes.
     * @uses \FireHub\TheCore\Initializers\Autoload::register() To register autoload implementations.
     *
     * @throws Error If FireHub cannot load Autoload file.
     *
     * @return $this This object.
     */
    private function autoload ():self {

        if (!include(CORE_ROOT.DS.'initializers'.DS.'firehub.Autoload.php')) throw new Error('Cannot load Autoload file, please contact your administrator.');

        $autoload = new Autoload();

        // register main firehub classes
        $autoload->register(
            /**
             * @param array{vendor: string, app: string, namespace: string, prefix: string, class: string, suffix: string} $class_fqn_components <p>
             * Extracted components from class fully-qualified name.
             * </p>
             *
             * @return string Path to root folder to register.
             */
            static fn(array $class_fqn_components):string =>
                'phar://'.VENDOR_ROOT.DS.$class_fqn_components['vendor']
                .DS.$class_fqn_components['app']
                .DS.'phar'
                .DS.$class_fqn_components['app'].'.phar'
                .(!empty($class_fqn_components['namespace']) ? DS.$class_fqn_components['namespace'] : ''),
            true, true
        );

        // register main firehub classes
        $autoload->register(
            /**
             * @param array{vendor: string, app: string, namespace: string, prefix: string, class: string, suffix: string} $class_fqn_components <p>
             * Extracted components from class fully-qualified name.
             * </p>
             *
             * @return string Path to root folder to register.
             */
            static fn(array $class_fqn_components):string =>
                 PROJECT_ROOT
                .(!empty($class_fqn_components['namespace']) ? DS.$class_fqn_components['namespace'] : ''),
            true, true
        );

        return $this;

    }

}