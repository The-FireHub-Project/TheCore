---
layout: default
title: Type
parent: \FireHub\Support\Calendar
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Type

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\Collections\Type()
```

### ### Collection type

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Collections\Type**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L26)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/collections/firehub.Type.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/collections/firehub.Type.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.2.pre-alpha.M2** 


## This class is used by
***

* *As return.*

* *As return.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|readonly private string|<a href="#$storage">storage</a>|||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#__construct()">__construct</a>|### Constructor|
|public |<a href="#basic()">basic</a>|### Basic array collection type|
|public |<a href="#associative()">associative</a>|### Associative array collection type|


# Properties
***


<h2><a name="$storage"># $storage</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private string \FireHub\TheCore\Support\Collections\Type::$storage
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\Collections\Type::$storage**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L37)**</sub><br>




# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
public \FireHub\TheCore\Support\Collections\Type::__construct(class-string $storage)
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L36)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### Parameters:

* class-string $storage _Storage for collection to use._

<h2><a name="basic()"># basic()</a></h2>
***

```php
public \FireHub\TheCore\Support\Collections\Type::basic(\Closure $callable):\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Basic array collection type

_Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1)._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::basic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L54)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _As return._

### Parameters:

* [\Closure](/thecore/v0.2\Closure) $callable _Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _Basic collection._

<h2><a name="associative()"># associative()</a></h2>
***

```php
public \FireHub\TheCore\Support\Collections\Type::associative(\Closure $callable):\FireHub\TheCore\Support\Collections\Type\Associative
```

### ### Associative array collection type

_Collections that use named keys that you assign to them._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::associative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L74)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Collections\Type\Associative](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Associative) _As return._

### Parameters:

* [\Closure](/thecore/v0.2\Closure) $callable _Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type\Associative](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Associative) _Associative collection._


