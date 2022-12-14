---
layout: default
title: Format
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Format

```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format
```

### ### Datetime format enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/datetime/firehub.Format.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/datetime/firehub.Format.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Cases table
***

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
***


<h2><a name="date"># DATE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::DATE = 'Y-m-d'
```

### ### Date only format

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::DATE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L34)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09
```



<h2><a name="time"># TIME</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::TIME = 'H:i:s'
```

### ### Time only format

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L45)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
08:53:18
```



<h2><a name="micro_time"># MICRO_TIME</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::MICRO_TIME = 'H:i:s.u'
```

### ### Time only format with microseconds

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::MICRO_TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L56)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
08:53:56.844337
```



<h2><a name="datetime"># DATETIME</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::DATETIME = 'Y-m-d H:i:s'
```

### ### Date and time format

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::DATETIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L67)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09 08:55:00
```



<h2><a name="date_micro_time"># DATE_MICRO_TIME</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::DATE_MICRO_TIME = 'Y-m-d H:i:s.u'
```

### ### Date and time format with microseconds

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::DATE_MICRO_TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L78)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09 08:55:33.641682
```



<h2><a name="atom"># ATOM</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::ATOM = 'Y-m-d\\TH:i:sP'
```

### ### ATOM

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::ATOM**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L89)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09T08:58:56+01:00
```



<h2><a name="atom_extended"># ATOM_EXTENDED</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::ATOM_EXTENDED = 'Y-m-d\\TH:i:s.vP'
```

### ### ATOM_EXTENDED

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::ATOM_EXTENDED**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L100)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09T08:58:45.038+01:00
```



<h2><a name="cookie"># COOKIE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::COOKIE = 'l, d-M-Y H:i:s T'
```

### ### COOKIE

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::COOKIE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L111)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
Friday, 09-Dec-2022 08:58:31 CET
```



<h2><a name="iso8601"># ISO8601</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::ISO8601 = 'Y-m-d\\TH:i:sO'
```

### ### ISO8601

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::ISO8601**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L122)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
2022-12-09T08:58:18+0100
```



<h2><a name="iso8601_expanded"># ISO8601_EXPANDED</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::ISO8601_EXPANDED = 'X-m-d\\TH:i:sP'
```

### ### ISO8601_EXPANDED

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::ISO8601_EXPANDED**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L133)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
X-12-09T08:58:03+01:00
```



<h2><a name="rfc822"># RFC822</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::RFC822 = 'D, d M y H:i:s O'
```

### ### RFC822

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::RFC822**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L144)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
Fri, 09 Dec 22 08:57:30 +0100
```



<h2><a name="rfc850"># RFC850</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::RFC850 = 'l, d-M-y H:i:s T'
```

### ### RFC850

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::RFC850**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L155)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
Friday, 09-Dec-22 08:57:46 CET
```



<h2><a name="rfc7231"># RFC7231</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::RFC7231 = 'D, d M Y H:i:s \\G\\M\\T'
```

### ### RFC7231

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::RFC7231**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L166)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
Fri, 09 Dec 2022 08:56:35 GMT
```



<h2><a name="rss"># RSS</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format::RSS = 'D, d M Y H:i:s O'
```

### ### RSS

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format::RSS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/firehub.Format.php#L177)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Examples:

Registiring new autoload implementation.
```php
Fri, 09 Dec 2022 08:56:11 +0100
```



