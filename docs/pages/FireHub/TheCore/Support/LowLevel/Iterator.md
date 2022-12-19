---
layout: default
title: Iterator
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Iterator

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Iterator()
```

### ### Iterator low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Iterator**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L38)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.Iterator.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.Iterator.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 
* **0.2.0.pre-alpha.M2** _Added $preserveKeys parameter to toArray method._


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#isiterator()">isIterator</a>|### Checks if value is iterator|
|public static |<a href="#isempty()">isEmpty</a>|### Checks if iterator is empty|
|public static |<a href="#count()">count</a>|### Count the elements in an iterator|
|public static |<a href="#toarray()">toArray</a>|### Copy the iterator into an array|
|public static |<a href="#apply()">apply</a>|### Call a function for every element in an iterator|


# Methods
***


<h2><a name="isiterator()"># isIterator()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Iterator::isIterator(mixed $value)
```

### ### Checks if value is iterator

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Iterator::isIterator()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L52)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\DataIs::iterable()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#iterable()) _To check if value is iterable._

### Parameters:

* mixed $value _Value to check._

<h2><a name="isempty()"># isEmpty()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Iterator::isEmpty(\Traversable<array-key,mixed> $iterator):bool
```

### ### Checks if iterator is empty

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Iterator::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L68)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* [\Traversable&lt;array-key,mixed&gt;](/thecore/v0.2\Traversable&lt;array-key,mixed&gt;) $iterator _Array to check._

### Returns:

* bool _True if array is empty, false otherwise._

<h2><a name="count()"># count()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Iterator::count(\Traversable<array-key,mixed> $iterator):positive-int|\FireHub\TheCore\Support\LowLevel\0
```

### ### Count the elements in an iterator

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Iterator::count()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L84)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* [\Traversable&lt;array-key,mixed&gt;](/thecore/v0.2\Traversable&lt;array-key,mixed&gt;) $iterator _The iterator being counted._

### Returns:

* positive-int or [\FireHub\TheCore\Support\LowLevel\0](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\0) _Number of elements in array._

<h2><a name="toarray()"># toArray()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Iterator::toArray(\Traversable<\FireHub\TheCore\Support\LowLevel\TKey,\FireHub\TheCore\Support\LowLevel\TValue> $iterator, bool $preserveKeys = true)
```

### ### Copy the iterator into an array

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Iterator::toArray()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L108)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 
* **0.2.0.pre-alpha.M2** _Added $preserveKeys parameter._

### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* [\Traversable&lt;\FireHub\TheCore\Support\LowLevel\TKey,\FireHub\TheCore\Support\LowLevel\TValue&gt;](/thecore/v0.2\Traversable&lt;\FireHub\TheCore\Support\LowLevel\TKey,\FireHub\TheCore\Support\LowLevel\TValue&gt;) $iterator _The iterator being copied._
* bool $preserveKeys = true _[optional] 
Whether to use the iterator element keys as index._

<h2><a name="apply()"># apply()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Iterator::apply(\Traversable<array-key,mixed> $iterator, callable $callback):int
```

### ### Call a function for every element in an iterator

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Iterator::apply()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Iterator.php#L128)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* [\Traversable&lt;array-key,mixed&gt;](/thecore/v0.2\Traversable&lt;array-key,mixed&gt;) $iterator _The class to iterate over._
* callable $callback _The callback function to call on every element.
The function must return true in order to continue iterating over the iterator._

### Returns:

* int _Iteration count._


