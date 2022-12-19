---
layout: default
title: Date
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Date

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Date()
```

### ### Date and time low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Date**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Date.php#L32)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.Date.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.Date.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#check()">check</a>|### Check for valid date|


# Methods
***


<h2><a name="check()"># check()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Date::check(int<1, 31> $day, int $month, int<1, 12> $year):bool
```

### ### Check for valid date

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Date::check()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Date.php#L50)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* int&lt;1, 31&gt; $day _The day is within the allowed number of days for the given month. Leap years are taken into consideration._
* int $month _The month is between 1 and 12 inclusive._
* int&lt;1, 12&gt; $year _The year is between 1 and 32767 inclusive_

### Returns:

* bool _True if the date given is valid, otherwise returns false._


