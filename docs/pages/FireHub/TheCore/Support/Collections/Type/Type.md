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
> This is an **abstract** class that cannot be instantiated directly.


```php
abstract class \FireHub\TheCore\Support\Collections\Type\Type()
```

### ### Collection type

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Collections\Type\Type**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/type/firehub.Type.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/collections/type/firehub.Type.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/collections/type/firehub.Type.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.2.pre-alpha.M2** 


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|readonly private [\Closure](/thecore/v0.2\Closure)|<a href="#$callable">callable</a>|||
|readonly private string|<a href="#$storage">storage</a>|||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#__construct()">__construct</a>|### Constructor|


# Properties
***


<h2><a name="$callable"># $callable</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private \Closure \FireHub\TheCore\Support\Collections\Type\Type::$callable
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\Collections\Type\Type::$callable**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/type/firehub.Type.php#L37)**</sub><br>


<h2><a name="$storage"># $storage</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private string \FireHub\TheCore\Support\Collections\Type\Type::$storage
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\Collections\Type\Type::$storage**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/type/firehub.Type.php#L38)**</sub><br>




# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
public \FireHub\TheCore\Support\Collections\Type\Type::__construct(\Closure $callable, class-string $storage)
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type\Type::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/type/firehub.Type.php#L36)**</sub><br>

### Changelog:

* **0.2.2.pre-alpha.M2** 

### Parameters:

* [\Closure](/thecore/v0.2\Closure) $callable _Data from callable source._
* class-string $storage _Storage for collection to use._


