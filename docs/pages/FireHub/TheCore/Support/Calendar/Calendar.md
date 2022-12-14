---
layout: default
title: Calendar
parent: \FireHub\Support\Calendar
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Calendar

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\Calendar\Calendar()
```

### ### Calendar support class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Calendar\Calendar**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L31)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/calendar/firehub.Calendar.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/calendar/firehub.Calendar.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.1.pre-alpha.M2** 


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|private [\DateTime](/core/v0.2\DateTime)|<a href="#$datetime">dateTime</a>|### Base DateTime object||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#now()">now</a>|### Set calendar to current date and time|
|public static |<a href="#today()">today</a>|### Set calendar to current date|
|public static |<a href="#yesterday()">yesterday</a>|### Set calendar to yesterday date|
|public static |<a href="#relative()">relative</a>|### Set relative time and date|
|public static |<a href="#firstday()">firstDay</a>|### Set calendar to first day of specified month|
|public static |<a href="#lastday()">lastDay</a>|### Set datetime to last day of specified month|
|public static |<a href="#weekday()">weekDay</a>|### Set datetime by ordinal day of specified weekday name and month|
|public static |<a href="#fromtimestamp()">fromTimestamp</a>|### Set datetime to yesterday date|
|public |<a href="#gettimezone()">getTimeZone</a>|### Gets current timezone|
|public static |<a href="#settimezone()">setTimeZone</a>|### Sets current timezone|


# Properties
***


<h2><a name="$datetime"># $dateTime</a></h2>
***

```php
private \DateTime \FireHub\TheCore\Support\Calendar\Calendar::$dateTime
```

### ### Base DateTime object

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\Calendar\Calendar::$dateTime**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L39)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 



# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
public \FireHub\TheCore\Support\Calendar\Calendar::__construct(string $datetime = 'now')
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L53)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Parameters:

* string $datetime = 'now' _[optional] 
A date/time string._

### Throws:

* [\Error](/core/v0.2\Error) _If $datetime is not in valid format._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To see valid date/time formats._

<h2><a name="now()"># now()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::now():self
```

### ### Set calendar to current date and time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::now()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L75)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#now) _To get current date and time._

### Returns:

* self _New calendar._

<h2><a name="today()"># today()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::today(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to current date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::today()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L95)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\DayName::TODAY](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\DayName#today) _To get current date._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="yesterday()"># yesterday()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::yesterday(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to yesterday date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::yesterday()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L115)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\DayName::YESTERDAY](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\DayName#yesterday) _To get yesterday's date._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="relative()"># relative()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::relative(int $number, \FireHub\TheCore\Support\Enums\DateTime\Unit $unit, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::NOW):self
```

### ### Set relative time and date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::relative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L141)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\Unit](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#now) _As default parametar._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* int $number _Number, positive or negative._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit) $unit _Unit to use._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::NOW _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="firstday()"># firstDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::firstDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to first day of specified month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::firstDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L169)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal::FIRST](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal#first) _To get first day of the first of the selected month._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#formatinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="lastday()"># lastDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::lastDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set datetime to last day of specified month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::lastDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L197)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\MonthAs](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\MonthAs) _parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal::LAST](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal#last) _To get last day of the first of the selected month._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#formatinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="weekday()"># weekDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::weekDay(\FireHub\TheCore\Support\Enums\DateTime\Ordinal $ordinal, \FireHub\TheCore\Support\Enums\DateTime\WeekDay $weekday, \FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set datetime by ordinal day of specified weekday name and month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::weekDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L231)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\WeekDay) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#formatinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal) $ordinal _Sets ordinal value for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\WeekDay) $weekday _Sets weekday name for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="fromtimestamp()"># fromTimestamp()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::fromTimestamp(int $timestamp):self
```

### ### Set datetime to yesterday date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::fromTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L247)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Parameters:

* int $timestamp _Unix timestamp representing the date._

### Returns:

* self _New datetime._

<h2><a name="gettimezone()"># getTimeZone()</a></h2>
***

```php
public \FireHub\TheCore\Support\Calendar\Calendar::getTimeZone():\FireHub\TheCore\Support\Enums\DateTime\TimeZone
```

### ### Gets current timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::getTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L264)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _As return._
* [\FireHub\TheCore\Support\LowLevel\TimeZone::getDefaultTimezone()](/core/v0.2\FireHub\TheCore\Support\LowLevel\TimeZone#getdefaulttimezone()) _To get default timezone._

### Throws:

* [\Error](/core/v0.2\Error) _If system could not get current timezone._

### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _Current timezone._

<h2><a name="settimezone()"># setTimeZone()</a></h2>
***

```php
public static \FireHub\TheCore\Support\Calendar\Calendar::setTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets current timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::setTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/calendar/firehub.Calendar.php#L281)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\TimeZone::setDefaultTimezone()](/core/v0.2\FireHub\TheCore\Support\LowLevel\TimeZone#setdefaulttimezone()) _To set default timezone._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/core/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) $time_zone 

### Throws:

* [\Error](/core/v0.2\Error) _If system could not set timezone._

### Returns:

* bool _True if success, false otherwise._


