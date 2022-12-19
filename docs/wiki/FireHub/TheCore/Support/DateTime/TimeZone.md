
```php
class \FireHub\TheCore\Support\DateTime\TimeZone()
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



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
||<a href="#__construct()">__construct</a>|### Constructor|
||<a href="#name()">name</a>|### Name of the timezone|
||<a href="#offsetgmt()">offsetGMT</a>|### GMT offset for the timezone|
||<a href="#latitude()">latitude</a>|### Get timezone latitude|
||<a href="#longitude()">longitude</a>|### Get timezone longitude|
||<a href="#country()">country</a>|### Get country for timezone|
||<a href="#continent()">continent</a>|### Get continent for timezone|
|static |<a href="#getdefaulttimezone()">getDefaultTimeZone</a>|### Gets default timezone|
|static |<a href="#setdefaulttimezone()">setDefaultTimeZone</a>|### Sets default timezone|


# Methods


<h2><a name="__construct()"># __construct()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::__construct(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $timezone)
```

### ### Constructor
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L51)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) $timezone _TimeZone enum._

### Throws:

* [\Error](./Error) _If $timezone is not in valid._

<h2><a name="name()"># name()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::name():string
```

### ### Name of the timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::name()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L71)**</sub><br>


### Returns:

* string _Timezone name._

<h2><a name="offsetgmt()"># offsetGMT()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::offsetGMT():int
```

### ### GMT offset for the timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::offsetGMT()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L87)**</sub><br>


### Throws:

* [\Error](./Error) _If error happened while calculating GMT offset._

### Returns:

* int _Time zone offset in seconds between selected timezone and Greenwich Mean Time._

<h2><a name="latitude()"># latitude()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::latitude():float
```

### ### Get timezone latitude
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::latitude()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L111)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get timezone latitude._

### Returns:

* float _Timezone latitude._

<h2><a name="longitude()"># longitude()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::longitude():float
```

### ### Get timezone longitude
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::longitude()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L125)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get timezone longitude._

### Returns:

* float _Timezone longitude._

<h2><a name="country()"># country()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::country():\FireHub\TheCore\Support\Enums\Geo\Country
```

### ### Get country for timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::country()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L141)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get timezone country._

### Returns:

* [\FireHub\TheCore\Support\Enums\Geo\Country](./Country) _Country enum for timezone._

<h2><a name="continent()"># continent()</a></h2>

```php
\FireHub\TheCore\Support\DateTime\TimeZone::continent():\FireHub\TheCore\Support\Enums\Geo\Continent
```

### ### Get continent for timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::continent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L159)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get timezone country._

### Returns:

* [\FireHub\TheCore\Support\Enums\Geo\Continent](./Continent) _Continent enum for country timezone._

<h2><a name="getdefaulttimezone()"># getDefaultTimeZone()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone():\FireHub\TheCore\Support\Enums\DateTime\TimeZone
```

### ### Gets default timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::getDefaultTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L176)**</sub><br>


### Throws:

* [\Error](./Error) _If system could not get default timezone._

### Returns:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) _Current timezone._

<h2><a name="setdefaulttimezone()"># setDefaultTimeZone()</a></h2>

```php
static \FireHub\TheCore\Support\DateTime\TimeZone::setDefaultTimeZone(\FireHub\TheCore\Support\Enums\DateTime\TimeZone $time_zone):bool
```

### ### Sets default timezone
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\TimeZone::setDefaultTimeZone()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.TimeZone.php#L197)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Support\Enums\DateTime\TimeZone](./TimeZone) $time_zone _TimeZone enum._

### Throws:

* [\Error](./Error) _If system could not set default timezone._

### Returns:

* bool _True if success, false otherwise._


