---
layout: default
title: Obj
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Obj

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Obj()
```

### ### Object low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Obj**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L47)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.Obj.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.Obj.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#isobject()">isObject</a>|### Checks if value is object|
|public static |<a href="#isenum()">isEnum</a>|### Checks if object is enumerator|
|public static |<a href="#ofclass()">ofClass</a>|### Checks if the object is of this class or has this class as one of its parents|
|public static |<a href="#subclassof()">subClassOf</a>|### Checks if the object has this class as one of its parents or implements it|
|public static |<a href="#parentclass()">parentClass</a>|### Retrieves the parent class name for object|
|public static |<a href="#implements()">implements</a>|### Return the interfaces which are implemented by the given object or its parents|
|public static |<a href="#parents()">parents</a>|### Return the parent classes of the given object|
|public static |<a href="#traits()">traits</a>|### Return the traits of the given object|
|public static |<a href="#methods()">methods</a>|### Gets the object methods names|
|public static |<a href="#properties()">properties</a>|### Gets the class public property values|
|public static |<a href="#methodexist()">methodExist</a>|### Checks if the class method exists|
|public static |<a href="#propertyexist()">propertyExist</a>|### Checks if the class property exists|
|public static |<a href="#classname()">className</a>|### Returns the name of the class of an object|
|public static |<a href="#id()">id</a>|### Checks object ID|
|public static |<a href="#hash()">hash</a>|### Checks object hash|


# Methods
***


<h2><a name="isobject()"># isObject()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::isObject(mixed $value)
```

### ### Checks if value is object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::isObject()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L61)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\DataIs::object()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#object()) _To check if value is object._

### Parameters:

* mixed $value _Value to check._

<h2><a name="isenum()"># isEnum()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::isEnum(object $object):bool
```

### ### Checks if object is enumerator

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::isEnum()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L77)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _Object to check._

### Returns:

* bool _True if object is enum, false otherwise._

<h2><a name="ofclass()"># ofClass()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::ofClass(object $value, class-string $class):bool
```

### ### Checks if the object is of this class or has this class as one of its parents

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::ofClass()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L96)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $value _The tested object._
* class-string $class _The class name._

### Returns:

* bool _True if value is array, false otherwise._

<h2><a name="subclassof()"># subClassOf()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::subClassOf(object $object, class-string $class):bool
```

### ### Checks if the object has this class as one of its parents or implements it

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::subClassOf()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L115)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _The tested object. No error is generated if the class does not exist._
* class-string $class _The class name._

### Returns:

* bool _True if the object belongs to a class which is a subclass of class, false otherwise._

<h2><a name="parentclass()"># parentClass()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::parentClass(object $object):string|false
```

### ### Retrieves the parent class name for object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::parentClass()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L131)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _The tested object._

### Returns:

* string or false _Returns the name of the parent class of the class of which object is an instance._

<h2><a name="implements()"># implements()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::implements(object $object):array<string,class-string>|false
```

### ### Return the interfaces which are implemented by the given object or its parents

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::implements()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L147)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _The tested object._

### Returns:

* array&lt;string,class-string&gt; or false _List of implemented interfaces or false if class doesn&#039;t exist._

<h2><a name="parents()"># parents()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::parents(object $object):array<string,class-string>|false
```

### ### Return the parent classes of the given object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::parents()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L163)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _The tested object._

### Returns:

* array&lt;string,class-string&gt; or false _List of class parents or false if class doesn&#039;t exist._

<h2><a name="traits()"># traits()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::traits(object $object, bool $include_parents = false):array<string,string>|false
```

### ### Return the traits of the given object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::traits()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L185)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Arr::merge()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Arr#merge()) _To merge parent traits with ones in class._
* [\FireHub\TheCore\Support\LowLevel\Cls::traits()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Cls#traits()) _To check parent traits._

### Parameters:

* object $object _The tested object._
* bool $include_parents = false _[optional] 
Whether to include trait from class parents._

### Returns:

* array&lt;string,string&gt; or false _List of class traits or false if class doesn&#039;t exist._

<h2><a name="methods()"># methods()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::methods(object $object):array<int,string>
```

### ### Gets the object methods names

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::methods()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L211)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _Object name._

### Returns:

* array&lt;int,string&gt; _Returns an array of method names defined for the specified class._

<h2><a name="properties()"># properties()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::properties(object $object, bool $mangled = false):array<string,mixed>
```

### ### Gets the class public property values

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::properties()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L234)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _Object name._
* bool $mangled = false _[optional] 
Include mangled object properties (private or protected).

note: Private variables have the class name prepended to the variable name, and protected variables have a * prepended to the variable name._

### Returns:

* array&lt;string,mixed&gt; _Returns an array of property names and their default values._

<h2><a name="methodexist()"># methodExist()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::methodExist(string $method, object $class):bool
```

### ### Checks if the class method exists

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::methodExist()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L255)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $method _The method name to check._
* object $class _Class to check the method._

### Returns:

* bool _True if method exist, false otherwise._

<h2><a name="propertyexist()"># propertyExist()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::propertyExist(string $property, object $class):bool
```

### ### Checks if the class property exists

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::propertyExist()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L277)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $property _The property name to check._
* object $class _Class to check the property._

### Returns:

* bool _True if property exist, false otherwise._

<h2><a name="classname()"># className()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::className(object $object):class-string
```

### ### Returns the name of the class of an object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::className()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L293)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _The tested object._

### Returns:

* class-string _The name of the class of which object is an instance._

<h2><a name="id()"># id()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::id(object $object):int
```

### ### Checks object ID

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::id()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L311)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _Object to check._

### Returns:

* int _An integer identifier that is unique for each currently existing object and is always the same for each object._

<h2><a name="hash()"># hash()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Obj::hash(object $object):string
```

### ### Checks object hash

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Obj::hash()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Obj.php#L329)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* object $object _Object to check._

### Returns:

* string _A string that is unique for each currently existing object and is always the same for each object._


