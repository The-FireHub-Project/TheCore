---
layout: default
title: Type
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Type

```php
enum \FireHub\TheCore\Support\Enums\Data\Type
```

### ### Data type enum

_DataType enum defines the type of data a variable can store._

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\Data\Type**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L25)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/data/firehub.Type.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/data/firehub.Type.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## This enum is used by
***

* *As return.*

* *As parameter.*


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#t_bool">T_BOOL</a>|### A bool expresses a truth value, it can be either true or false|&#039;boolean&#039;|
|<a href="#t_int">T_INT</a>|### An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}|&#039;integer&#039;|
|<a href="#t_float">T_FLOAT</a>|### A floating-point number is represented approximately with a fixed number of significant digits|&#039;double&#039;|
|<a href="#t_string">T_STRING</a>|### A string is series of characters, where a character is the same as a byte|&#039;string&#039;|
|<a href="#t_array">T_ARRAY</a>|### An ordered map where map is a type that associates values to keys|&#039;array&#039;|
|<a href="#t_object">T_OBJECT</a>|### An object is an individual instance of the data structure defined by a class|&#039;object&#039;|
|<a href="#t_null">T_NULL</a>|### The special null value represents a variable with no value|&#039;NULL&#039;|
|<a href="#t_resource">T_RESOURCE</a>|### The special resoure type is used to store references to some function call or to external PHP resources|&#039;resource&#039;|


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#type()">type</a>|### Get type of data type|
|public |<a href="#settable()">settable</a>|### Check if value can be set to data type|


# Cases
***


<h2><a name="t_bool"># T_BOOL</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_BOOL = 'boolean'
```

### ### A bool expresses a truth value, it can be either true or false

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_BOOL**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L31)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_int"># T_INT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_INT = 'integer'
```

### ### An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_INT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L37)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This case is used by:

* *To compare permissions value.*

* *To compare permissions value.*

* *To compare permissions value.*

* *To compare permissions value.*

* *To compare permissions value.*


<h2><a name="t_float"># T_FLOAT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_FLOAT = 'double'
```

### ### A floating-point number is represented approximately with a fixed number of significant digits

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_FLOAT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L43)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_string"># T_STRING</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_STRING = 'string'
```

### ### A string is series of characters, where a character is the same as a byte

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_STRING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L49)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_array"># T_ARRAY</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_ARRAY = 'array'
```

### ### An ordered map where map is a type that associates values to keys

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_ARRAY**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L55)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_object"># T_OBJECT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_OBJECT = 'object'
```

### ### An object is an individual instance of the data structure defined by a class

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_OBJECT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L61)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_null"># T_NULL</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_NULL = 'NULL'
```

### ### The special null value represents a variable with no value

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_NULL**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L67)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="t_resource"># T_RESOURCE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Data\Type::T_RESOURCE = 'resource'
```

### ### The special resoure type is used to store references to some function call or to external PHP resources

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Data\Type::T_RESOURCE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L73)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 


# Methods
***


<h2><a name="type()"># type()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\Data\Type::type():\FireHub\TheCore\Support\Enums\Data\TypeType
```

### ### Get type of data type

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\Data\Type::type()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L81)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Returns:

* [\FireHub\TheCore\Support\Enums\Data\TypeType](/core/v0.2\FireHub\TheCore\Support\Enums\Data\TypeType) _Type of data type._

<h2><a name="settable()"># settable()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\Data\Type::settable():bool
```

### ### Check if value can be set to data type

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\Data\Type::settable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/data/firehub.Type.php#L97)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Returns:

* bool _True if data type is settable, false otherwise._


