
```php
class \FireHub\TheCore\Support\LowLevel\Cls()
```

### ### Class low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Cls**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L48)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.Cls.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.Cls.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#isclass()">isClass</a>|### Checks if class name exist|
|static |<a href="#isinterface()">isInterface</a>|### Checks if interface name exist|
|static |<a href="#isenum()">isEnum</a>|### Checks if enum name exist|
|static |<a href="#ofclass()">ofClass</a>|### Checks if class is of this class or has this class as one of its parents|
|static |<a href="#subclassof()">subClassOf</a>|### Checks if class has this class as one of its parents or implements it|
|static |<a href="#parentclass()">parentClass</a>|### Retrieves the parent class name for class|
|static |<a href="#implements()">implements</a>|### Return the interfaces which are implemented by the given class or its parents|
|static |<a href="#parents()">parents</a>|### Return the parent classes of the given class|
|static |<a href="#traits()">traits</a>|### Return the traits of the given class|
|static |<a href="#alias()">alias</a>|### Creates an alias for a class|
|static |<a href="#methods()">methods</a>|### Gets the class methods names|
|static |<a href="#properties()">properties</a>|### Gets the class public property values|
|static |<a href="#declaredclasses()">declaredClasses</a>|### Gets the declared classes|
|static |<a href="#declaredinterfaces()">declaredInterfaces</a>|### Gets the declared interfaces|
|static |<a href="#declaredtraits()">declaredTraits</a>|### Gets the declared traits|
|static |<a href="#methodexist()">methodExist</a>|### Checks if the class method exists|
|static |<a href="#propertyexist()">propertyExist</a>|### Checks if the class property exists|


# Methods


<h2><a name="isclass()"># isClass()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::isClass(class-string $name, bool $autoload = true):bool
```

### ### Checks if class name exist
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::isClass()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L63)**</sub><br>


### Parameters:

* class-string $name _Value to check._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if class name exist, false otherwise._

<h2><a name="isinterface()"># isInterface()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::isInterface(class-string $name, bool $autoload = true):bool
```

### ### Checks if interface name exist
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::isInterface()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L82)**</sub><br>


### Parameters:

* class-string $name _Value to check._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if class name exist, false otherwise._

<h2><a name="isenum()"># isEnum()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::isEnum(class-string $name, bool $autoload = true):bool
```

### ### Checks if enum name exist
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::isEnum()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L101)**</sub><br>


### Parameters:

* class-string $name _Value to check._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if enum exist, false otherwise._

<h2><a name="ofclass()"># ofClass()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::ofClass(class-string $value, class-string $class, bool $autoload = true):bool
```

### ### Checks if class is of this class or has this class as one of its parents
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::ofClass()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L123)**</sub><br>


### Parameters:

* class-string $value _The tested class._
* class-string $class _The class name._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if value is class, false otherwise._

<h2><a name="subclassof()"># subClassOf()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::subClassOf(class-string $value, class-string $class, bool $autoload = true):bool
```

### ### Checks if class has this class as one of its parents or implements it
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::subClassOf()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L145)**</sub><br>


### Parameters:

* class-string $value _The tested class. No error is generated if the class does not exist._
* class-string $class _The class name._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if class belongs to a class which is a subclass of class, false otherwise._

<h2><a name="parentclass()"># parentClass()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::parentClass(class-string $class):class-string|false
```

### ### Retrieves the parent class name for class
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::parentClass()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L161)**</sub><br>


### Parameters:

* class-string $class _The tested class._

### Returns:

* class-string or false _Returns the name of the parent class of the class of which class is an instance, or false if parent doesn&#039;t exist._

<h2><a name="implements()"># implements()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::implements(class-string $class, bool $autoload = true):array<string,class-string>|false
```

### ### Return the interfaces which are implemented by the given class or its parents
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::implements()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L180)**</sub><br>


### Parameters:

* class-string $class _The tested class._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* array&lt;string,class-string&gt; or false _List of implemented interfaces or false if class doesn&#039;t exist._

<h2><a name="parents()"># parents()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::parents(class-string $class, bool $autoload = true):array<string,class-string>|false
```

### ### Return the parent classes of the given class
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::parents()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L199)**</sub><br>


### Parameters:

* class-string $class _The tested class._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* array&lt;string,class-string&gt; or false _List of class parents or false if class doesn&#039;t exist._

<h2><a name="traits()"># traits()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::traits(class-string $class, bool $include_parents = false, bool $autoload = true):array<string,string>|false
```

### ### Return the traits of the given class
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::traits()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L225)**</sub><br>


### Parameters:

* class-string $class _The tested class._
* bool $include_parents = false _[optional] 
Whether to include trait from class parents._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* array&lt;string,string&gt; or false _List of class traits or false if class doesn&#039;t exist._

<h2><a name="alias()"># alias()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::alias(class-string $class, class-string $alias, bool $autoload = true):bool
```

### ### Creates an alias for a class
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::alias()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L255)**</sub><br>


### Parameters:

* class-string $class _The original class._
* class-string $alias _The alias name for the class._
* bool $autoload = true _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._

### Returns:

* bool _True if class name exist, false otherwise._

<h2><a name="methods()"># methods()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::methods(class-string $class):array<int,string>|false
```

### ### Gets the class methods names
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::methods()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L276)**</sub><br>


### Parameters:

* class-string $class _Class name._

### Returns:

* array&lt;int,string&gt; or false _Returns an array of method names defined for the specified class, false otherwise._

<h2><a name="properties()"># properties()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::properties(class-string $class):array<string,mixed>|false
```

### ### Gets the class public property values
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::properties()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L297)**</sub><br>


### Parameters:

* class-string $class _Class name._

### Returns:

* array&lt;string,mixed&gt; or false _Returns an array of property names and their default values, false otherwise._

<h2><a name="declaredclasses()"># declaredClasses()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::declaredClasses():array<int,class-string>
```

### ### Gets the declared classes
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::declaredClasses()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L309)**</sub><br>


### Returns:

* array&lt;int,class-string&gt; _Returns array of the names of the declared classes in the current script._

<h2><a name="declaredinterfaces()"># declaredInterfaces()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::declaredInterfaces():array<int,class-string>
```

### ### Gets the declared interfaces
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::declaredInterfaces()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L321)**</sub><br>


### Returns:

* array&lt;int,class-string&gt; _Returns array of the names of the declared interfaces in the current script._

<h2><a name="declaredtraits()"># declaredTraits()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::declaredTraits():array<int,class-string>
```

### ### Gets the declared traits
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::declaredTraits()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L333)**</sub><br>


### Returns:

* array&lt;int,class-string&gt; _Returns array of the names of the declared traits in the current script._

<h2><a name="methodexist()"># methodExist()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::methodExist(string $method, class-string $class):bool
```

### ### Checks if the class method exists
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::methodExist()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L354)**</sub><br>


### Parameters:

* string $method _The method name to check._
* class-string $class _Class to check the method._

### Returns:

* bool _True if method exist, false otherwise._

<h2><a name="propertyexist()"># propertyExist()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Cls::propertyExist(string $property, class-string $class):bool
```

### ### Checks if the class property exists
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Cls::propertyExist()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Cls.php#L376)**</sub><br>


### Parameters:

* string $property _The property name to check._
* class-string $class _Class to check the property._

### Returns:

* bool _True if property exist, false otherwise._


