---
layout: default
title: TimeZone
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# TimeZone

```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone
```

### ### Timezone format enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Implements:  **[](/thecore/v0.2)**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.1.pre-alpha.M2** 


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#daylight_saving_time">DAYLIGHT_SAVING_TIME</a>|### Whether the date is in daylight saving time|&#039;I&#039;|
|<a href="#gmt_diff">GMT_DIFF</a>|### Difference to Greenwich time (GMT) without colon between hours and minutes|&#039;O&#039;|
|<a href="#gmt_diff_colon">GMT_DIFF_COLON</a>|### Difference to Greenwich time (GMT) with colon between hours and minutes|&#039;P&#039;|
|<a href="#abbreviation">ABBREVIATION</a>|### Timezone abbreviation, if known; otherwise the GMT offset|&#039;T&#039;|
|<a href="#offset">OFFSET</a>|### Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive|&#039;Z&#039;|


# Cases
***


<h2><a name="daylight_saving_time"># DAYLIGHT_SAVING_TIME</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::DAYLIGHT_SAVING_TIME = 'I'
```

### ### Whether the date is in daylight saving time

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::DAYLIGHT_SAVING_TIME**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L34)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This case is used by:

* *As format type.*


### Examples:

```php
1 if Daylight Saving Time, 0 otherwise
```



<h2><a name="gmt_diff"># GMT_DIFF</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF = 'O'
```

### ### Difference to Greenwich time (GMT) without colon between hours and minutes

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L45)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This case is used by:

* *As format type.*


### Examples:

```php
+0200
```



<h2><a name="gmt_diff_colon"># GMT_DIFF_COLON</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF_COLON = 'P'
```

### ### Difference to Greenwich time (GMT) with colon between hours and minutes

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::GMT_DIFF_COLON**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L56)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This case is used by:

* *As format type.*


### Examples:

```php
+02:00
```



<h2><a name="abbreviation"># ABBREVIATION</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::ABBREVIATION = 'T'
```

### ### Timezone abbreviation, if known; otherwise the GMT offset

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::ABBREVIATION**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L67)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This case is used by:

* *As format type.*


### Examples:

```php
EST, MDT, +05
```



<h2><a name="offset"># OFFSET</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::OFFSET = 'Z'
```

### ### Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\TimeZone::OFFSET**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.TimeZone.php#L78)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This case is used by:

* *As format type.*


### Examples:

```php
-43200 through 50400
```



