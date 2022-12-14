---
layout: default
title: DateAndTime
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# DateAndTime

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\DateAndTime()
```

### ### Date and time low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L37)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.DateAndTime.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.DateAndTime.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 
* **0.2.1.pre-alpha.M2** _Removed timezone methods, changed default $format in format method._


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#totimestamp()">toTimestamp</a>|### Parse about any English textual datetime description into a Unix timestamp|
|public static |<a href="#format()">format</a>|### Format a local time/date|
|public static |<a href="#formatinteger()">formatInteger</a>|### Format a local time/date as integer|
|public static |<a href="#suninfo()">sunInfo</a>|### Gets information about sunset/sunrise and twilight begin/end|


# Methods
***


<h2><a name="totimestamp()"># toTimestamp()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DateAndTime::toTimestamp(string $datetime):int|false
```

### ### Parse about any English textual datetime description into a Unix timestamp

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::toTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L54)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $datetime _A date/time string._

### Returns:

* int or false _Timestamp on success, false otherwise._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To check how to pass $datetime parameter._

<h2><a name="format()"># format()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DateAndTime::format(string $format = 'Y-m-d H:i:s.u', int|null $timestamp = null):string
```

### ### Format a local time/date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::format()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L77)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 
* **0.2.1.pre-alpha.M2** _Changed default $format._

### Parameters:

* string $format = 'Y-m-d H:i:s.u' _[optional] 
The format of the outputted date string._
* int or null $timestamp = null _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given._

### Returns:

* string _Formatted date string._

### See also:

* [https://www.php.net/manual/en/datetime.format.php](https://www.php.net/manual/en/datetime.format.php) _To check valid $format formats._

<h2><a name="formatinteger()"># formatInteger()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger(string $format, int|null $timestamp = null):int|false
```

### ### Format a local time/date as integer

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L98)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $format _Single format character._
* int or null $timestamp = null _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given._

### Returns:

* int or false _Formatted date as integer, false otherwise._

### See also:

* [https://www.php.net/manual/en/function.idate.php](https://www.php.net/manual/en/function.idate.php) 

<h2><a name="suninfo()"># sunInfo()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DateAndTime::sunInfo(int $timestamp, float $latitude, float $longitude)
```

### ### Gets information about sunset/sunrise and twilight begin/end

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::sunInfo()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L130)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* int $timestamp _Unix timestamp._
* float $latitude _Latitude in degrees._
* float $longitude _Longitude in degrees._


