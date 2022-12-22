
```php
class \FireHub\TheCore\Support\DateTime\Calendar()
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



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#create()">create</a>|### Set calendar to current date and time|
|static |<a href="#now()">now</a>|### Set calendar to current date and time|
|static |<a href="#today()">today</a>|### Set calendar to current date|
|static |<a href="#yesterday()">yesterday</a>|### Set calendar to yesterday date|
|static |<a href="#relative()">relative</a>|### Set relative time and date|
|static |<a href="#firstday()">firstDay</a>|### Set calendar to first day of specified month|
|static |<a href="#lastday()">lastDay</a>|### Set datetime to last day of specified month|
|static |<a href="#weekday()">weekDay</a>|### Set datetime by ordinal day of specified weekday name and month|
|static |<a href="#fromformat()">fromFormat</a>|### Parses a time string according to a specified format|
|static |<a href="#fromtimestamp()">fromTimestamp</a>|### Set datetime from timestamp|
||<a href="#totimestamp()">toTimestamp</a>|### Gets timestamp from datetime|
||<a href="#format()">format</a>|### Formats datetime according to given format|
||<a href="#year()">year</a>|### Get year|
||<a href="#leapyear()">leapYear</a>|### Whether it's a leap year|
||<a href="#monthname()">monthName</a>|### Get month name|
||<a href="#month()">month</a>|### Get month number|
||<a href="#monthdays()">monthDays</a>|### Get number of days in the given month|
||<a href="#dayinyear()">dayinYear</a>|### The day of the year|
||<a href="#dayinmonth()">dayInMonth</a>|### The day of the month|
||<a href="#dayinweek()">dayInWeek</a>|### The day of the week, starting from Sunday with value 0|
||<a href="#daynameinweek()">dayNameInWeek</a>|### The day name of the week|
||<a href="#weekinyear()">weekInYear</a>|### The week number of the year|
||<a href="#hourshort()">hourShort</a>|### 12 hour type of the time|
||<a href="#hourlong()">hourLong</a>|### 24 type hour of the time|
||<a href="#minute()">minute</a>|### Minute of the time|
||<a href="#second()">second</a>|### Second of the time|
||<a href="#milisecond()">miliSecond</a>|### Milisecond of the time|
||<a href="#microsecond()">microSecond</a>|### Microsecond of the time|
||<a href="#timezonedaylightsavingtime()">timeZoneDaylightSavingTime</a>|### Daylight saving time|
||<a href="#timezonegmtdiff()">timeZoneGMTdiff</a>|### Difference to Greenwich time (GMT) without colon between hours and minutes|
||<a href="#timezoneabbreviation()">timeZoneAbbreviation</a>|### Timezone abbreviation if known; otherwise the GMT offset|
||<a href="#timezoneoffset()">timeZoneOffset</a>|### Timezone offset in seconds|
||<a href="#setdate()">setDate</a>|### Sets the date|
||<a href="#settime()">setTime</a>|### Sets the time|
||<a href="#timezone()">timeZone</a>|### Gets current timezone object|
||<a href="#changetimezone()">changeTimeZone</a>|### Sets timezone|
||<a href="#add()">add</a>|### Add interval to datetime|
||<a href="#sub()">sub</a>|### Calculate interval to datetime|
||<a href="#diffrence()">diffrence</a>|### Difference between two Calendars|


# Methods


<h2><a name="create()"># create()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::create(string $datetime, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date and time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L108)**</sub><br>


### Parameters:

* string $datetime _A date/time string._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To see valid date/time formats._

<h2><a name="now()"># now()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::now(\FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date and time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::now()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L128)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="today()"># today()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::today(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to current date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::today()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L153)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="yesterday()"># yesterday()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::yesterday(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to yesterday date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::yesterday()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L178)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="relative()"># relative()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::relative(int $number, \FireHub\TheCore\Support\Enums\DateTime\Unit\Unit $unit, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::NOW, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set relative time and date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::relative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L209)**</sub><br>


### Parameters:

* int $number _Number, positive or negative._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Unit](./Unit) $unit _Unit to use._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::NOW _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="firstday()"># firstDay()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::firstDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set calendar to first day of specified month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::firstDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L242)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="lastday()"># lastDay()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::lastDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set datetime to last day of specified month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::lastDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L275)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="weekday()"># weekDay()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::weekDay(\FireHub\TheCore\Support\Enums\DateTime\Ordinal $ordinal, \FireHub\TheCore\Support\Enums\DateTime\WeekDay $weekday, \FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Set datetime by ordinal day of specified weekday name and month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::weekDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L314)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal](./Ordinal) $ordinal _Sets ordinal value for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](./WeekDay) $weekday _Sets weekday name for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Returns:

* self _New calendar._

<h2><a name="fromformat()"># fromFormat()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::fromFormat(string $format, string $datetime, \FireHub\TheCore\Support\Enums\DateTime\TimeZone|null $time_zone = null):self
```

### ### Parses a time string according to a specified format
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::fromFormat()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L341)**</sub><br>


### Parameters:

* string $format _The format that the passed in string should be in._
* string $datetime _String representing the datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or null $time_zone = null _[optional] 
TimeZone enum representing the timezone of $datetime.
If $timezone is omitted, the current timezone will be used._

### Throws:

* [\Error](./Error) _If system cannot create Calendar from format._

### Returns:

* self _New calendar._

### See also:

* [https://www.php.net/manual/en/datetimeimmutable.createfromformat.php](https://www.php.net/manual/en/datetimeimmutable.createfromformat.php) _To see valid $datetime formats._

<h2><a name="fromtimestamp()"># fromTimestamp()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\Calendar::fromTimestamp(int $timestamp):self
```

### ### Set datetime from timestamp
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::fromTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L365)**</sub><br>


### Parameters:

* int $timestamp _Unix timestamp representing the date._

### Returns:

* self _New calendar._

<h2><a name="totimestamp()"># toTimestamp()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::toTimestamp():int
```

### ### Gets timestamp from datetime
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::toTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L377)**</sub><br>


### Returns:

* int _Unix timestamp representing the date._

<h2><a name="format()"># format()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::format(\FireHub\TheCore\Support\Enums\DateTime\Format\Format|string $format = PredefinedFormat::DATE_MICRO_TIME):string
```

### ### Formats datetime according to given format
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::format()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L401)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Format\Format](./Format) or string $format = PredefinedFormat::DATE_MICRO_TIME _[optional] 
Format enum or string accepted by date()._

### Throws:

* [\Error](./Error) _If system could not set timezone._

### Returns:

* string _Formated datetime._

### See also:

* [https://www.php.net/manual/en/datetime.format.php](https://www.php.net/manual/en/datetime.format.php) _To view valied $format options._

<h2><a name="year()"># year()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::year(bool $short = false):int
```

### ### Get year
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::year()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L422)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, two digit representation of a year will be returned._

### Returns:

* int _Year._

<h2><a name="leapyear()"># leapYear()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::leapYear():bool
```

### ### Whether it's a leap year
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::leapYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L439)**</sub><br>


### Returns:

* bool _True if is leap year, false otherwise._

<h2><a name="monthname()"># monthName()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::monthName(bool $short = false):string
```

### ### Get month name
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::monthName()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L459)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, three letters of a month will be returned._

### Returns:

* string _Month name._

<h2><a name="month()"># month()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::month(bool $short = false)
```

### ### Get month number
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::month()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L481)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of a month will be returned._

<h2><a name="monthdays()"># monthDays()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::monthDays():int
```

### ### Get number of days in the given month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::monthDays()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L498)**</sub><br>


### Returns:

* int _Number of days in the given month._

<h2><a name="dayinyear()"># dayinYear()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::dayinYear():int
```

### ### The day of the year
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayinYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L515)**</sub><br>


### Returns:

* int _Number of days in the given month._

<h2><a name="dayinmonth()"># dayInMonth()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth(bool $short = false, bool $suffix = false)
```

### ### The day of the month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayInMonth()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L541)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of a day in month will be returned._
* bool $suffix = false _[optional] 
If true, English ordinal suffix for the day of the month will be added._

<h2><a name="dayinweek()"># dayInWeek()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::dayInWeek(bool $iso8601 = false):int
```

### ### The day of the week, starting from Sunday with value 0
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayInWeek()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L571)**</sub><br>


### Parameters:

* bool $iso8601 = false _[optional] 
If true, Monday will be the first day of the week, with value 1._

### Returns:

* int _Day in week._

<h2><a name="daynameinweek()"># dayNameInWeek()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::dayNameInWeek(bool $short = false):string
```

### ### The day name of the week
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::dayNameInWeek()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L591)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, three digit representation of a day in week will be returned._

### Returns:

* string _Dayname in week._

<h2><a name="weekinyear()"># weekInYear()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::weekInYear():int
```

### ### The week number of the year
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::weekInYear()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L608)**</sub><br>


### Returns:

* int _Week number of the year._

<h2><a name="hourshort()"># hourShort()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::hourShort(bool $short = false, bool $meridiem = false)
```

### ### 12 hour type of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::hourShort()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L634)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of an hour in month will be returned._
* bool $meridiem = false _[optional] 
If true, Ante meridiem and Post meridiem suffix for the hour will be added._

<h2><a name="hourlong()"># hourLong()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::hourLong(bool $short = false)
```

### ### 24 type hour of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::hourLong()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L664)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of an hour in the day will be returned._

<h2><a name="minute()"># minute()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::minute(bool $short = false)
```

### ### Minute of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::minute()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L685)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the minute in hour will be returned._

<h2><a name="second()"># second()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::second(bool $short = false)
```

### ### Second of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::second()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L706)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the second in minute will be returned._

<h2><a name="milisecond()"># miliSecond()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::miliSecond(bool $short = false)
```

### ### Milisecond of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::miliSecond()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L727)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the milisecond in second will be returned._

<h2><a name="microsecond()"># microSecond()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::microSecond(bool $short = false)
```

### ### Microsecond of the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::microSecond()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L748)**</sub><br>


### Parameters:

* bool $short = false _[optional] 
If true, single digit representation of the microsecond in second will be returned._

<h2><a name="timezonedaylightsavingtime()"># timeZoneDaylightSavingTime()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::timeZoneDaylightSavingTime():bool
```

### ### Daylight saving time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneDaylightSavingTime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L765)**</sub><br>


### Returns:

* bool _Whether the date is in daylight saving time._

<h2><a name="timezonegmtdiff()"># timeZoneGMTdiff()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::timeZoneGMTdiff(bool $colon = false):string
```

### ### Difference to Greenwich time (GMT) without colon between hours and minutes
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneGMTdiff()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L785)**</sub><br>


### Parameters:

* bool $colon = false _[optional] 
If true, return diffrence will be with colon between hours and minutes._

### Returns:

* string _GMT difference._

<h2><a name="timezoneabbreviation()"># timeZoneAbbreviation()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::timeZoneAbbreviation():string
```

### ### Timezone abbreviation if known; otherwise the GMT offset
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneAbbreviation()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L800)**</sub><br>


### Returns:

* string _Timezone abbreviation or GMT offset._

<h2><a name="timezoneoffset()"># timeZoneOffset()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::timeZoneOffset():int
```

### ### Timezone offset in seconds
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZoneOffset()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L817)**</sub><br>


### Returns:

* int _Timezone offset in seconds._

<h2><a name="setdate()"># setDate()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::setDate(int|null $year = null, int|null $month = null, int|null $day = null):$this
```

### ### Sets the date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::setDate()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L843)**</sub><br>


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

```php
\FireHub\TheCore\Support\DateTime\Calendar::setTime(int|null $hour = null, int|null $minute = null, int|null $second = null, int|null $micro_second = null):$this
```

### ### Sets the time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::setTime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L875)**</sub><br>


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

```php
\FireHub\TheCore\Support\DateTime\Calendar::timeZone():\FireHub\TheCore\Support\DateTime\TimeZone
```

### ### Gets current timezone object
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::timeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L894)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get current timezone._

### Returns:

* [\FireHub\TheCore\Support\DateTime\TimeZone](./TimeZone) _Current timezone object._

<h2><a name="changetimezone()"># changeTimeZone()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::changeTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::changeTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L914)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) $time_zone _TimeZone enum representing the timezone of $datetime._

### Throws:

* [\Error](./Error) _If there was error setting timezone._

### Returns:

* bool _True if timezone was set._

<h2><a name="add()"># add()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::add(\FireHub\TheCore\Support\DateTime\Interval $interval):$this
```

### ### Add interval to datetime
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::add()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L959)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\DateTime\Interval](./Interval) $interval _$time_zone 
Datetime interval._

### Returns:

* $this _This object._

<h2><a name="sub()"># sub()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::sub(\FireHub\TheCore\Support\DateTime\Interval $interval):$this
```

### ### Calculate interval to datetime
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::sub()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L1005)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\DateTime\Interval](./Interval) $interval _$time_zone 
Datetime interval._

### Returns:

* $this _This object._

<h2><a name="diffrence()"># diffrence()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\Calendar::diffrence(\FireHub\TheCore\Support\DateTime\Calendar $date):\FireHub\TheCore\Support\DateTime\Interval
```

### ### Difference between two Calendars
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Calendar::diffrence()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Calendar.php#L1050)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\DateTime\Calendar](./Calendar) $date _Datetime interval._

### Returns:

* [\FireHub\TheCore\Support\DateTime\Interval](./Interval) _Interval diffrence between two Calendars._


