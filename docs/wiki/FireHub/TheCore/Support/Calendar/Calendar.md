
```php
class \FireHub\TheCore\Support\Calendar\Calendar()
```

### ### Calendar support class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Calendar\Calendar**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L31)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/calendar/firehub.Calendar.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/calendar/firehub.Calendar.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
||<a href="#__construct()">__construct</a>|### Constructor|
|static |<a href="#now()">now</a>|### Set calendar to current date and time|
|static |<a href="#today()">today</a>|### Set calendar to current date|
|static |<a href="#yesterday()">yesterday</a>|### Set calendar to yesterday date|
|static |<a href="#relative()">relative</a>|### Set relative time and date|
|static |<a href="#firstday()">firstDay</a>|### Set calendar to first day of specified month|
|static |<a href="#lastday()">lastDay</a>|### Set datetime to last day of specified month|
|static |<a href="#weekday()">weekDay</a>|### Set datetime by ordinal day of specified weekday name and month|
|static |<a href="#fromtimestamp()">fromTimestamp</a>|### Set datetime to yesterday date|
||<a href="#gettimezone()">getTimeZone</a>|### Gets current timezone|
|static |<a href="#settimezone()">setTimeZone</a>|### Sets current timezone|


# Methods


<h2><a name="__construct()"># __construct()</a></h2>

```php
\FireHub\TheCore\Support\Calendar\Calendar::__construct(string $datetime = 'now')
```

### ### Constructor
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L53)**</sub><br>


### Parameters:

* string $datetime = 'now' _[optional] 
A date/time string._

### Throws:

* [\Error](./Error) _If $datetime is not in valid format._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To see valid date/time formats._

<h2><a name="now()"># now()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::now():self
```

### ### Set calendar to current date and time
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::now()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L75)**</sub><br>


### Returns:

* self _New calendar._

<h2><a name="today()"># today()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::today(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to current date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::today()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L95)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="yesterday()"># yesterday()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::yesterday(\FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to yesterday date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::yesterday()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L115)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="relative()"># relative()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::relative(int $number, \FireHub\TheCore\Support\Enums\DateTime\Unit $unit, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::NOW):self
```

### ### Set relative time and date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::relative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L141)**</sub><br>


### Parameters:

* int $number _Number, positive or negative._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit](./Unit) $unit _Unit to use._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::NOW _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="firstday()"># firstDay()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::firstDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set calendar to first day of specified month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::firstDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L169)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="lastday()"># lastDay()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::lastDay(\FireHub\TheCore\Support\Enums\DateTime\Month|null $month, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set datetime to last day of specified month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::lastDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L197)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="weekday()"># weekDay()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::weekDay(\FireHub\TheCore\Support\Enums\DateTime\Ordinal $ordinal, \FireHub\TheCore\Support\Enums\DateTime\WeekDay $weekday, \FireHub\TheCore\Support\Enums\DateTime\Month|null $month = null, int|null $year = null, \FireHub\TheCore\Support\Enums\DateTime\TimeName|string $at = TimeName::MIDNIGHT):self
```

### ### Set datetime by ordinal day of specified weekday name and month
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::weekDay()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L231)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\Ordinal](./Ordinal) $ordinal _Sets ordinal value for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\WeekDay](./WeekDay) $weekday _Sets weekday name for datetime._
* [\FireHub\TheCore\Support\Enums\DateTime\Month](./Month) or null $month = null _[optional] 
Sets month for datetime, or current month if null._
* int or null $year = null _[optional] 
Sets year for datetime, or current year if null._
* [\FireHub\TheCore\Support\Enums\DateTime\TimeName](./TimeName) or string $at = TimeName::MIDNIGHT _[optional] 
Sets time for datetime timestamp._

### Returns:

* self _New calendar._

<h2><a name="fromtimestamp()"># fromTimestamp()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::fromTimestamp(int $timestamp):self
```

### ### Set datetime to yesterday date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::fromTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L247)**</sub><br>


### Parameters:

* int $timestamp _Unix timestamp representing the date._

### Returns:

* self _New datetime._

<h2><a name="gettimezone()"># getTimeZone()</a></h2>

```php
\FireHub\TheCore\Support\Calendar\Calendar::getTimeZone():\FireHub\TheCore\Support\Enums\DateTime\TimeZone
```

### ### Gets current timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::getTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L264)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get current timezone._

### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) _Current timezone._

<h2><a name="settimezone()"># setTimeZone()</a></h2>

```php
static \FireHub\TheCore\Support\Calendar\Calendar::setTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets current timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Calendar\Calendar::setTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/calendar/firehub.Calendar.php#L281)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) $time_zone 

### Throws:

* [\Error](./Error) _If system could not set timezone._

### Returns:

* bool _True if success, false otherwise._


