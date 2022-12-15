
```php
class \FireHub\TheCore\Support\LowLevel\Time()
```

### ### Time low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Time**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Time.php#L35)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.Time.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.Time.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#timestamp()">timestamp</a>|### Get current Unix timestamp|
|static |<a href="#microtime()">microtime</a>|### Get current Unix microseconds|


# Methods


<h2><a name="timestamp()"># timestamp()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Time::timestamp():int
```

### ### Get current Unix timestamp
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Time::timestamp()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Time.php#L43)**</sub><br>


### Returns:

* int _Current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)._

<h2><a name="microtime()"># microtime()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Time::microtime():int|false
```

### ### Get current Unix microseconds
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Time::microtime()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Time.php#L60)**</sub><br>


### Returns:

* int or false _Current microseconds, false otherwise._


