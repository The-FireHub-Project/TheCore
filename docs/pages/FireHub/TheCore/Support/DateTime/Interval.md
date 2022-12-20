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
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/datetime/firehub.Interval.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/datetime/firehub.Interval.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.2.0.pre-alpha.M2** 


## This class is used by
***

* *As parameter.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|public int|<a href="#$years">years</a>||0|
|public int|<a href="#$months">months</a>||0|
|readonly private int|<a href="#$weeks">weeks</a>||0|
|public int|<a href="#$days">days</a>||0|
|public int|<a href="#$hours">hours</a>||0|
|public int|<a href="#$minutes">minutes</a>||0|
|public int|<a href="#$seconds">seconds</a>||0|
|public int|<a href="#$microseconds">microseconds</a>||0|


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#__construct()">__construct</a>|### Constructor|


# Properties
***


<h2><a name="$years"># $years</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$years
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$years**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L55)**</sub><br>


<h2><a name="$months"># $months</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$months
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$months**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L56)**</sub><br>


<h2><a name="$weeks"># $weeks</a></h2>
***

{: .note }
> This property is marked as **readonly** and can't be overwritten.


```php
readonly private int \FireHub\TheCore\Support\DateTime\Interval::$weeks
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$weeks**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L57)**</sub><br>


<h2><a name="$days"># $days</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$days
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$days**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L58)**</sub><br>


<h2><a name="$hours"># $hours</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$hours
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$hours**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L59)**</sub><br>


<h2><a name="$minutes"># $minutes</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$minutes
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$minutes**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L60)**</sub><br>


<h2><a name="$seconds"># $seconds</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$seconds
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$seconds**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L61)**</sub><br>


<h2><a name="$microseconds"># $microseconds</a></h2>
***

```php
public int \FireHub\TheCore\Support\DateTime\Interval::$microseconds
```

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Support\DateTime\Interval::$microseconds**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L62)**</sub><br>




# Methods
***


<h2><a name="__construct()"># __construct()</a></h2>
***

```php
public \FireHub\TheCore\Support\DateTime\Interval::__construct(int $years, int $months, int $weeks, int $days, int $hours, int $minutes, int $seconds, int $microseconds)
```

### ### Constructor

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\DateTime\Interval::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/datetime/firehub.Interval.php#L54)**</sub><br>

### Changelog:

* **0.2.0.pre-alpha.M2** 

### Parameters:

* int $years _[optional] 
Number of years._
* int $months _[optional] 
Number of months._
* int $weeks _[optional] 
Number of weeks._
* int $days _[optional] 
Number of days._
* int $hours _[optional] 
Number of hours._
* int $minutes _[optional] 
Number of minutes._
* int $seconds _[optional] 
Number of seconds._
* int $microseconds _[optional] 
Number of microseconds._


