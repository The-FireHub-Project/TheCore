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

use FireHub\TheCore\Support\LowLevel\ {
    Data\DataIs, Iterable\Arr
};
use UnitEnum;

use function class_implements;
use function class_parents;
use function class_uses;
use function get_class;
use function get_class_methods;
use function get_mangled_object_vars;
use function get_object_vars;
use function get_parent_class;
use function is_a;
use function is_subclass_of;
use function method_exists;
use function property_exists;
use function spl_object_hash;
use function spl_object_id;

/**
 * ### Object low level class
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolian arguments.
 */
final class Obj {

    /**
     * ### Checks if value is object
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Data\DataIs::object() To check if value is object.
     *
     * @param mixed $value <p>
     * Value to check.
     * </p>
     *
     * @return ($value is object ? true : false) True if value is object, false otherwise.
     */
    public static function isObject (mixed $value):bool {

        return DataIs::object($value);

    }

    /**
     * ### Checks if object is enumerator
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * Object to check.
     * </p>
     *
     * @return bool True if object is enum, false otherwise.
     */
    public static function isEnum (object $object):bool {

        return $object instanceof UnitEnum;

    }

    /**
     * ### Checks if the object is of this class or has this class as one of its parents
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $value <p>
     * The tested object.
     * </p>
     * @param class-string $class <p>
     * The class name.
     * </p>
     *
     * @return bool True if value is array, false otherwise.
     */
    public static function ofClass (object $value, string $class):bool {

        return is_a($value, $class);

    }

    /**
     * ### Checks if the object has this class as one of its parents or implements it
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * The tested object. No error is generated if the class does not exist.
     * </p>
     * @param class-string $class <p>
     * The class name.
     * </p>
     *
     * @return bool True if the object belongs to a class which is a subclass of class, false otherwise.
     */
    public static function subClassOf (object $object, string $class):bool {

        return is_subclass_of($object, $class);

    }

    /**
     * ### Retrieves the parent class name for object
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     *
     * @return string|false Returns the name of the parent class of the class of which object is an instance.
     */
    public static function parentClass (object $object):string|false {

        return get_parent_class($object);

    }

    /**
     * ### Return the interfaces which are implemented by the given object or its parents
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     *
     * @return array<string, class-string>|false List of implemented interfaces or false if class doesn't exist.
     */
    public static function implements (object $object):array|false {

        return class_implements($object) ?: [];

    }

    /**
     * ### Return the parent classes of the given object
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     *
     * @return array<string, class-string>|false List of class parents or false if class doesn't exist.
     */
    public static function parents (object $object):array|false {

        return class_parents($object);

    }

    /**
     * ### Return the traits of the given object
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Iterable\Arr::merge() To merge parent traits with ones in class.
     * @uses \FireHub\TheCore\Support\LowLevel\Cls::traits() To check parent traits.
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     * @param bool $include_parents [optional] <p>
     * Whether to include trait from class parents.
     * </p>
     *
     * @return array<string, string>|false List of class traits or false if class doesn't exist.
     */
    public static function traits (object $object, bool $include_parents = false):array|false {

        $traits = class_uses($object);

        if (!$include_parents) return $traits;

        if ($traits !== false && $parent = self::parentClass($object)) $traits = Arr::merge($traits, ($parent_traits = Cls::traits($parent, true)) ? $parent_traits : []); // @phpstan-ignore-line

        if ($traits) foreach ($traits as $trait) $traits = Arr::merge($traits, ($parent_trait = Cls::traits($trait, true)) ? $parent_trait : []); // @phpstan-ignore-line

        return $traits; // @phpstan-ignore-line

    }

    /**
     * ### Gets the object methods names
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::object() To check if $class is object.
     *
     * @param object $object <p>
     * Object name.
     * </p>
     *
     * @return array<int, string> Returns an array of method names defined for the specified class.
     *
     * @note Result depends on the current scope.
     */
    public static function methods (object $object):array {

        return get_class_methods($object);

    }

    /**
     * ### Gets the class public property values
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * Object name.
     * </p>
     * @param bool $mangled [optional] <p>
     * Include mangled object properties (private or protected).
     *
     * note: Private variables have the class name prepended to the variable name, and protected variables have a * prepended to the variable name.
     * </p>
     *
     * @return array<string, mixed> Returns an array of property names and their default values.
     *
     * @note Result depends on the current scope.
     */
    public static function properties (object $object, bool $mangled = false):array {

        return $mangled ? get_mangled_object_vars($object) : get_object_vars($object);

    }

    /**
     * ### Checks if the class method exists
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $method <p>
     * The method name to check.
     * </p>
     * @param object $class <p>
     * Class to check the method.
     * </p>
     *
     * @return bool True if method exist, false otherwise.
     *
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function methodExist (string $method, object $class):bool {

        return method_exists($class, $method);

    }

    /**
     * ### Checks if the class property exists
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $property <p>
     * The property name to check.
     * </p>
     * @param object $class <p>
     * Class to check the property.
     * </p>
     *
     * @return bool True if property exist, false otherwise.
     *
     * @note This method cannot detect properties that are magically accessible using the __get magic method.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function propertyExist (string $property, object $class):bool {

        return property_exists($class, $property);

    }

    /**
     * ### Returns the name of the class of an object
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     *
     * @return class-string The name of the class of which object is an instance.
     */
    public static function className (object $object):string {

        return get_class($object);

    }

    /**
     * ### Checks object ID
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * Object to check.
     * </p>
     *
     * @return int An integer identifier that is unique for each currently existing object and is always the same for each object.
     *
     * @note When an object is destroyed, its id may be reused for other objects.
     */
    public static function id (object $object):int {

        return spl_object_id($object);

    }

    /**
     * ### Checks object hash
     * @since 0.1.3.pre-alpha.M1
     *
     * @param object $object <p>
     * Object to check.
     * </p>
     *
     * @return string A string that is unique for each currently existing object and is always the same for each object.
     *
     * @note When an object is destroyed, its hash may be reused for other objects.
     */
    public static function hash (object $object):string {

        return spl_object_hash($object);

    }

}