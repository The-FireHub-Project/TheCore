---
layout: default
title: Time
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Time

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Time()
```

### ### Time low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Time**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Time.php#L35)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.Time.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.Time.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
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
|public static |<a href="#timestamp()">timestamp</a>|### Get current Unix timestamp|
|public static |<a href="#microtime()">microtime</a>|### Get current Unix microseconds|


# Methods
***


<h2><a name="timestamp()"># timestamp()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Time::timestamp():int
```

### ### Get current Unix timestamp

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Time::timestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Time.php#L43)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Returns:

* int _Current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)._

<h2><a name="microtime()"># microtime()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Time::microtime():int|false
```

### ### Get current Unix microseconds

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Time::microtime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Time.php#L60)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\StrSB::explode()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#explode()) _To split microtime function._
* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To set microtime to other type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set microtime as integer._
* [\FireHub\TheCore\Support\LowLevel\StrSB::part()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#part()) _To get part of microtime._

### Returns:

* int or false _Current microseconds, false otherwise._


