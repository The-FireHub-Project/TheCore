---
layout: default
title: Data
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Data

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Data()
```

### ### Data Type low level class

_This low level support class is for manipulating data._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Data**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L45)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.Data.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.Data.php)**</sub><br>

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
|public static |<a href="#gettype()">getType</a>|### Get data type|
|public static |<a href="#settype()">setType</a>|### Convert data to type|
|public static |<a href="#serialize()">serialize</a>|### Generates storable representation of data|
|public static |<a href="#unserialize()">unserialize</a>|### Creates a PHP value from a stored representation|
|public static |<a href="#jsonencode()">jsonEncode</a>|### Returns JSON representation of a value|
|public static |<a href="#jsondecode()">jsonDecode</a>|### Decodes JSON string|


# Methods
***


<h2><a name="gettype()"># getType()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::getType(mixed $value):\FireHub\TheCore\Support\Enums\Data\Type
```

### ### Get data type

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::getType()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L59)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Data\Type](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type) _As return._

### This method is used by:

* *To get typo of file permissions.*

* *To get typo of file permissions.*

* *To get typo of file permissions.*

* *To get typo of file permissions.*

* *To get typo of file permissions.*


### Parameters:

* mixed $value _Value to check type._

### Returns:

* [\FireHub\TheCore\Support\Enums\Data\Type](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type) _Data type._

<h2><a name="settype()"># setType()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::setType(mixed $value, \FireHub\TheCore\Support\Enums\Data\Type $type)
```

### ### Convert data to type

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::setType()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L97)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Data\Type](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type) _As parameter._

### This method is used by:

* *To set microtime to other type.*


### Parameters:

* mixed $value _Value to convert._
* [\FireHub\TheCore\Support\Enums\Data\Type](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type) $type _Type to convert data to.
._

<h2><a name="serialize()"># serialize()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::serialize(string|int|float|bool|array|object|null $value):string|false
```

### ### Generates storable representation of data

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::serialize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L122)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\Throwable](/thecore/v0.2\Throwable) _To cache error._

### Parameters:

* string or int or float or bool or array or object or null $value 

### Returns:

* string or false _String containing a byte-stream representation of value that can be stored anywhere, false otherwise._

<h2><a name="unserialize()"># unserialize()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::unserialize(string $data, bool|array $allowed_classes = false, positive-int $max_depth = 4096)
```

### ### Creates a PHP value from a stored representation

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::unserialize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L152)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $data _The serialized string._
* bool or array $allowed_classes = false 
* positive-int $max_depth = 4096 _[optional] 
The maximum depth of structures permitted during unserialization, and is intended to prevent stack overflows._

<h2><a name="jsonencode()"># jsonEncode()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::jsonEncode(mixed $value, \FireHub\TheCore\Support\Enums\Json\Encode ...$flags):string|false
```

### ### Returns JSON representation of a value

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::jsonEncode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L183)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Json\Encode](/thecore/v0.2\FireHub\TheCore\Support\Enums\Json\Encode) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\Arr::walk()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#walk()) _To replace array value from json encode enum with enum values._
* [\FireHub\TheCore\Support\LowLevel\Arr::unique()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#unique()) _To remove duplicated enum values._

### Parameters:

* mixed $value _The value being encoded._
* variadic [\FireHub\TheCore\Support\Enums\Json\Encode](/thecore/v0.2\FireHub\TheCore\Support\Enums\Json\Encode) $flags _[optional] 
Bitmask consisting of JSON encode flags._

### Returns:

* string or false _JSON encoded string on success or false on failure._

<h2><a name="jsondecode()"># jsonDecode()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Data::jsonDecode(string $json, positive-int $max_depth = 512, \FireHub\TheCore\Support\Enums\Json\Decode ...$flags):mixed
```

### ### Decodes JSON string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Data::jsonDecode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Data.php#L216)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Json\Decode](/thecore/v0.2\FireHub\TheCore\Support\Enums\Json\Decode) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\Arr::walk()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#walk()) _To replace array value from json encode enum with enum values._
* [\FireHub\TheCore\Support\LowLevel\Arr::unique()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#unique()) _To remove duplicated enum values._

### Parameters:

* string $json _The json string being decoded._
* positive-int $max_depth = 512 _[optional] 
User specified recursion depth._
* variadic [\FireHub\TheCore\Support\Enums\Json\Decode](/thecore/v0.2\FireHub\TheCore\Support\Enums\Json\Decode) $flags _[optional] 
Bitmask consisting of JSON decode flags._

### Returns:

* mixed _Value encoded in json in appropriate PHP type._


