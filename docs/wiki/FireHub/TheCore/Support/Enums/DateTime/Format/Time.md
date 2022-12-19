
```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format\Time
```

### ### Time format enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/datetime/format/firehub.Time.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/datetime/format/firehub.Time.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#merdiem_lc">MERDIEM_LC</a>|### Lowercase Ante meridiem and Post meridiem|&#039;a&#039;|
|<a href="#merdiem_uc">MERDIEM_UC</a>|### Uppercase Ante meridiem and Post meridiem|&#039;A&#039;|
|<a href="#beats">BEATS</a>|### Swatch Internet time|&#039;B&#039;|
|<a href="#hour_short_12">HOUR_SHORT_12</a>|### 12-hour format of an hour without leading zeros|&#039;g&#039;|
|<a href="#hour_short_24">HOUR_SHORT_24</a>|### 24-hour format of an hour without leading zeros|&#039;G&#039;|
|<a href="#hour_long_12">HOUR_LONG_12</a>|### 12-hour format of an hour with leading zeros|&#039;h&#039;|
|<a href="#hour_long_24">HOUR_LONG_24</a>|### 24-hour format of an hour with leading zeros|&#039;H&#039;|
|<a href="#minutes">MINUTES</a>|### Minutes with leading zeros|&#039;i&#039;|
|<a href="#seconds">SECONDS</a>|### Seconds with leading zeros|&#039;s&#039;|
|<a href="#miliseconds">MILISECONDS</a>|### Miliseconds|&#039;v&#039;|
|<a href="#microseconds">MICROSECONDS</a>|### Microseconds|&#039;u&#039;|


# Cases


<h2><a name="merdiem_lc"># MERDIEM_LC</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MERDIEM_LC = 'a'
```

### ### Lowercase Ante meridiem and Post meridiem
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MERDIEM_LC**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L34)**</sub><br>


### Examples:

```php
am or pm
```



<h2><a name="merdiem_uc"># MERDIEM_UC</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MERDIEM_UC = 'A'
```

### ### Uppercase Ante meridiem and Post meridiem
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MERDIEM_UC**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L45)**</sub><br>


### Examples:

```php
AM or PM
```



<h2><a name="beats"># BEATS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::BEATS = 'B'
```

### ### Swatch Internet time
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::BEATS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L56)**</sub><br>


### Examples:

```php
000 or 999
```



<h2><a name="hour_short_12"># HOUR_SHORT_12</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_SHORT_12 = 'g'
```

### ### 12-hour format of an hour without leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_SHORT_12**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L67)**</sub><br>


### Examples:

```php
1 through 12
```



<h2><a name="hour_short_24"># HOUR_SHORT_24</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_SHORT_24 = 'G'
```

### ### 24-hour format of an hour without leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_SHORT_24**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L78)**</sub><br>


### Examples:

```php
0 through 23
```



<h2><a name="hour_long_12"># HOUR_LONG_12</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_LONG_12 = 'h'
```

### ### 12-hour format of an hour with leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_LONG_12**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L89)**</sub><br>


### Examples:

```php
01 through 12
```



<h2><a name="hour_long_24"># HOUR_LONG_24</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_LONG_24 = 'H'
```

### ### 24-hour format of an hour with leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::HOUR_LONG_24**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L100)**</sub><br>


### Examples:

```php
00 through 23
```



<h2><a name="minutes"># MINUTES</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MINUTES = 'i'
```

### ### Minutes with leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MINUTES**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L111)**</sub><br>


### Examples:

```php
00 to 59
```



<h2><a name="seconds"># SECONDS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::SECONDS = 's'
```

### ### Seconds with leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::SECONDS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L122)**</sub><br>


### Examples:

```php
00 through 59
```



<h2><a name="miliseconds"># MILISECONDS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MILISECONDS = 'v'
```

### ### Miliseconds
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MILISECONDS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L133)**</sub><br>


### Examples:

```php
654
```



<h2><a name="microseconds"># MICROSECONDS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MICROSECONDS = 'u'
```

### ### Microseconds
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Time::MICROSECONDS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Time.php#L144)**</sub><br>


### Examples:

```php
654321
```



