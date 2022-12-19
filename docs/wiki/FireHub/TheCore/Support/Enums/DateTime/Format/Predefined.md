
```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format\Predefined
```

### ### Predefined datetime format enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/datetime/format/firehub.Predefined.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/datetime/format/firehub.Predefined.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#date">DATE</a>|### Date only format|&#039;Y-m-d&#039;|
|<a href="#time">TIME</a>|### Time only format|&#039;H:i:s&#039;|
|<a href="#micro_time">MICRO_TIME</a>|### Time only format with microseconds|&#039;H:i:s.u&#039;|
|<a href="#datetime">DATETIME</a>|### Date and time format|&#039;Y-m-d H:i:s&#039;|
|<a href="#date_micro_time">DATE_MICRO_TIME</a>|### Date and time format with microseconds|&#039;Y-m-d H:i:s.u&#039;|
|<a href="#atom">ATOM</a>|### ATOM|&#039;Y-m-d\\TH:i:sP&#039;|
|<a href="#atom_extended">ATOM_EXTENDED</a>|### ATOM_EXTENDED|&#039;Y-m-d\\TH:i:s.vP&#039;|
|<a href="#cookie">COOKIE</a>|### COOKIE|&#039;l, d-M-Y H:i:s T&#039;|
|<a href="#iso8601">ISO8601</a>|### ISO8601|&#039;Y-m-d\\TH:i:sO&#039;|
|<a href="#iso8601_expanded">ISO8601_EXPANDED</a>|### ISO8601_EXPANDED|&#039;X-m-d\\TH:i:sP&#039;|
|<a href="#rfc822">RFC822</a>|### RFC822|&#039;D, d M y H:i:s O&#039;|
|<a href="#rfc850">RFC850</a>|### RFC850|&#039;l, d-M-y H:i:s T&#039;|
|<a href="#rfc7231">RFC7231</a>|### RFC7231|&#039;D, d M Y H:i:s \\G\\M\\T&#039;|
|<a href="#rss">RSS</a>|### RSS|&#039;D, d M Y H:i:s O&#039;|


# Cases


<h2><a name="date"># DATE</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE = 'Y-m-d'
```

### ### Date only format
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L34)**</sub><br>


### Examples:

```php
2022-12-09
```



<h2><a name="time"># TIME</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::TIME = 'H:i:s'
```

### ### Time only format
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L45)**</sub><br>


### Examples:

```php
08:53:18
```



<h2><a name="micro_time"># MICRO_TIME</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::MICRO_TIME = 'H:i:s.u'
```

### ### Time only format with microseconds
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::MICRO_TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L56)**</sub><br>


### Examples:

```php
08:53:56.844337
```



<h2><a name="datetime"># DATETIME</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATETIME = 'Y-m-d H:i:s'
```

### ### Date and time format
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATETIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L67)**</sub><br>


### Examples:

```php
2022-12-09 08:55:00
```



<h2><a name="date_micro_time"># DATE_MICRO_TIME</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME = 'Y-m-d H:i:s.u'
```

### ### Date and time format with microseconds
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L78)**</sub><br>


### Examples:

```php
2022-12-09 08:55:33.641682
```



<h2><a name="atom"># ATOM</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ATOM = 'Y-m-d\\TH:i:sP'
```

### ### ATOM
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ATOM**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L89)**</sub><br>


### Examples:

```php
2022-12-09T08:58:56+01:00
```



<h2><a name="atom_extended"># ATOM_EXTENDED</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ATOM_EXTENDED = 'Y-m-d\\TH:i:s.vP'
```

### ### ATOM_EXTENDED
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ATOM_EXTENDED**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L100)**</sub><br>


### Examples:

```php
2022-12-09T08:58:45.038+01:00
```



<h2><a name="cookie"># COOKIE</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::COOKIE = 'l, d-M-Y H:i:s T'
```

### ### COOKIE
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::COOKIE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L111)**</sub><br>


### Examples:

```php
Friday, 09-Dec-2022 08:58:31 CET
```



<h2><a name="iso8601"># ISO8601</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ISO8601 = 'Y-m-d\\TH:i:sO'
```

### ### ISO8601
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ISO8601**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L122)**</sub><br>


### Examples:

```php
2022-12-09T08:58:18+0100
```



<h2><a name="iso8601_expanded"># ISO8601_EXPANDED</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ISO8601_EXPANDED = 'X-m-d\\TH:i:sP'
```

### ### ISO8601_EXPANDED
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::ISO8601_EXPANDED**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L133)**</sub><br>


### Examples:

```php
X-12-09T08:58:03+01:00
```



<h2><a name="rfc822"># RFC822</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC822 = 'D, d M y H:i:s O'
```

### ### RFC822
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC822**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L144)**</sub><br>


### Examples:

```php
Fri, 09 Dec 22 08:57:30 +0100
```



<h2><a name="rfc850"># RFC850</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC850 = 'l, d-M-y H:i:s T'
```

### ### RFC850
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC850**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L155)**</sub><br>


### Examples:

```php
Friday, 09-Dec-22 08:57:46 CET
```



<h2><a name="rfc7231"># RFC7231</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC7231 = 'D, d M Y H:i:s \\G\\M\\T'
```

### ### RFC7231
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RFC7231**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L166)**</sub><br>


### Examples:

```php
Fri, 09 Dec 2022 08:56:35 GMT
```



<h2><a name="rss"># RSS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RSS = 'D, d M Y H:i:s O'
```

### ### RSS
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Predefined::RSS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Predefined.php#L177)**</sub><br>


### Examples:

```php
Fri, 09 Dec 2022 08:56:11 +0100
```



