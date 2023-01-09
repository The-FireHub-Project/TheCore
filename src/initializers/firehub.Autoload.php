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

use FireHub\TheCore\Initializers\Enums\ {
    Prefix, Suffix
};
use Error, Phar;

use const FireHub\TheCore\Initializers\Constants\DS;

use function array_key_last;
use function array_pop;
use function array_shift;
use function class_exists;
use function count;
use function explode;
use function implode;
use function is_callable;
use function is_file;
use function spl_autoload_call;
use function spl_autoload_functions;
use function spl_autoload_register;
use function spl_autoload_unregister;
use function strtolower;

require Phar::running(true).'/initializers/enums/firehub.Prefix.php';
require Phar::running(true).'/initializers/enums/firehub.Suffix.php';

/**
 * ### Autoload for called classes
 *
 * Firehub autoloader implementation used to
 * call main Firehub classes and its components.
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.1.3.pre-alpha.M1 Removed optional from all parameters in register method and replaced them with class properties, removed unused parameter $class_fqn in callable method, fixed suffix by adding strtolower to return key in extract method.
 */
final class Autoload {

    /**
     * ### If true, you can use underscore after class name to add type to class
     * @since 0.1.3.pre-alpha.M1
     *
     * @var bool $prefix
     */
    private bool $prefix = false;

    /**
     * ### If true, you can use underscore after class name to add type to class
     * @since 0.1.3.pre-alpha.M1
     *
     * @var bool $suffix
     */
    private bool $suffix = false;

    /**
     * ### Register new autoload implementation
     *
     * @since 0.1.1.pre-alpha.M1
     * @since 0.1.3.pre-alpha.M1 Removed optional from all parameters.
     *
     * @example Registiring new autoload implementation.
     * ```php
     * use FireHub\TheCore\Initializers\Autoload;
     * use const FireHub\TheCore\Initializers\Constants\PROJECT_ROOT;
     *
     * $autoload = new Autoload();
     * $autoload->register(
     *  PROJECT_ROOT, false, true, true
     * );
     * ```
     * @example Registiring new autoload implementation with callable path.
     * ```php
     * use FireHub\TheCore\Initializers\Autoload;
     * use const FireHub\TheCore\Initializers\Constants\PROJECT_ROOT;
     *
     * $autoload = new Autoload();
     * $autoload->register(
     *  function (array $class_fqn_components):string {
     *  return PROJECT_ROOT.(!empty($class_fqn_components['namespace']) ? DS.$class_fqn_components['namespace'] : '');
     *  }, false, true, true
     * );
     * ```
     *
     * @param callable|string $path <p>
     * Root path where register will try to find classes. All namespace components will be resolved as folders
     * inside root path.
     * </p>
     * @param bool $prefix <p>
     * If true, your class filenames will have to use prefixes.
     *
     * note: Prefix must be listed in \FireHub\Initializers\Enums\Prefix to work and will have to match your first namespace component
     * with dot at the end of prefix.
     * </p>
     * @param bool $suffix <p>
     * If true, you can use underscore after class name to add type to class.
     *
     * note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work.
     * </p>
     * @param bool $prepend <p>
     * If true, register will prepend the autoloader on the autoload stack instead of appending it.
     * </p>
     *
     * @throws Error If class doesn't have at least two namespace levels.
     *
     * @return bool True if autoload is registered, false otherwise.
     */
    public function register (callable|string $path, bool $prefix, bool $suffix, bool $prepend):bool {

        // set properies
        $this->prefix = $prefix;
        $this->suffix = $suffix;

        return spl_autoload_register(
        /** @param class-string $class_fqn */
            fn(string $class_fqn) => $this->callback(
                is_callable($path) ? $path($this->extract($class_fqn)) : $path, $this->extract($class_fqn), $this->prefix, $this->suffix
            ), true, $prepend
        );

    }

    /**
     * ### Unregister all autoload implementations
     * @since 0.1.1.pre-alpha.M1
     *
     * @return void
     */
    public function unregister ():void {

        foreach ($this->functions() as $function) spl_autoload_unregister($function);

    }

    /**
     * ### Get all autoload implementations
     * @since 0.1.1.pre-alpha.M1
     *
     * @return callable[] List of all autoload implementations.
     */
    public function functions ():array {

        return spl_autoload_functions();

    }

    /**
     * ### Try to load class from registered autoloaders
     * @since 0.1.1.pre-alpha.M1
     *
     * @param class-string $class <p>
     * Fully-qualified class name.
     * </p>
     * @param array<array-key, mixed> $arguments [optional] <p>
     * List of constructor parameters to pass to class.
     * </p>
     *
     * @throws Error If class does not exist.
     *
     * @return void
     */
    public function load (string $class, array $arguments = []):void {

        spl_autoload_call($class);

        if (!class_exists($class, false)) throw new Error("Class $class does not exist");

        new $class(...$arguments);

    }

    /**
     * ### The autoload function being registereD
     *
     * @since 0.1.1.pre-alpha.M1
     * @since 0.1.3.pre-alpha.M1 Removed unused parameter $class_fqn
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     *
     * @param string $path <p>
     * Root path where register will try to find classes.
     * </p>
     * @param array{vendor: string, app: string, namespace: string, prefix: string, class: string, suffix: string} $class_fqn_components <p>
     * Extracted components from class fully-qualified name.
     * </p>
     * @param bool $prefix <p>
     * If true, your class filenames will have to use prefixes.
     *
     * note: Prefix must be listed in \FireHub\Initializers\Enums\Prefix to work and will have to match your first namespace component
     * with dot at the end of prefix.
     * </p>
     * @param bool $suffix <p>
     * If true, you can use underscore after class name to add type to class.
     *
     * note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work.
     * </p>
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.IfStatementAssignment) Not typo on last line.
     */
    private function callback (string $path, array $class_fqn_components, bool $prefix, bool $suffix) {

        // if using prefix option then extract prefix from class components
        $prefix = $prefix // if prefix option exist
            ? ($prefix = $this->prefix($class_fqn_components['prefix'])) // if prefix exist
                ? $prefix->value.'.' // get value from prefix with dot at the end
                : ''
            : '';

        // if using suffix option then extract suffix from class name
        $suffix = $suffix // if suffix option is true
            ? ($suffix = $this->suffix($class_fqn_components['suffix'])) // if suffix exist
                ? '.'.$suffix->value // get value from suffix with dot at the beginning
                : ''
            : '';

        if (is_file($file = $path.DS.$prefix.$class_fqn_components['class'].$suffix.'.php')) include $file;

    }

    /**
     * ### Breake class fully-qualified name into usable components
     *
     * @since 0.1.1.pre-alpha.M1
     * @since 0.1.3.pre-alpha.M1 Fixed suffix by adding strtolower to return key.
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     *
     * @param string $class_fqn <p>
     * Fully-qualified class name.
     * </p>
     *
     * @throws Error If class doesn't have at least two namespace levels.
     *
     * @return array{vendor: string, app: string, namespace: string, prefix: string, class: string, suffix: string} List of class components.
     */
    private function extract (string $class_fqn):array {

        // list of class fully-qualified name components
        $class_fqn_components = explode('\\', $class_fqn);

        // last component represet class
        $class = $class_fqn_components[array_key_last($class_fqn_components)];
        $class_components = explode('_', $class);
        array_pop($class_fqn_components);

        // first two components represent path
        foreach ($class_fqn_components as $key => $value) $class_fqn_components[$key] = strtolower($value); // lowercase all leftover components
        if (count($class_fqn_components) < 2) throw new Error("Class $class_fqn must have at least two namespace levels!"); // classes must have at least two namespace levels
        $vendor = $class_fqn_components[0];
        $app = $class_fqn_components[1];
        array_shift($class_fqn_components);
        array_shift($class_fqn_components);

        // leftover componenets represet namespace
        $namespace = implode(DS, $class_fqn_components);

        return [
            'vendor' => $vendor,
            'app' => $app,
            'namespace' => $namespace,
            'prefix' => $vendor,
            'class' => $class_components[0],
            'suffix' => isset($class_components[1]) ? strtolower($class_components[1]) : ''
        ];

    }

    /**
     * ### Check for valid prefix
     * @since 0.1.1.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Enums\Prefix To try to match valid prefix.
     *
     * @param string $name <p>
     * Prefix name to check for.
     * </p>
     *
     * @return \FireHub\TheCore\Initializers\Enums\Prefix|false Valid prefix on false is none exist.
     */
    private function prefix (string $name):Prefix|false {

        return Prefix::tryFrom($name) ?? false;

    }

    /**
     * ### Check for valid suffix
     * @since 0.1.1.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Enums\Suffix To try to match valid suffix.
     *
     * @param string $name  <p>
     * Suffix name to check for.
     * </p>
     *
     * @return \FireHub\TheCore\Initializers\Enums\Suffix|false Valid suffix on false is none exist.
     */
    private function suffix (string $name):Suffix|false {

        return Suffix::tryFrom($name) ?? false;

    }

}