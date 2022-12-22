---
layout: default
title: Calendar
parent: \FireHub\Support\Calendar
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Calendar

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\DateTime\Calendar()
```

### ### Calendar support class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\DateTime\Calendar**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L42)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/datetime/firehub.Calendar.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/datetime/firehub.Calendar.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.0.pre-alpha.M2** 
* **0.2.1.pre-alpha.M2** _Added add, sub, diffrence and fromFormat methods, constructor market as private and added separate method Create._


## This class is used by
***

* *As parameter.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|readonly private [\DateTime](/thecore/v0.2\DateTime)|<a href="#$date_time">date_time</a>|### Base DateTime object||
|private [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone)|<a href="#$time_zone">time_zone</a>|||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|private |<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#create()">create</a>|### Set calendar to current date and time|
|public static |<a href="#now()">now</a>|### Set calendar to current date and time|
|public static |<a href="#today()">today</a>|### Set calendar to current date|
|public static |<a href="#yesterday()">yesterday</a>|### Set calendar to yesterday date|
|public static |<a href="#relative()">relative</a>|### Set relative time and date|
|public static |<a href="#firstday()">firstDay</a>|### Set calendar to first day of specified month|
|public static |<a href="#lastday()">lastDay</a>|### Set datetime to last day of specified month|
|public static |<a href="#weekday()">weekDay</a>|### Set datetime by ordinal day of specified weekday name and month|
|public static |<a href="#fromformat()">fromFormat</a>|### Parses a time string according to a specified format|
|public static |<a href="#fromtimestamp()">fromTimestamp</a>|### Set datetime from timestamp|
|public |<a href="#totimestamp()">toTimestamp</a>|### Gets timestamp from datetime|
|public |<a href="#format()">format</a>|### Formats datetime according to given format|
|public |<a href="#year()">year</a>|### Get year|
|public |<a href="#leapyear()">leapYear</a>|### Whether it's a leap year|
|public |<a href="#monthname()">monthName</a>|### Get month name|
|public |<a href="#month()">month</a>|### Get month number|
|public |<a href="#monthdays()">monthDays</a>|### Get number of days in the given month|
|public |<a href="#dayinyear()">dayinYear</a>|### The day of the year|
|public |<a href="#dayinmonth()">dayInMonth</a>|### The day of the month|
|public |<a href="#dayinweek()">dayInWeek</a>|### The day of the week, starting from Sunday with value 0|
|public |<a href="#daynameinweek()">dayNameInWeek</a>|### The day name of the week|
|public |<a href="#weekinyear()">weekInYear</a>|### The week number of the year|
|public |<a href="#hourshort()">hourShort</a>|### 12 hour type of the time|
|public |<a href="#hourlong()">hourLong</a>|### 24 type hour of the time|
|public |<a href="#minute()">minute</a>|### Minute of the time|
|public |<a href="#second()">second</a>|### Second of the time|
|public |<a href="#milisecond()">miliSecond</a>|### Milisecond of the time|
|public |<a href="#microsecond()">microSecond</a>|### Microsecond of the time|
|public |<a href="#timezonedaylightsavingtime()">timeZoneDaylightSavingTime</a>|### Daylight saving time|
|public |<a href="#timezonegmtdiff()">timeZoneGMTdiff</a>|### Difference to Greenwich time (GMT) without colon between hours and minutes|
|public |<a href="#timezoneabbreviation()">timeZoneAbbreviation</a>|### Timezone abbreviation if known; otherwise the GMT offset|
|public |<a href="#timezoneoffset()">timeZoneOffset</a>|### Timezone offset in seconds|
|public |<a href="#setdate()">setDate</a>|### Sets the date|
|public |<a href="#settime()">setTime</a>|### Sets the time|
|public |<a href="#timezone()">timeZone</a>|### Gets current timezone object|
|public |<a href="#changetimezone()">changeTimeZone</a>|### Sets timezone|
|public |<a href="#add()">add</a>|### Add interval to datetime|
|public |<a href="#sub()">sub</a>|### Calculate interval to datetime|
|public |<a href="#diffrence()">diffrence</a>|### Difference between two Calendars|


# Properties
***


<h2><a name="$date_time"># $date_time</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private \DateTime \FireHub\TheCore\Support\DateTime\Calendar::$date_time
```

### ### Base DateTime object

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Calendar::$date_time**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L50)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

<h2><a name="$time_zone"># $time_zone</a></h2>
***

```php
private \FireHub\TheCore\Support\DateTime\TimeZone \FireHub\TheCore\Support\DateTime\Calendar::$time_zone
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Calendar::$time_zone**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L52)**</sub><br>




# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
private \FireHub\TheCore\Support\DateTime\Calendar::__construct(string $datetime = 'now', \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null)
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L75)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 
* **0.2.1.pre-alpha.M2** _Marked as private._

### This method uses:

* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone#getdefaulttimezone()) _To get default timezone._

### Parameters:

* string $datetime = 'now' _[optional] 
A date/time string._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Throws:

* [\Error](/thecore/v0.2\Error) _If $datetime is not in valid format._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To see valid date/time formats._

<h2><a name="create()"># create()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::create(string $datetime, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date and time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L108)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._

### Parameters:

* string $datetime _A date/time string._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To see valid date/time formats._

<h2><a name="now()"># now()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::now(\FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date and time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::now()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L128)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#now) _To get current date and time._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="today()"># today()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::today(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::today()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L153)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\DayName::TODAY](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\DayName#today) _To get current date._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="yesterday()"># yesterday()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::yesterday(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to yesterday date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::yesterday()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L178)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\DayName::YESTERDAY](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\DayName#yesterday) _To get yesterday's date._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="relative()"># relative()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::relative(int $number, \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit $unit, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::NOW, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set relative time and date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::relative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L209)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::NOW](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#now) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* int $number _Number, positive or negative._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit) $unit _Unit to use._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::NOW _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="firstday()"># firstDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::firstDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to first day of specified month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::firstDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L242)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal::FIRST](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal#first) _To get first day of the first of the selected month._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#dateinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="lastday()"># lastDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::lastDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set datetime to last day of specified month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::lastDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L275)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\MonthAs](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\MonthAs) _parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal::LAST](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal#last) _To get last day of the first of the selected month._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#dateinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="weekday()"># weekDay()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::weekDay(\FireHub\TheCore\Support\Enums\DateTime\Ordinal $ordinal, \FireHub\TheCore\Support\Enums\DateTime\WeekDay $weekday, \FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set datetime by ordinal day of specified weekday name and month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::weekDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L314)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\WeekDay) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) _As parametar._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName::MIDNIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName#midnight) _As default parametar._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._
* [\FireHub\TheCore\Support\LowLevel\DateAndTime::dateInteger()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#dateinteger()) _To get current month as integer._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $at is a string._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Ordinal) $ordinal _Sets ordinal value for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\WeekDay) $weekday _Sets weekday name for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="fromformat()"># fromFormat()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::fromFormat(string $format, string $datetime, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Parses a time string according to a specified format

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::fromFormat()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L341)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Parameters:

* string $format _The format that the passed in string should be in._
* string $datetime _String representing the datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system cannot create Calendar from format._

### Returns:

* self _New calendar._

### See also:

* [https://www.php.net/manual/en/datetimeimmutable.createfromformat.php](https://www.php.net/manual/en/datetimeimmutable.createfromformat.php) _To see valid $datetime formats._

<h2><a name="fromtimestamp()"># fromTimestamp()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Calendar::fromTimestamp(int $timestamp):self
```

### ### Set datetime from timestamp

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::fromTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L365)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\DateAndTime::date()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DateAndTime#date()) _To format date and time from timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATETIME](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined#datetime) _As datetime format._

### Parameters:

* int $timestamp _Unix timestamp representing the date._

### Returns:

* self _New calendar._

<h2><a name="totimestamp()"># toTimestamp()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::toTimestamp():int
```

### ### Gets timestamp from datetime

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::toTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L377)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### Returns:

* int _Unix timestamp representing the date._

<h2><a name="format()"># format()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::format(\FireHub\TheCore\Support\Enums\DateTime\Format\Format|string $format = PredefinedFormat::DATE_MICRO_TIME):string
```

### ### Formats datetime according to given format

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::format()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L401)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\DateTime\Format\Format](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Format) _As parameter._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined#date_micro_time) _As default parameter._
* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if $format is a string._

### This method is used by:

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*

* *To format datetime according to given format.*


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Format\Format](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Format) or string $format = PredefinedFormat::DATE_MICRO_TIME _[optional] 
Format enum or string accepted by date()._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not set timezone._

### Returns:

* string _Formated datetime._

### See also:

* [https://www.php.net/manual/en/datetime.format.php](https://www.php.net/manual/en/datetime.format.php) _To view valied $format options._

<h2><a name="year()"># year()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::year(bool $short = false):int
```

### ### Get year

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::year()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L422)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Year::LONG](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Year#long) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current year.*

* *To get current year.*

* *To get current year.*

* *To get current year.*


### Parameters:

* bool $short = false _[optional] 
If true, two digit representation of a year will be returned._

### Returns:

* int _Year._

<h2><a name="leapyear()"># leapYear()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::leapYear():bool
```

### ### Whether it's a leap year

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::leapYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L439)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Year::LEAP](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Year#leap) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_BOOL](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_bool) _To set type as booliean._

### Returns:

* bool _True if is leap year, false otherwise._

<h2><a name="monthname()"># monthName()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::monthName(bool $short = false):string
```

### ### Get month name

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::monthName()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L459)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_SHORT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Month#textual_short) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_LONG](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Month#textual_long) _As format type._

### Parameters:

* bool $short = false _[optional] 
If true, three letters of a month will be returned._

### Returns:

* string _Month name._

<h2><a name="month()"># month()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::month(bool $short = false)
```

### ### Get month number

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::month()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L481)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_SHORT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Month#numeric_short) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_LONG](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Month#numeric_long) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current month.*

* *To get current month.*

* *To get current month.*

* *To get current month.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of a month will be returned._

<h2><a name="monthdays()"># monthDays()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::monthDays():int
```

### ### Get number of days in the given month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::monthDays()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L498)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMBER_OF_DAYS](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\Month#number_of_days) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Returns:

* int _Number of days in the given month._

<h2><a name="dayinyear()"># dayinYear()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::dayinYear():int
```

### ### The day of the year

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayinYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L515)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMBER](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#number) _aS format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Returns:

* int _Number of days in the given month._

<h2><a name="dayinmonth()"># dayInMonth()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::dayInMonth(bool $short = false, bool $suffix = false)
```

### ### The day of the month

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L541)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_SHORT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#numeric_in_month_short) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_LONG](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#numeric_in_month_long) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::SUFFIX](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#suffix) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current day in month.*

* *To get current day in month.*

* *To get current day in month.*

* *To get current day in month.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of a day in month will be returned._
* bool $suffix = false _[optional] 
If true, English ordinal suffix for the day of the month will be added._

<h2><a name="dayinweek()"># dayInWeek()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::dayInWeek(bool $iso8601 = false):int
```

### ### The day of the week, starting from Sunday with value 0

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayInWeek()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L571)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_WEEK_ISO_8601](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#numeric_in_week_iso_8601) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_WEEK](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#numeric_in_week) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Parameters:

* bool $iso8601 = false _[optional] 
If true, Monday will be the first day of the week, with value 1._

### Returns:

* int _Day in week._

<h2><a name="daynameinweek()"># dayNameInWeek()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::dayNameInWeek(bool $short = false):string
```

### ### The day name of the week

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayNameInWeek()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L591)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::TEXTUAL_IN_WEEK_SHORT](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#textual_in_week_short) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat::TEXTUAL_IN_WEEK_LONG](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\DayFormat#textual_in_week_long) _As format type._

### Parameters:

* bool $short = false _[optional] 
If true, three digit representation of a day in week will be returned._

### Returns:

* string _Dayname in week._

<h2><a name="weekinyear()"># weekInYear()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::weekInYear():int
```

### ### The week number of the year

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::weekInYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L608)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\WeekFormat::NUMBER](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\WeekFormat#number) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Returns:

* int _Week number of the year._

<h2><a name="hourshort()"># hourShort()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::hourShort(bool $short = false, bool $meridiem = false)
```

### ### 12 hour type of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::hourShort()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L634)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_SHORT_12](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#hour_short_12) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_LONG_12](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#hour_long_12) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MERDIEM_LC](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#merdiem_lc) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of an hour in month will be returned._
* bool $meridiem = false _[optional] 
If true, Ante meridiem and Post meridiem suffix for the hour will be added._

<h2><a name="hourlong()"># hourLong()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::hourLong(bool $short = false)
```

### ### 24 type hour of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::hourLong()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L664)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_SHORT_24](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#hour_short_24) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::HOUR_LONG_24](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#hour_long_24) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current hour.*

* *To get current hour.*

* *To get current hour.*

* *To get current hour.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of an hour in the day will be returned._

<h2><a name="minute()"># minute()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::minute(bool $short = false)
```

### ### Minute of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::minute()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L685)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MINUTES](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#minutes) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current minute.*

* *To get current minute.*

* *To get current minute.*

* *To get current minute.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the minute in hour will be returned._

<h2><a name="second()"># second()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::second(bool $short = false)
```

### ### Second of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::second()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L706)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::SECONDS](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#seconds) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current second.*

* *To get current second.*

* *To get current second.*

* *To get current second.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the second in minute will be returned._

<h2><a name="milisecond()"># miliSecond()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::miliSecond(bool $short = false)
```

### ### Milisecond of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::miliSecond()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L727)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MILISECONDS](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#miliseconds) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the milisecond in second will be returned._

<h2><a name="microsecond()"># microSecond()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::microSecond(bool $short = false)
```

### ### Microsecond of the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::microSecond()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L748)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat::MICROSECONDS](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeFormat#microseconds) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as integer._

### This method is used by:

* *To get current micro second.*

* *To get current microsecond.*

* *To get current microsecond.*

* *To get current microsecond.*


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the microsecond in second will be returned._

<h2><a name="timezonedaylightsavingtime()"># timeZoneDaylightSavingTime()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::timeZoneDaylightSavingTime():bool
```

### ### Daylight saving time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneDaylightSavingTime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L765)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::DAYLIGHT_SAVING_TIME](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone#daylight_saving_time) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_BOOL](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_bool) _To set type as boolian._

### Returns:

* bool _Whether the date is in daylight saving time._

<h2><a name="timezonegmtdiff()"># timeZoneGMTdiff()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::timeZoneGMTdiff(bool $colon = false):string
```

### ### Difference to Greenwich time (GMT) without colon between hours and minutes

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneGMTdiff()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L785)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF_COLON](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone#gmt_diff_colon) _As format type._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone#gmt_diff) _As format type._

### Parameters:

* bool $colon = false _[optional] 
If true, return diffrence will be with colon between hours and minutes._

### Returns:

* string _GMT difference._

<h2><a name="timezoneabbreviation()"># timeZoneAbbreviation()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::timeZoneAbbreviation():string
```

### ### Timezone abbreviation if known; otherwise the GMT offset

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneAbbreviation()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L800)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::ABBREVIATION](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone#abbreviation) _As format type._

### Returns:

* string _Timezone abbreviation or GMT offset._

<h2><a name="timezoneoffset()"># timeZoneOffset()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::timeZoneOffset():int
```

### ### Timezone offset in seconds

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneOffset()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L817)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Data::setType()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Data#settype()) _To change type._
* [\FireHub\TheCore\Support\DateTime\Calendar::format()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#format()) _To format datetime according to given format._
* [\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::OFFSET](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone#offset) _As format type._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To set type as boolian._

### Returns:

* int _Timezone offset in seconds._

<h2><a name="setdate()"># setDate()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::setDate(int|null $year = null, int|null $month = null, int|null $day = null):$this
```

### ### Sets the date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::setDate()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L843)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::year()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#year()) _To get current year._
* [\FireHub\TheCore\Support\DateTime\Calendar::month()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#month()) _To get current month._
* [\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#dayinmonth()) _To get current day in month._

### This method is used by:

* *To se date.*

* *To se date.*


### Parameters:

* int or null $year = null _[optional] 
Year of the date._
* int or null $month = null _[optional] 
Year of the date._
* int or null $day = null _[optional] 
Year of the date._

### Returns:

* $this _This object._

<h2><a name="settime()"># setTime()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::setTime(int|null $hour = null, int|null $minute = null, int|null $second = null, int|null $micro_second = null):$this
```

### ### Sets the time

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::setTime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L875)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar::hourLong()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#hourlong()) _To get current hour._
* [\FireHub\TheCore\Support\DateTime\Calendar::minute()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#minute()) _To get current minute._
* [\FireHub\TheCore\Support\DateTime\Calendar::second()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#second()) _To get current second._
* [\FireHub\TheCore\Support\DateTime\Calendar::microSecond()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#microsecond()) _To get current micro second._

### This method is used by:

* *To set time.*

* *To set time.*


### Parameters:

* int or null $hour = null _[optional] 
Hour of the time._
* int or null $minute = null _[optional] 
Minute of the time._
* int or null $second = null _[optional] 
Second of the time._
* int or null $micro_second = null _[optional] 
Micro second of the time._

### Returns:

* $this _This object._

<h2><a name="timezone()"># timeZone()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::timeZone():\FireHub\TheCore\Support\DateTime\TimeZone
```

### ### Gets current timezone object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L894)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone#getdefaulttimezone()) _To get current timezone._
* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As return._

### Throws:

* [\Error](/thecore/v0.2\Error) _If system could not get current timezone._

### Returns:

* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _Current timezone object._

<h2><a name="changetimezone()"># changeTimeZone()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::changeTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets timezone

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::changeTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L914)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\DateTime\TimeZone) _As parameter._

### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\TimeZone) $time_zone _TimeZone enum representing the timezone of $datetime._

### Throws:

* [\Error](/thecore/v0.2\Error) _If there was error setting timezone._

### Returns:

* bool _True if timezone was set._

<h2><a name="add()"># add()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::add(\FireHub\TheCore\Support\DateTime\Interval $interval):$this
```

### ### Add interval to datetime

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::add()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L959)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) _As parameter._
* [\FireHub\TheCore\Support\DateTime\Calendar::setDate()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#setdate()) _To se date._
* [\FireHub\TheCore\Support\DateTime\Calendar::setTime()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#settime()) _To set time._
* [\FireHub\TheCore\Support\DateTime\Calendar::year()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#year()) _To get current year._
* [\FireHub\TheCore\Support\DateTime\Calendar::month()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#month()) _To get current month._
* [\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#dayinmonth()) _To get current day in month._
* [\FireHub\TheCore\Support\DateTime\Calendar::hourLong()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#hourlong()) _To get current hour._
* [\FireHub\TheCore\Support\DateTime\Calendar::minute()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#minute()) _To get current minute._
* [\FireHub\TheCore\Support\DateTime\Calendar::second()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#second()) _To get current second._
* [\FireHub\TheCore\Support\DateTime\Calendar::microSecond()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#microsecond()) _To get current microsecond._
* [\FireHub\TheCore\Support\DateTime\Interval::getYears()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getyears()) _As get years from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMonths()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getmonths()) _As get months from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getDays()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getdays()) _As get days from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getHours()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#gethours()) _As get hours from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMinutes()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getminutes()) _As get minutes from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getseconds()) _As get seconds from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getmicroseconds()) _As get from Interval._

### Parameters:

* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) $interval _$time_zone 
Datetime interval._

### Returns:

* $this _This object._

<h2><a name="sub()"># sub()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::sub(\FireHub\TheCore\Support\DateTime\Interval $interval):$this
```

### ### Calculate interval to datetime

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::sub()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L1005)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) _As parameter._
* [\FireHub\TheCore\Support\DateTime\Calendar::setDate()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#setdate()) _To se date._
* [\FireHub\TheCore\Support\DateTime\Calendar::setTime()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#settime()) _To set time._
* [\FireHub\TheCore\Support\DateTime\Calendar::year()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#year()) _To get current year._
* [\FireHub\TheCore\Support\DateTime\Calendar::month()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#month()) _To get current month._
* [\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#dayinmonth()) _To get current day in month._
* [\FireHub\TheCore\Support\DateTime\Calendar::hourLong()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#hourlong()) _To get current hour._
* [\FireHub\TheCore\Support\DateTime\Calendar::minute()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#minute()) _To get current minute._
* [\FireHub\TheCore\Support\DateTime\Calendar::second()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#second()) _To get current second._
* [\FireHub\TheCore\Support\DateTime\Calendar::microSecond()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#microsecond()) _To get current microsecond._
* [\FireHub\TheCore\Support\DateTime\Interval::getYears()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getyears()) _As get years from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMonths()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getmonths()) _As get months from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getDays()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getdays()) _As get days from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getHours()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#gethours()) _As get hours from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMinutes()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getminutes()) _As get minutes from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getseconds()) _As get seconds from Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#getmicroseconds()) _As get from Interval._

### Parameters:

* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) $interval _$time_zone 
Datetime interval._

### Returns:

* $this _This object._

<h2><a name="diffrence()"># diffrence()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Calendar::diffrence(\FireHub\TheCore\Support\DateTime\Calendar $date):\FireHub\TheCore\Support\DateTime\Interval
```

### ### Difference between two Calendars

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::diffrence()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L1050)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\DateTime\Calendar](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar) _As parameter._
* [\FireHub\TheCore\Support\DateTime\Calendar::year()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#year()) _To get current year._
* [\FireHub\TheCore\Support\DateTime\Calendar::month()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#month()) _To get current month._
* [\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#dayinmonth()) _To get current day in month._
* [\FireHub\TheCore\Support\DateTime\Calendar::hourLong()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#hourlong()) _To get current hour._
* [\FireHub\TheCore\Support\DateTime\Calendar::minute()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#minute()) _To get current minute._
* [\FireHub\TheCore\Support\DateTime\Calendar::second()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#second()) _To get current second._
* [\FireHub\TheCore\Support\DateTime\Calendar::microSecond()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar#microsecond()) _To get current microsecond._
* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) _As return._
* [\FireHub\TheCore\Support\DateTime\Interval::years()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#years()) _As add years to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addMonths()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#addmonths()) _As add months to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addDays()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#adddays()) _As add days to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addHours()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#addhours()) _As add hours to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addMinutes()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#addminutes()) _As add minutes to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#addseconds()) _As add seconds to Interval._
* [\FireHub\TheCore\Support\DateTime\Interval::addMicroSeconds()](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval#addmicroseconds()) _As add microseconds to Interval._

### Parameters:

* [\FireHub\TheCore\Support\DateTime\Calendar](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Calendar) $date _Datetime interval._

### Returns:

* [\FireHub\TheCore\Support\DateTime\Interval](/thecore/v0.2\FireHub\TheCore\Support\DateTime\Interval) _Interval diffrence between two Calendars._


