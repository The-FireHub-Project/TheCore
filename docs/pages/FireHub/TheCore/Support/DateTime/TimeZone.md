---
layout: default
title: TimeZone
parent: \FireHub\Support\Calendar
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# TimeZone

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\DateTime\TimeZone()
```

### ### TimeZone support class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\DateTime\TimeZone**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L29)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/datetime/firehub.TimeZone.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/datetime/firehub.TimeZone.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.0.pre-alpha.M2** 


## This class is used by
***

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As parameter.*

* *As return.*

* *As parameter.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|private [\DateTimeZone](/thecore/v0.2\DateTimeZone)|<a href="#$date_time_zone">date_time_zone</a>|### Base DateTimeZone object||
|readonly private [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone)|<a href="#$timezone">timezone</a>|||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#__construct()">__construct</a>|### Constructor|
|public |<a href="#name()">name</a>|### Name of the timezone|
|public |<a href="#offsetgmt()">offsetGMT</a>|### GMT offset for the timezone|
|public |<a href="#latitude()">latitude</a>|### Get timezone latitude|
|public |<a href="#longitude()">longitude</a>|### Get timezone longitude|
|public |<a href="#country()">country</a>|### Get country for timezone|
|public |<a href="#continent()">continent</a>|### Get continent for timezone|
|public static |<a href="#getdefaulttimezone()">getDefaultTimeZone</a>|### Gets default timezone|
|public static |<a href="#setdefaulttimezone()">setDefaultTimeZone</a>|### Sets default timezone|


# Properties
***


<h2><a name="$date_time_zone"># $date_time_zone</a></h2>
***

```php
private \DateTimeZone \FireHub\TheCore\Support\DateTime\TimeZone::$date_time_zone
```

### ### Base DateTimeZone object

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::$date_time_zone**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L37)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

<h2><a name="$timezone"># $timezone</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private \FireHub\TheCore\Support\Enums\DateTime\TimeZone \FireHub\TheCore\Support\DateTime\TimeZone::$timezone
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::$timezone**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L51)**</sub><br>




# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::__construct(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $timezone)
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L51)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _As parametar._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) $timezone _TimeZone enum._

### Throws:

* [\Error](/thecore/v0.2\Error) _If $timezone is not in valid._

<h2><a name="name()"># name()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::name():string
```

### ### Name of the timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::name()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L71)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### Returns:

* string _Timezone name._

<h2><a name="offsetgmt()"># offsetGMT()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::offsetGMT():int
```

### ### GMT offset for the timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::offsetGMT()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L87)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _To get GMT timezone._

### Throws:

* [\Error](/thecore/v0.2\Error) _If error happened while calculating GMT offset._

### Returns:

* int _Time zone offset in seconds between selected timezone and Greenwich Mean Time._

<h2><a name="latitude()"># latitude()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::latitude():float
```

### ### Get timezone latitude

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::latitude()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L111)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get timezone latitude._

### Returns:

* float _Timezone latitude._

<h2><a name="longitude()"># longitude()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::longitude():float
```

### ### Get timezone longitude

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::longitude()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L125)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get timezone longitude._

### Returns:

* float _Timezone longitude._

<h2><a name="country()"># country()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::country():\FireHub\TheCore\Support\Enums\Geo\Country
```

### ### Get country for timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::country()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L141)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Geo\Country](/thecore/v0.2\FireHub\TheCore\Support\Enums\Geo\Country) _As return._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get timezone country._

### Returns:

* [\FireHub\TheCore\Support\Enums\Geo\Country](/thecore/v0.2\FireHub\TheCore\Support\Enums\Geo\Country) _Country enum for timezone._

<h2><a name="continent()"># continent()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\TimeZone::continent():\FireHub\TheCore\Support\Enums\Geo\Continent
```

### ### Get continent for timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::continent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L159)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Geo\Continent](/thecore/v0.2\FireHub\TheCore\Support\Enums\Geo\Continent) _As return._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get timezone country._

### Returns:

* [\FireHub\TheCore\Support\Enums\Geo\Continent](/thecore/v0.2\FireHub\TheCore\Support\Enums\Geo\Continent) _Continent enum for country timezone._

<h2><a name="getdefaulttimezone()"># getDefaultTimeZone()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone():\FireHub\TheCore\Support\Enums\DateTime\TimeZone
```

### ### Gets default timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L176)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _As return._
* [\FireHub\TheCore\Support\LowLevel\TimeZone::getDefaultTimezone()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\TimeZone#getdefaulttimezone()) _To get default timezone._

### This method is used by:

* *To get default timezone.*

* *To get current timezone.*


### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get default timezone._

### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _Current timezone._

<h2><a name="setdefaulttimezone()"># setDefaultTimeZone()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\TimeZone::setDefaultTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets default timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::setDefaultTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L197)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\TimeZone::setDefaultTimezone()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\TimeZone#setdefaulttimezone()) _To set default timezone._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) $time_zone _TimeZone enum._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not set default timezone._

### Returns:

* bool _True if success, false otherwise._


