---
layout: default
title: Collection
parent: \FireHub\Support\Calendar
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Collection

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\Collections\Collection()
```

### ### ### Data collection

_Collection is a wrapper for working with lists of data._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Collections\Collection**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L31)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/collections/firehub.Collection.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/collections/firehub.Collection.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.2.pre-alpha.M2** 


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|private |<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#create()">create</a>|### Array collection type|
|public static |<a href="#lazy()">lazy</a>|### Lazy collection type|


# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
private \FireHub\TheCore\Support\Collections\Collection::__construct()
```

### ### Constructor

_Prevents instantiation of main collection class_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Collection::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L39)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

<h2><a name="create()"># create()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Collections\Collection::create(\Closure|null $callable = null):\FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Array collection type

_Array Collection type is collection that has main focus of performance
and doesn&amp;#039;t concern itself about memory consumption.
This collection can hold any type of data._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Collection::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L59)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Collections\Type](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type) _As return._
* [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _As default return._
* [\FireHub\TheCore\Support\Collections\Storage\Eager](/thecore/v0.2\FireHub\TheCore\Support\Collections\Storage\Eager) _As type of storage._

### Parameters:

* [\Closure](/thecore/v0.2\Closure) or null $callable = null _[optional] 
Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type) or [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _Array collection._

<h2><a name="lazy()"># lazy()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Collections\Collection::lazy(\Closure|null $callable = null):\FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Lazy collection type

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Collection::lazy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L82)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Collections\Type](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type) _As return._
* [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _As default return._
* [\FireHub\TheCore\Support\Collections\Storage\Lazy](/thecore/v0.2\FireHub\TheCore\Support\Collections\Storage\Lazy) _As type of storage.

Lazy Collection allow you to work with very large datasets
while keeping memory usage low._

### Parameters:

* [\Closure](/thecore/v0.2\Closure) or null $callable = null _[optional] 
Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type) or [\FireHub\TheCore\Support\Collections\Type\Basic](/thecore/v0.2\FireHub\TheCore\Support\Collections\Type\Basic) _Lazy collection._


