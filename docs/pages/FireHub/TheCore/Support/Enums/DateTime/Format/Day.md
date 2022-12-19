---
layout: default
title: Day
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Day

```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format\Day
```

### ### Day format enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Implements:  **[](/thecore/v0.2)**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/datetime/format/firehub.Day.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/datetime/format/firehub.Day.php)**</sub><br>

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
|<a href="#number">NUMBER</a>|### The day of the year (starting from 0)|&#039;z&#039;|
|<a href="#numeric_in_month_long">NUMERIC_IN_MONTH_LONG</a>|### Day of the month, 2 digits with leading zeros|&#039;d&#039;|
|<a href="#numeric_in_month_short">NUMERIC_IN_MONTH_SHORT</a>|### Day of the month without leading zeros|&#039;j&#039;|
|<a href="#textual_in_week_long">TEXTUAL_IN_WEEK_LONG</a>|### Full textual representation of the day of the week|&#039;l&#039;|
|<a href="#textual_in_week_short">TEXTUAL_IN_WEEK_SHORT</a>|### Textual representation of a day, three letters|&#039;D&#039;|
|<a href="#numeric_in_week">NUMERIC_IN_WEEK</a>|### Numeric representation of the day of the week|&#039;w&#039;|
|<a href="#numeric_in_week_iso_8601">NUMERIC_IN_WEEK_ISO_8601</a>|### ISO 8601 numeric representation of the day of the weeK|&#039;N&#039;|
|<a href="#suffix">SUFFIX</a>|### English ordinal suffix for the day of the month, 2 characters|&#039;S&#039;|


# Cases
***


<h2><a name="number"># NUMBER</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMBER = 'z'
```

### ### The day of the year (starting from 0)

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMBER**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L34)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
0 through 365
```



<h2><a name="numeric_in_month_long"># NUMERIC_IN_MONTH_LONG</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_MONTH_LONG = 'd'
```

### ### Day of the month, 2 digits with leading zeros

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_MONTH_LONG**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L45)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
01 to 31
```



<h2><a name="numeric_in_month_short"># NUMERIC_IN_MONTH_SHORT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_MONTH_SHORT = 'j'
```

### ### Day of the month without leading zeros

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_MONTH_SHORT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L56)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
1 to 31
```



<h2><a name="textual_in_week_long"># TEXTUAL_IN_WEEK_LONG</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::TEXTUAL_IN_WEEK_LONG = 'l'
```

### ### Full textual representation of the day of the week

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::TEXTUAL_IN_WEEK_LONG**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L67)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
Sunday through Saturday
```



<h2><a name="textual_in_week_short"># TEXTUAL_IN_WEEK_SHORT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::TEXTUAL_IN_WEEK_SHORT = 'D'
```

### ### Textual representation of a day, three letters

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::TEXTUAL_IN_WEEK_SHORT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L78)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
Mon through Sun
```



<h2><a name="numeric_in_week"># NUMERIC_IN_WEEK</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_WEEK = 'w'
```

### ### Numeric representation of the day of the week

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_WEEK**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L89)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
0 (for Sunday) through 6 (for Saturday)
```



<h2><a name="numeric_in_week_iso_8601"># NUMERIC_IN_WEEK_ISO_8601</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_WEEK_ISO_8601 = 'N'
```

### ### ISO 8601 numeric representation of the day of the weeK

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::NUMERIC_IN_WEEK_ISO_8601**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L100)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
1 (for Monday) through 7 (for Sunday)
```



<h2><a name="suffix"># SUFFIX</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Day::SUFFIX = 'S'
```

### ### English ordinal suffix for the day of the month, 2 characters

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Day::SUFFIX**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/datetime/format/firehub.Day.php#L113)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Examples:

```php
st, nd, rd or th
```



