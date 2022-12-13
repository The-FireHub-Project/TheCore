
```php
class \FireHub\TheCore\Support\LowLevel\DateAndTime()
```

### ### Date and time low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L39)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.DateAndTime.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.DateAndTime.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#totimestamp()">toTimestamp</a>|### Parse about any English textual datetime description into a Unix timestamp|
|static |<a href="#format()">format</a>|### Format a local time/date|
|static |<a href="#formatinteger()">formatInteger</a>|### Format a local time/date as integer|
|static |<a href="#getdefaulttimezone()">getDefaultTimezone</a>|### Gets the default timezone used by all date/time functions in a script|
|static |<a href="#setdefaulttimezone()">setDefaultTimezone</a>|### Sets the default timezone used by all date/time functions in a script|
|static |<a href="#suninfo()">sunInfo</a>|### Gets information about sunset/sunrise and twilight begin/end|


# Methods


<h2><a name="totimestamp()"># toTimestamp()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::toTimestamp(string $datetime):int|false
```

### ### Parse about any English textual datetime description into a Unix timestamp
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::toTimestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L56)**</sub><br>


### Parameters:

* string $datetime _A date/time string._

### Returns:

* int or false _Timestamp on success, false otherwise._

### See also:

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) _To check how to pass $datetime parameter._

<h2><a name="format()"># format()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::format(string $format = 'd-m-Y H:i:s.u', int|null $timestamp = null):string
```

### ### Format a local time/date
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::format()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L77)**</sub><br>


### Parameters:

* string $format = 'd-m-Y H:i:s.u' _[optional] 
The format of the outputted date string._
* int or null $timestamp = null _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given._

### Returns:

* string _Formatted date string._

### See also:

* [https://www.php.net/manual/en/datetime.format.php](https://www.php.net/manual/en/datetime.format.php) _To check valid $format formats._

<h2><a name="formatinteger()"># formatInteger()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger(string $format, int|null $timestamp = null):int|false
```

### ### Format a local time/date as integer
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::formatInteger()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L98)**</sub><br>


### Parameters:

* string $format _Single format character._
* int or null $timestamp = null _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time if a timestamp is not given._

### Returns:

* int or false _Formatted date as integer, false otherwise._

### See also:

* [https://www.php.net/manual/en/function.idate.php](https://www.php.net/manual/en/function.idate.php) 

<h2><a name="getdefaulttimezone()"># getDefaultTimezone()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::getDefaultTimezone():\FireHub\TheCore\Support\Enums\DateTime\TimeZone|false
```

### ### Gets the default timezone used by all date/time functions in a script
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::getDefaultTimezone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L112)**</sub><br>


### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) or false _Timezone, false if timezone doesn&#039;t exist._

<h2><a name="setdefaulttimezone()"># setDefaultTimezone()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::setDefaultTimezone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets the default timezone used by all date/time functions in a script
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::setDefaultTimezone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L130)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) $time_zone _The timezone identifier._

### Returns:

* bool _False if the timezone_identifier isn&#039;t valid, or true otherwise._

<h2><a name="suninfo()"># sunInfo()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\DateAndTime::sunInfo(int $timestamp, float $latitude, float $longitude)
```

### ### Gets information about sunset/sunrise and twilight begin/end
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DateAndTime::sunInfo()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DateAndTime.php#L162)**</sub><br>


### Parameters:

* int $timestamp _Unix timestamp._
* float $latitude _Latitude in degrees._
* float $longitude _Longitude in degrees._


