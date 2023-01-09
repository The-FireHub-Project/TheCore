---
layout: default
title: Calculatable
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Calculatable

```php
interface \FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable
```

### ### Interface for calculatable unit enums

<sub>Fully Qualified Interface Name:  **\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable**</sub><br>
<sub>This interface is part of package:  **\FireHub\Support**</sub><br>
<sub>Extends interface:  **[\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit)**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/unit/firehub.Calculatable.php#L22)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/datetime/unit/firehub.Calculatable.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/datetime/unit/firehub.Calculatable.php)**</sub><br>

<sub>_This interface was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.1.pre-alpha.M2** 


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#parent()">parent</a>|### Get parent enum case|
|public |<a href="#calculate()">calculate</a>|### Calculate number of units|
|inherited public |<a href="#singlar()">singlar</a>|### Singular of enum case|
|inherited public |<a href="#plural()">plural</a>|### Plural of enum case|


# Methods
***


<h2><a name="singlar()"># singlar()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit::singlar():string
```

### ### Singular of enum case

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit::singlar()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/unit/firehub.Unit.php#L31)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Returns:

* string _Singular._

<h2><a name="plural()"># plural()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit::plural():string
```

### ### Plural of enum case

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit::plural()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/unit/firehub.Unit.php#L39)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Returns:

* string _Plural._

<h2><a name="parent()"># parent()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::parent():\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic
```

### ### Get parent enum case

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::parent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/unit/firehub.Calculatable.php#L30)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic) _Parent enum case._

<h2><a name="calculate()"># calculate()</a></h2>
***

```php
public \FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::calculate():positive-int
```

### ### Calculate number of units

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::calculate()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/unit/firehub.Calculatable.php#L38)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Returns:

* positive-int _Number of units._


