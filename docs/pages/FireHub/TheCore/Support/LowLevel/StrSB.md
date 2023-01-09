---
layout: default
title: StrSB
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# StrSB

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\StrSB()
```

### ### String single-byte low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\StrSB**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Parent class:  **[\FireHub\TheCore\Support\LowLevel\StrSafe](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSafe)**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L60)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.StrSB.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.StrSB.php)**</sub><br>

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
|public static |<a href="#length()">length</a>|### Get string length|
|public static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence of a substring in a string|
|public static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence of a substring in a string|
|public static |<a href="#part()">part</a>|### Get part of string|
|public static |<a href="#partcount()">partCount</a>|### Get part of string|
|public static |<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|public static |<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public static |<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public static |<a href="#totitle()">toTitle</a>|### Make a string title-cased|
|public static |<a href="#capitalize()">capitalize</a>|### Make a first charater of string uppercased|
|public static |<a href="#decapitalize()">deCapitalize</a>|### Make a first charater of string lowercased|
|public static |<a href="#split()">split</a>|### Convert a string to an array|
|public static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|public static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|public static |<a href="#wrap()">wrap</a>|### Wraps a string to a given number of characters|
|public static |<a href="#chr()">chr</a>|### Generate a single-byte string from a number|
|public static |<a href="#ord()">ord</a>|### Get Unicode code point of character|
|public static |<a href="#partfrom()">partFrom</a>|### Find part of a string with characters|
|public static |<a href="#compare()">compare</a>|### Compare two strings|
|public static |<a href="#segmentmatching()">segmentMatching</a>|### Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask|
|public static |<a href="#segmentnotmatching()">segmentNotMatching</a>|### Find length of initial segment not matching mask|
|public static |<a href="#countwords()">countWords</a>|### Count number of words in string|
|public static |<a href="#translate()">translate</a>|### Translate a string|
|inherited public static |<a href="#isstring()">isString</a>|### Checks if value is string|
|inherited public static |<a href="#isempty()">isEmpty</a>|### Checks if value is empty|
|inherited public static |<a href="#replace()">replace</a>|### Checks if a string ends with a given value|
|inherited public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public static |<a href="#explode()">explode</a>|### Split a string by a string|
|inherited public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|inherited public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|inherited public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|inherited public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|


# Methods
***


<h2><a name="isstring()"># isString()</a></h2>
***

```php
final public static \FireHub\TheCore\Support\LowLevel\StrSafe::isString(mixed $value)
```

### ### Checks if value is string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::isString()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L62)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\DataIs::string()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#string()) _To check if value is string._

### Parameters:

* mixed $value _Value to check._

<h2><a name="isempty()"># isEmpty()</a></h2>
***

```php
final public static \FireHub\TheCore\Support\LowLevel\StrSafe::isEmpty(string $value)
```

### ### Checks if value is empty

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L78)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $value _Value to check._

<h2><a name="replace()"># replace()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::replace(string|array<int,string> $search, string|array $replace, string $string, bool $case_sensitive = true, int|null &$count = null):string
```

### ### Checks if a string ends with a given value

_Note that multibyte characters may not work as expected while $case_sensitive is on._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::replace()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L109)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string or array&lt;int,string&gt; $search _The replacement value that replaces found search values.
An array may be used to designate multiple replacements._
* string or array $replace 
* string $string _The value being searched for._
* bool $case_sensitive = true _[optional] 
Searched values are case-insensitive._
* by refrence int or null $count = null _[optional] 
If passed, this will hold the number of matched and replaced needles._

### Returns:

* string _String with the replaced values._

<h2><a name="repeat()"># repeat()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::repeat(string $string, int<1, max> $times, string $separator = ''):string
```

### ### Repeat a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::repeat()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L134)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string to be repeated._
* int&lt;1, max&gt; $times _Number of time the input string should be repeated.
Multiplier has to be greater than or equal to 0. If the multiplier is set to 0, the function will return an empty string._
* string $separator = '' _[optional] 
Seperator in between any repeated string._

### Returns:

* string _Repeated string._

<h2><a name="explode()"># explode()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::explode(string $string, non-empty-string $separator, int $limit = PHP_INT_MAX):string[]|false
```

### ### Split a string by a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::explode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L158)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _String being exploded._
* non-empty-string $separator _Boundary string._
* int $limit = PHP_INT_MAX _[optional] 
If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.
If the limit parameter is negative, all components except the last -limit are returned.
If the limit parameter is zero, then this is treated as 1._

### Returns:

* string[] or false _If delimiter contains a value that is not contained in string and a negative limit is used, then an empty array will be returned. For any other limit, an array containing string will be returned. Returnes false is seperator is empty._

<h2><a name="implode()"># implode()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::implode(string[] $array, string $separator = ''):string
```

### ### Join array elements with a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::implode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L178)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string[] $array _The array of strings to implode._
* string $separator = '' _[optional] 
Defaults to an empty string. This is not the preferred usage of implode as glue would be the second parameter and thus,
the bad prototype would be used._

### Returns:

* string _A string containing a string representation of all the array elements in the same order, with the glue string between each element._

<h2><a name="striptags()"># stripTags()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::stripTags(string $string, null|string|string[] $allowed_tags = null):string
```

### ### Strip HTML and PHP tags from a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::stripTags()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L197)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _A string to strip tags._
* null or string or string[] $allowed_tags = null _Specify tags which should not be stripped._

### Returns:

* string _the Stripped string._

<h2><a name="stripslashes()"># stripSlashes()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::stripSlashes(string $string):string
```

### ### Un-quotes a quoted string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::stripSlashes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L213)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _A string to un-quote._

### Returns:

* string _A string with backslashes stripped off. (\&#039; becomes &#039; and so on.) Double backslashes (\\) are made into a single backslash (\)._

<h2><a name="trim()"># trim()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::trim(string $string, \FireHub\TheCore\Support\Enums\Side $side = Side::BOTH, string $characters = " 
	 "):string
```

### ### Strip whitespace (or other characters) from the beginning and end of a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::trim()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L240)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Side::BOTH](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side#both) _As parameter._
* [\FireHub\TheCore\Support\Enums\Side::LEFT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side#left) _If $side parameter is set to left._
* [\FireHub\TheCore\Support\Enums\Side::RIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side#right) _If $side parameter is set to right._

### This method is used by:

* *To trim characters for each line in file.*

* *To trim characters for each line in file.*

* *To trim characters for each line in file.*


### Parameters:

* string $string _The string that will be trimmed._
* [\FireHub\TheCore\Support\Enums\Side](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side) $side = Side::BOTH _[optional] 
Side to trim string._
* string $characters = " 
	 " _[optional] 
The stripped characters can also be specified using the char-list parameter.
Simply list all characters that you want to be stripped._

### Returns:

* string _The trimmed string._

<h2><a name="contains()"># contains()</a></h2>
***

```php
final public static \FireHub\TheCore\Support\LowLevel\StrSafe::contains(string $value, string $string, bool $case_sensitive = true):bool
```

### ### Checks if string contains value

_Performs a case-sensitive check indicating bif $string is contained in $string._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::contains()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L268)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive string._

### Returns:

* bool _True if string contains value, false otherwise._

<h2><a name="startswith()"># startsWith()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::startsWith(string $value, string $string):bool
```

### ### Checks if a string starts with a given value

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::startsWith()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L289)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._

### Returns:

* bool _True if string starts with value, false otherwise._

<h2><a name="endswith()"># endsWith()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSafe::endsWith(string $value, string $string):bool
```

### ### Checks if a string ends with a given value

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::endsWith()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L308)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._

### Returns:

* bool _True if string ends with value, false otherwise._

<h2><a name="length()"># length()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::length(string $string)
```

### ### Get string length

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::length()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L65)**</sub><br>


### Parameters:

* string $string _The string being measured for length._

### Returns:

* positive-int or [\FireHub\TheCore\Support\LowLevel\0](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\0) _String length._

<h2><a name="firstposition()"># firstPosition()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset)
```

### ### Find the position of the first occurrence of a substring in a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::firstPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L87)**</sub><br>


### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._
* int $offset _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._

### Returns:

* int or false _Numeric position of the first occurrence or false if none exist._

<h2><a name="lastposition()"># lastPosition()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset)
```

### ### Find the position of the last occurrence of a substring in a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::lastPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L111)**</sub><br>


### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._
* int $offset _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._

### Returns:

* int or false _Numeric position of the last occurrence or false if none exist._

<h2><a name="part()"># part()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::part(string $string, int $start, null|int $length = null)
```

### ### Get part of string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::part()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L135)**</sub><br>


### This method is used by:

* *To extract part of method name.*

* *To get part of microtime.*


### Parameters:

* string $string _The string to extract the substring from._
* int $start _If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string &#039;abcdef&#039;, the character at position 0 is &#039;a&#039;, the character at position 2 is &#039;c&#039;, and so forth.
If start is negative, the returned string will start at the start character from the end of string._
* null or int $length = null _[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string._

### Returns:

* string _The portion of string specified by the start and length parameters._

<h2><a name="partcount()"># partCount()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::partCount(string $string, string $search, int $start, null|int $length = null)
```

### ### Get part of string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::partCount()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L157)**</sub><br>


### Parameters:

* string $string _The string being checked._
* string $search _The string being found._
* int $start _[optional] 
The offset where to start counting. If the offset is negative, counting starts from the end of the string.._
* null or int $length = null _[optional] 
The maximum length after the specified offset to search for the substring. It outputs a warning if the offset plus the length is greater than the $string length. A negative length counts from the end of $string._

### Returns:

* int _Number of times the searched substring occurs in the string._

<h2><a name="pad()"># pad()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::pad(string $string, int $length, string $pad = " ", \FireHub\TheCore\Support\Enums\Side $side = Side::RIGHT)
```

### ### Pad a string to a certain length with another string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::pad()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L168)**</sub><br>


### This method uses:

* [\FireHub\TheCore\Support\Enums\Side::RIGHT](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side#right) _As parameter._

### Parameters:

* string $string _The string being padded._
* int $length _If the value of pad_length is negative, less than, or equal to the length of the input string, no padding takes place._
* string $pad = " " _[optional] 
The pad_string may be truncated if the required number of padding characters can&#039;t be evenly divided by the pad_string&#039;s length._
* [\FireHub\TheCore\Support\Enums\Side](/thecore/v0.2\FireHub\TheCore\Support\Enums\Side) $side = Side::RIGHT _[optional] 
Pad side._

### Returns:

* string or false _Padded string, false otherwise._

<h2><a name="tolower()"># toLower()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::toLower(string $string)
```

### ### Make a string lowercase

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::toLower()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L177)**</sub><br>


### This method is used by:

* *To lowercase method name.*


### Parameters:

* string $string _The string being lowercased._

### Returns:

* string _String with all alphabetic characters converted to lowercase._

<h2><a name="toupper()"># toUpper()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::toUpper(string $string)
```

### ### Make a string uppercase

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::toUpper()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L186)**</sub><br>


### This method is used by:

* *To convert both strings to uppercase.*


### Parameters:

* string $string _The string being uppercased._

### Returns:

* string _String with all alphabetic characters converted to uppercase._

<h2><a name="totitle()"># toTitle()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::toTitle(string $string)
```

### ### Make a string title-cased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::toTitle()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L195)**</sub><br>


### Parameters:

* string $string _The string being title cased._

### Returns:

* string _String with title-cased conversion._

<h2><a name="capitalize()"># capitalize()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::capitalize(string $string)
```

### ### Make a first charater of string uppercased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::capitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L204)**</sub><br>


### Parameters:

* string $string _The string being converted._

### Returns:

* string _String with first charater uppercased._

<h2><a name="decapitalize()"># deCapitalize()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::deCapitalize(string $string)
```

### ### Make a first charater of string lowercased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::deCapitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L213)**</sub><br>


### Parameters:

* string $string _The string being converted._

### Returns:

* string _String with first charater lowercased._

<h2><a name="split()"># split()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::split(string $string, int $length = 1)
```

### ### Convert a string to an array

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::split()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L222)**</sub><br>


### Parameters:

* string $string _The string being split._
* int $length = 1 _[optional] 
If specified, each element of the returned array will be composed of multiple characters instead of a single character._

### Returns:

* array&lt;int,string&gt; _If the optional length parameter is specified, the returned array will be broken down into chunks with each being length in length, except the final chunk which may be shorter if the string does not divide evenly. The default length is 1, meaning every chunk will be one byte in size._

<h2><a name="firstpart()"># firstPart()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true)
```

### ### Find first part of a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::firstPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L231)**</sub><br>


### Parameters:

* string $find _String to find._
* string $string _The string being searched._
* bool $before_needle = false _[optional] 
If true, returns the part of the string before the first occurrence (excluding the find string)._
* bool $case_sensitive = true _[optional] 
Is string to find case-sensitive or not._

### Returns:

* string or false _The portion of string, or false if needle is not found._

<h2><a name="lastpart()"># lastPart()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::lastPart(string $find, string $string)
```

### ### Find last part of a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::lastPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L242)**</sub><br>


### Parameters:

* string $find _String to find._
* string $string _The string being searched._

### Returns:

* string or false _The portion of string, or false if needle is not found._

<h2><a name="wrap()"># wrap()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::wrap(string $string, int $width = 75, string $break = "
", bool $cut_long_words = false)
```

### ### Wraps a string to a given number of characters

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::wrap()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L251)**</sub><br>


### Parameters:

* string $string _The string to warp._
* int $width = 75 _[optional] 
The column width._
* string $break = "
" _[optional] 
The line is broken using the optional break parameter._
* bool $cut_long_words = false _[optional] 
If the cut is set to true, the string is always wrapped at or before the specified width.
So if you have a word that is larger than the given width, it is broken apart._

### Returns:

* string _The given string wrapped at the specified column, false otherwise._

<h2><a name="chr()"># chr()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::chr(int $number)
```

### ### Generate a single-byte string from a number

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::chr()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L260)**</sub><br>


### Parameters:

* int $number _ASCII code._

### Returns:

* string _The specified character, false otherwise._

<h2><a name="ord()"># ord()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::ord(string $string)
```

### ### Get Unicode code point of character

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::ord()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L269)**</sub><br>


### Parameters:

* string $string _A character._

### Returns:

* int _The ASCII value as an integer, false otherwise._

<h2><a name="partfrom()"># partFrom()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::partFrom(string $characters, string $string):string|false
```

### ### Find part of a string with characters

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::partFrom()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L290)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $characters _Characters to find.

This parameter is case-sensitive._
* string $string _The string being searched._

### Returns:

* string or false 

<h2><a name="compare()"># compare()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::compare(string $string_1, string $string_2, bool $case_sensitive = true):bool
```

### ### Compare two strings

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::compare()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L314)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\StrSB::toUpper()](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\StrSB#toupper()) _To convert both strings to uppercase._

### Parameters:

* string $string_1 _String to compare against._
* string $string_2 _String to compare with._
* bool $case_sensitive = true _[optional] 
Is comparison case-sensitive or not._

### Returns:

* bool _True if two strings are same, false otherwise._

<h2><a name="segmentmatching()"># segmentMatching()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::segmentMatching(string $string, string $characters, int $offset, int|null $length = null):int
```

### ### Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::segmentMatching()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L345)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string to examine._
* string $characters _The list of allowable characters._
* int $offset _[optional] 
The position in subject to start searching.
If start is given and is non-negative, then strspn will begin examining subject at the start position. For instance, in the string &#039;abcdef&#039;, the character at position 0 is &#039;a&#039;, the character at position 2 is &#039;c&#039;, and so forth.
If start is given and is negative, then strspn will begin examining subject at the start position from the end of subject._
* int or null $length = null _[optional] 
The length of the segment from subject to examine.
If length is given and is non-negative, then subject will be examined for length characters after the starting position.
If length is given and is negative, then subject will be examined from the starting position up to length characters from the end of subject._

### Returns:

* int _The length of the initial segment of string which consists entirely of characters in characters._

<h2><a name="segmentnotmatching()"># segmentNotMatching()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::segmentNotMatching(string $string, string $characters, int $offset, int|null $length = null):int
```

### ### Find length of initial segment not matching mask

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::segmentNotMatching()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L374)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string to examine._
* string $characters _The string containing every disallowed character._
* int $offset _[optional] 
The position in subject to start searching.
If start is given and is non-negative, then strspn will begin examining subject at the start position. For instance, in the string &#039;abcdef&#039;, the character at position 0 is &#039;a&#039;, the character at position 2 is &#039;c&#039;, and so forth.
If start is given and is negative, then strspn will begin examining subject at the start position from the end of subject._
* int or null $length = null _[optional] 
The length of the segment from subject to examine.
If length is given and is non-negative, then subject will be examined for length characters after the starting position.
If length is given and is negative, then subject will be examined from the starting position up to length characters from the end of subject._

### Returns:

* int _The length of the initial segment of string which consists entirely of characters not in characters._

<h2><a name="countwords()"># countWords()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::countWords(string $string, null|string $characters = nulL, \FireHub\TheCore\Support\LowLevel\0|\FireHub\TheCore\Support\LowLevel\1|\FireHub\TheCore\Support\LowLevel\2 $format):int|array<int,string>|false
```

### ### Count number of words in string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::countWords()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L402)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _A string to search words._
* null or string $characters = nulL _[optional] 
A list of additional characters which will be considered as &#039;word&#039;._
* [\FireHub\TheCore\Support\LowLevel\0](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\0) or [\FireHub\TheCore\Support\LowLevel\1](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\1) or [\FireHub\TheCore\Support\LowLevel\2](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\2) $format _[optional] 
A string to search words.

0 - returns the number of words found.

1 - returns an array containing all the words found inside the string.

2 - returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself._

### Returns:

* int or array&lt;int,string&gt; or false _Number of words found or list of words._

<h2><a name="translate()"># translate()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\StrSB::translate(string $string, array<string,string> $pairs):string
```

### ### Translate a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSB::translate()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSB.php#L421)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _A string to translate._
* array&lt;string,string&gt; $pairs _An array of key-value pairs for translation._

### Returns:

* string _Translated string._


