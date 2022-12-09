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

namespace FireHub\TheCore\Support\LowLevel;

use function class_alias;
use function class_exists;
use function class_implements;
use function class_parents;
use function class_uses;
use function enum_exists;
use function get_class_methods;
use function get_class_vars;
use function get_declared_classes;
use function get_declared_interfaces;
use function get_declared_traits;
use function get_parent_class;
use function interface_exists;
use function is_a;
use function is_subclass_of;
use function method_exists;
use function property_exists;

/**
 * ### Class low level class
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolean arguments.
 */
final class Cls {

    /**
     * ### Checks if class name exist
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $name <p>
     * Value to check.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if class name exist, false otherwise.
     */
    public static function isClass (string $name, bool $autoload = true):bool {

        return class_exists($name, $autoload);

    }

    /**
     * ### Checks if interface name exist
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $name <p>
     * Value to check.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if class name exist, false otherwise.
     */
    public static function isInterface (string $name, bool $autoload = true):bool {

        return interface_exists($name, $autoload);

    }

    /**
     * ### Checks if enum name exist
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $name <p>
     * Value to check.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if enum exist, false otherwise.
     */
    public static function isEnum (string $name, bool $autoload = true):bool {

        return enum_exists($name, $autoload);

    }

    /**
     * ### Checks if class is of this class or has this class as one of its parents
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $value <p>
     * The tested class.
     * </p>
     * @param class-string $class <p>
     * The class name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if value is class, false otherwise.
     */
    public static function ofClass (string $value, string $class, bool $autoload = true):bool {

        return is_a($value, $class, $autoload);

    }

    /**
     * ### Checks if class has this class as one of its parents or implements it
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $value <p>
     * The tested class. No error is generated if the class does not exist.
     * </p>
     * @param class-string $class <p>
     * The class name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if class belongs to a class which is a subclass of class, false otherwise.
     */
    public static function subClassOf (string $value, string $class, bool $autoload = true):bool {

        return is_subclass_of($value, $class, $autoload);

    }

    /**
     * ### Retrieves the parent class name for class
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $class <p>
     * The tested class.
     * </p>
     *
     * @return class-string|false Returns the name of the parent class of the class of which class is an instance, or false if parent doesn't exist.
     */
    public static function parentClass (string $class):string|false {

        return get_parent_class($class);

    }

    /**
     * ### Return the interfaces which are implemented by the given class or its parents
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $class <p>
     * The tested class.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return array<string, class-string>|false List of implemented interfaces or false if class doesn't exist.
     */
    public static function implements (string $class, bool $autoload = true):array|false {

        return class_implements($class, $autoload) ?: [];

    }

    /**
     * ### Return the parent classes of the given class
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $class <p>
     * The tested class.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return array<string, class-string>|false List of class parents or false if class doesn't exist.
     */
    public static function parents (string $class, bool $autoload = true):array|false {

        return class_parents($class, $autoload);

    }

    /**
     * ### Return the traits of the given class
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Cls::parentClass() To get class parent.
     * @uses \FireHub\TheCore\Support\LowLevel\Cls::traits() To get class traits.
     * @uses \FireHub\TheCore\Support\LowLevel\Arr::merge() To merge parent traits with ones in class.
     *
     * @param class-string $class <p>
     * The tested class.
     * </p>
     * @param bool $include_parents [optional] <p>
     * Whether to include trait from class parents.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return array<string, string>|false List of class traits or false if class doesn't exist.
     */
    public static function traits (string $class, bool $include_parents = false, bool $autoload = true):array|false {

        $traits = class_uses($class, $autoload);

        if (!$include_parents) return $traits;

        if ($traits !== false && $parent = self::parentClass($class)) $traits = Arr::merge($traits, ($parent_traits = self::traits($parent, true, $autoload)) ? $parent_traits : []); // @phpstan-ignore-line

        if ($traits) foreach ($traits as $trait) $traits = Arr::merge($traits, ($parent_trait = self::traits($trait, true, $autoload)) ? $parent_trait : []); // @phpstan-ignore-line

        return $traits; // @phpstan-ignore-line

    }

    /**
     * ### Creates an alias for a class
     * @since 0.1.3.pre-alpha.M1
     *
     * @param class-string $class <p>
     * The original class.
     * </p>
     * @param class-string $alias <p>
     * The alias name for the class.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     *
     * @return bool True if class name exist, false otherwise.
     */
    public static function alias (string $class, string $alias, bool $autoload = true):bool {

        return class_alias($class, $alias, $autoload);

    }

    /**
     * ### Gets the class methods names
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Cls::isClass() To check if $class is class.
     *
     * @param class-string $class <p>
     * Class name.
     * </p>
     *
     * @return array<int, string>|false Returns an array of method names defined for the specified class, false otherwise.
     *
     * @note Result depends on the current scope.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function methods (string $class):array|false {

        return self::isClass($class) ? get_class_methods($class) : false;

    }

    /**
     * ### Gets the class public property values
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Cls::isClass() To check if $class is class.
     *
     * @param class-string $class <p>
     * Class name.
     * </p>
     *
     * @return array<string, mixed>|false Returns an array of property names and their default values, false otherwise.
     *
     * @note Result depends on the current scope.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function properties (string $class):array|false {

        return self::isClass($class) ? get_class_vars($class) : false;

    }

    /**
     * ### Gets the declared classes
     * @since 0.1.3.pre-alpha.M1
     *
     * @return array<int, class-string> Returns array of the names of the declared classes in the current script.
     */
    public static function declaredClasses ():array {

        return get_declared_classes();

    }

    /**
     * ### Gets the declared interfaces
     * @since 0.1.3.pre-alpha.M1
     *
     * @return array<int, class-string> Returns array of the names of the declared interfaces in the current script.
     */
    public static function declaredInterfaces ():array {

        return get_declared_interfaces();

    }

    /**
     * ### Gets the declared traits
     * @since 0.1.3.pre-alpha.M1
     *
     * @return array<int, class-string> Returns array of the names of the declared traits in the current script.
     */
    public static function declaredTraits ():array {

        return get_declared_traits();

    }

    /**
     * ### Checks if the class method exists
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $method <p>
     * The method name to check.
     * </p>
     * @param class-string $class <p>
     * Class to check the method.
     * </p>
     *
     * @return bool True if method exist, false otherwise.
     *
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function methodExist (string $method, string $class):bool {

        return method_exists($class, $method);

    }

    /**
     * ### Checks if the class property exists
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $property <p>
     * The property name to check.
     * </p>
     * @param class-string $class <p>
     * Class to check the property.
     * </p>
     *
     * @return bool True if property exist, false otherwise.
     *
     * @note This method cannot detect properties that are magically accessible using the __get magic method.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function propertyExist (string $property, string $class):bool {

        return property_exists($class, $property);

    }

}