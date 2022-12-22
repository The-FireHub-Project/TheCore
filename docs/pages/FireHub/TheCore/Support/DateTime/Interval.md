---
layout: default
title: Interval
parent: \FireHub\Support\Calendar
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Interval

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\DateTime\Interval()
```

### ### Interval support class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\DateTime\Interval**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L81)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/datetime/firehub.Interval.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/datetime/firehub.Interval.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.1.pre-alpha.M2** 


## This class is used by
***

* *As parameter.*

* *As parameter.*

* *As return.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|private [\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic[]](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic[])|<a href="#$basic_units">basic_units</a>|### Basic units||
|private [\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable[]](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable[])|<a href="#$calculatable_units">calculatable_units</a>|### Units||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|magic public static |<a href="#millenniums()">millenniums</a>||
|magic public static |<a href="#centurys()">centurys</a>||
|magic public static |<a href="#decades()">decades</a>||
|magic public static |<a href="#years()">years</a>||
|magic public static |<a href="#quarters()">quarters</a>||
|magic public static |<a href="#months()">months</a>||
|magic public static |<a href="#fortnights()">fortnights</a>||
|magic public static |<a href="#weeks()">weeks</a>||
|magic public static |<a href="#days()">days</a>||
|magic public static |<a href="#hours()">hours</a>||
|magic public static |<a href="#minutes()">minutes</a>||
|magic public static |<a href="#seconds()">seconds</a>||
|magic public static |<a href="#milliseconds()">milliseconds</a>||
|magic public static |<a href="#microseconds()">microSeconds</a>||
|magic public |<a href="#getyears()">getYears</a>||
|magic public |<a href="#getmonths()">getMonths</a>||
|magic public |<a href="#getdays()">getDays</a>||
|magic public |<a href="#gethours()">getHours</a>||
|magic public |<a href="#getminutes()">getMinutes</a>||
|magic public |<a href="#getseconds()">getSeconds</a>||
|magic public |<a href="#getmicroseconds()">getMicroSeconds</a>||
|magic public |<a href="#addmillenniums()">addMillenniums</a>||
|magic public |<a href="#addcenturys()">addCenturys</a>||
|magic public |<a href="#adddecades()">addDecades</a>||
|magic public |<a href="#addyears()">addYears</a>||
|magic public |<a href="#addquarters()">addQuarters</a>||
|magic public |<a href="#addmonths()">addMonths</a>||
|magic public |<a href="#addfortnights()">addFortnights</a>||
|magic public |<a href="#addweeks()">addWeeks</a>||
|magic public |<a href="#adddays()">addDays</a>||
|magic public |<a href="#addhours()">addHours</a>||
|magic public |<a href="#addminutes()">addMinutes</a>||
|magic public |<a href="#addseconds()">addSeconds</a>||
|magic public |<a href="#addmilliseconds()">addMilliSeconds</a>||
|magic public |<a href="#addmicroseconds()">addMicroSeconds</a>||
|magic public |<a href="#submillenniums()">subMillenniums</a>||
|magic public |<a href="#subcenturys()">subCenturys</a>||
|magic public |<a href="#subdecades()">subDecades</a>||
|magic public |<a href="#subyears()">subYears</a>||
|magic public |<a href="#subquarters()">subQuarters</a>||
|magic public |<a href="#submonths()">subMonths</a>||
|magic public |<a href="#subfortnights()">subFortnights</a>||
|magic public |<a href="#subweeks()">subWeeks</a>||
|magic public |<a href="#subdays()">subDays</a>||
|magic public |<a href="#subhours()">subHours</a>||
|magic public |<a href="#subminutes()">subMinutes</a>||
|magic public |<a href="#subseconds()">subSeconds</a>||
|magic public |<a href="#submilliseconds()">subMilliSeconds</a>||
|magic public |<a href="#submicroseconds()">subMicroSeconds</a>||
|private |<a href="#__construct()">__construct</a>|### Constructor|
|public |<a href="#__get()">__get</a>|### Reading from inaccessible properties|
|public |<a href="#__set()">__set</a>|### Writing to inaccessible properties|
|public |<a href="#__call()">__call</a>|### Invoking inaccessible methods in an object context|
|public static |<a href="#__callstatic()">__callStatic</a>|### Invoking inaccessible static methods in an object context|


# Properties
***


<h2><a name="$basic_units"># $basic_units</a></h2>
***

```php
private \FireHub\TheCore\Support\Enums\DateTime\Unit\Basic[] \FireHub\TheCore\Support\DateTime\Interval::$basic_units
```

### ### Basic units

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$basic_units**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L89)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

<h2><a name="$calculatable_units"># $calculatable_units</a></h2>
***

```php
private \FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable[] \FireHub\TheCore\Support\DateTime\Interval::$calculatable_units
```

### ### Units

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$calculatable_units**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L97)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 



# Methods
***


<h2><a name="millenniums()"># millenniums()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::millenniums()
```

_(int $number) ### Create interval specifying a number of millenniums_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::millenniums()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="centurys()"># centurys()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::centurys()
```

_(int $number) ### Create interval specifying a number of centurys_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::centurys()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="decades()"># decades()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::decades()
```

_(int $number) ### Create interval specifying a number of decades_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::decades()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="years()"># years()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::years()
```

_(int $number) ### Create interval specifying a number of years_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::years()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="quarters()"># quarters()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::quarters()
```

_(int $number) ### Create interval specifying a number of quarters_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::quarters()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="months()"># months()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::months()
```

_(int $number) ### Create interval specifying a number of months_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::months()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="fortnights()"># fortnights()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::fortnights()
```

_(int $number) ### Create interval specifying a number of fortnights_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::fortnights()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="weeks()"># weeks()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::weeks()
```

_(int $number) ### Create interval specifying a number of weeks_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::weeks()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="days()"># days()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::days()
```

_(int $number) ### Create interval specifying a number of days_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::days()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="hours()"># hours()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::hours()
```

_(int $number) ### Create interval specifying a number of hours_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::hours()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="minutes()"># minutes()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::minutes()
```

_(int $number) ### Create interval specifying a number of minutes_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::minutes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="seconds()"># seconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::seconds()
```

_(int $number) ### Create interval specifying a number of seconds_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::seconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="milliseconds()"># milliseconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::milliseconds()
```

_(int $number) ### Create interval specifying a number of milliseconds_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::milliseconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="microseconds()"># microSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public static \FireHub\TheCore\Support\DateTime\Interval::microSeconds()
```

_(int $number) ### Create interval specifying a number of microseconds_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::microSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getyears()"># getYears()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getYears()
```

_() ### Get years from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getYears()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getmonths()"># getMonths()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getMonths()
```

_() ### Get months from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getMonths()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getdays()"># getDays()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getDays()
```

_() ### Get days from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getDays()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="gethours()"># getHours()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getHours()
```

_() ### Get hours from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getHours()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getminutes()"># getMinutes()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getMinutes()
```

_() ### Get minutes from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getMinutes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getseconds()"># getSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getSeconds()
```

_() ### Get seconds from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="getmicroseconds()"># getMicroSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds()
```

_() ### Get microseconds from interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::getMicroSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addmillenniums()"># addMillenniums()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addMillenniums()
```

_(int $number) ### Add given number of millenniums to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addMillenniums()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addcenturys()"># addCenturys()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addCenturys()
```

_(int $number) ### Add given number of centurys to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addCenturys()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="adddecades()"># addDecades()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addDecades()
```

_(int $number) ### Add given number of decades to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addDecades()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addyears()"># addYears()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addYears()
```

_(int $number) ### Add given number of years to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addYears()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addquarters()"># addQuarters()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addQuarters()
```

_(int $number) ### Add given number of quarters to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addQuarters()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addmonths()"># addMonths()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addMonths()
```

_(int $number) ### Add given number of months to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addMonths()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addfortnights()"># addFortnights()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addFortnights()
```

_(int $number) ### Add given number of fortnights to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addFortnights()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addweeks()"># addWeeks()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addWeeks()
```

_(int $number) ### Add given number of weeks to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addWeeks()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="adddays()"># addDays()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addDays()
```

_(int $number) ### Add given number of days to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addDays()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addhours()"># addHours()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addHours()
```

_(int $number) ### Add given number of hours to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addHours()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addminutes()"># addMinutes()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addMinutes()
```

_(int $number) ### Add given number of minutes to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addMinutes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addseconds()"># addSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addSeconds()
```

_(int $number) ### Add given number of seconds to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addmilliseconds()"># addMilliSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addMilliSeconds()
```

_(int $number) ### Add given number of milliseconds to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addMilliSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="addmicroseconds()"># addMicroSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::addMicroSeconds()
```

_(int $number) ### Add given number of microseconds to the current intervaL_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::addMicroSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="submillenniums()"># subMillenniums()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subMillenniums()
```

_(int $number) ### Sub given number of millenniums to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subMillenniums()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subcenturys()"># subCenturys()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subCenturys()
```

_(int $number) ### Sub given number of centurys to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subCenturys()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subdecades()"># subDecades()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subDecades()
```

_(int $number) ### Sub given number of decades to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subDecades()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subyears()"># subYears()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subYears()
```

_(int $number) ### Sub given number of years to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subYears()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subquarters()"># subQuarters()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subQuarters()
```

_(int $number) ### Sub given number of quarters to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subQuarters()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="submonths()"># subMonths()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subMonths()
```

_(int $number) ### Sub given number of months to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subMonths()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subfortnights()"># subFortnights()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subFortnights()
```

_(int $number) ### Sub given number of fortnights to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subFortnights()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subweeks()"># subWeeks()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subWeeks()
```

_(int $number) ### Sub given number of weeks to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subWeeks()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subdays()"># subDays()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subDays()
```

_(int $number) ### Sub given number of days to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subDays()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subhours()"># subHours()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subHours()
```

_(int $number) ### Sub given number of hours to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subHours()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subminutes()"># subMinutes()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subMinutes()
```

_(int $number) ### Sub given number of minutes to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subMinutes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="subseconds()"># subSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subSeconds()
```

_(int $number) ### Sub given number of seconds to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="submilliseconds()"># subMilliSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subMilliSeconds()
```

_(int $number) ### Sub given number of milliseconds to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subMilliSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="submicroseconds()"># subMicroSeconds()</a></h2>
***

{: .note }
> This method is marked as **magic** and implements the __get() and/or __set() "magic" methods to resolve non-literal properties at run-time.


```php
public \FireHub\TheCore\Support\DateTime\Interval::subMicroSeconds()
```

_(int $number) ### Sub given number of microseconds to the current interval_

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::subMicroSeconds()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L0)**</sub><br>


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
private \FireHub\TheCore\Support\DateTime\Interval::__construct()
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L108)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Arr::merge()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#merge()) _To merge all calculatable enums._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::cases()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic#cases()) _To get all basic unit enums._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Days::cases()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Days#cases()) _To get all days unit enums._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Microseconds::cases()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Microseconds#cases()) _To get all days unit enums._

<h2><a name="__get()"># __get()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Interval::__get(string $name):int
```

### ### Reading from inaccessible properties

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__get()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L138)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Arr::merge()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#merge()) _To merge all unit enums._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable::plural()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Calculatable#plural()) _To get plural of enum case._

### Parameters:

* string $name _Property name._

### Throws:

* [\Error](/thecore/v0.2\Error) _If called property doest&#039;t exist._

### Returns:

* int _Property value._

<h2><a name="__set()"># __set()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Interval::__set(string $name, mixed $value):void
```

### ### Writing to inaccessible properties

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__set()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L182)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Arr::merge()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\Arr#merge()) _To merge all unit enums._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::plural()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic#plural()) _To get plural of enum case._

### Parameters:

* string $name _Property name._
* mixed $value _Property value._

### Throws:

* [\Error](/thecore/v0.2\Error) _If called property doest&#039;t exist._

### Returns:

* void 

<h2><a name="__call()"># __call()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Interval::__call(string $method, array $arguments):self|int
```

### ### Invoking inaccessible methods in an object context

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__call()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L235)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\StrSB::startsWith()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#startswith()) _To check with what method argument starts._
* [\FireHub\TheCore\Support\LowLevel\StrSB::toLower()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#tolower()) _To lowercase method name._
* [\FireHub\TheCore\Support\LowLevel\StrSB::part()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#part()) _To extract part of method name._
* [\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic::plural()](/thecore/v0.2\FireHub\TheCore\Support\Enums\DateTime\Unit\Basic#plural()) _To get plural from enum case._

### Parameters:

* string $method _Method name._
* array $arguments 

### Throws:

* [\Error](/thecore/v0.2\Error) _If called method doest&#039;t exist._
* [\Error](/thecore/v0.2\Error) _If method doest&#039;t have first parameter._

### Returns:

* self or int _New interval for add or sub methods, or int for get method is called._

<h2><a name="__callstatic()"># __callStatic()</a></h2>
***

```php
public static \FireHub\TheCore\Support\DateTime\Interval::__callStatic(string $method, array $arguments):self
```

### ### Invoking inaccessible static methods in an object context

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__callStatic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L282)**</sub><br>

### Changelog:

* **0.2.1.pre-alpha.M2** 

### Parameters:

* string $method _Method name._
* array $arguments 

### Returns:

* self _New interval._


