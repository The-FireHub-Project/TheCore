---
layout: default
title: StrSafe
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# StrSafe

{: .note }
> This is an **abstract** class that cannot be instantiated directly.


```php
abstract class \FireHub\TheCore\Support\LowLevel\StrSafe()
```

### ### String safe low level class

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L48)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.StrSafe.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.StrSafe.php)**</sub><br>

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
|public static |<a href="#isstring()">isString</a>|### Checks if value is string|
|public static |<a href="#isempty()">isEmpty</a>|### Checks if value is empty|
|public static |<a href="#replace()">replace</a>|### Checks if a string ends with a given value|
|public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|public static |<a href="#explode()">explode</a>|### Split a string by a string|
|public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
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
public static \FireHub\TheCore\Support\LowLevel\StrSafe::replace(string|array $search, string|array $replace, string $string, bool $case_sensitive = true, int &$count = null):string
```

### ### Checks if a string ends with a given value

_Note that multibyte characters may not work as expected while $case_sensitive is on._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::replace()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L109)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string or array $search 
* string or array $replace 
* string $string _The value being searched for._
* bool $case_sensitive = true _[optional] 
Searched values are case-insensitive._
* by refrence int $count = null _[optional] 
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

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::length(string $string):positive-int|\FireHub\TheCore\Support\LowLevel\0
```

### ### Get string length

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::length()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L324)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being measured for length._

### Returns:

* positive-int or [\FireHub\TheCore\Support\LowLevel\0](/thecore/v0.2\FireHub\TheCore\Support\LowLevel\0) _String length._

<h2><a name="firstposition()"># firstPosition()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::firstPosition(string $search, string $string, bool $case_sensitive = true):int|false
```

### ### Find the position of the first occurrence of a substring in a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::firstPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L342)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._

### Returns:

* int or false _Numeric position of the first occurrence or false if none exist._

<h2><a name="lastposition()"># lastPosition()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::lastPosition(string $search, string $string, bool $case_sensitive = true):int|false
```

### ### Find the position of the last occurrence of a substring in a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::lastPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L360)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._

### Returns:

* int or false _Numeric position of the last occurrence or false if none exist._

<h2><a name="part()"># part()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::part(string $string, int $start, null|int $length = null):string
```

### ### Get part of string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::part()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L381)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To extract substring from string.*

* *To extract substring from string.*


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

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::partCount(string $string, string $search):int
```

### ### Get part of string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::partCount()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L396)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being checked._
* string $search _The string being found._

### Returns:

* int _Number of times the searched substring occurs in the string._

<h2><a name="pad()"># pad()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::pad(string $string, int $length, string $pad = " ", \FireHub\TheCore\Support\Enums\Side $side = Side::RIGHT):string|false
```

### ### Pad a string to a certain length with another string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::pad()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L419)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

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

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::toLower(string $string):string
```

### ### Make a string lowercase

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::toLower()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L431)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being lowercased._

### Returns:

* string _String with all alphabetic characters converted to lowercase._

<h2><a name="toupper()"># toUpper()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::toUpper(string $string):string
```

### ### Make a string uppercase

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::toUpper()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L443)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being uppercased._

### Returns:

* string _String with all alphabetic characters converted to uppercase._

<h2><a name="totitle()"># toTitle()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::toTitle(string $string):string
```

### ### Make a string title-cased

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::toTitle()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L455)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being title cased._

### Returns:

* string _String with title-cased conversion._

<h2><a name="capitalize()"># capitalize()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::capitalize(string $string):string
```

### ### Make a first charater of string uppercased

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::capitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L467)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being converted._

### Returns:

* string _String with first charater uppercased._

<h2><a name="decapitalize()"># deCapitalize()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::deCapitalize(string $string):string
```

### ### Make a first charater of string lowercased

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::deCapitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L479)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being converted._

### Returns:

* string _String with first charater lowercased._

<h2><a name="split()"># split()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::split(string $string, int<1, max> $length = 1):array<int,string>
```

### ### Convert a string to an array

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::split()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L494)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _The string being split._
* int&lt;1, max&gt; $length = 1 _[optional] 
If specified, each element of the returned array will be composed of multiple characters instead of a single character._

### Returns:

* array&lt;int,string&gt; _If the optional length parameter is specified, the returned array will be broken down into chunks with each being length in length, except the final chunk which may be shorter if the string does not divide evenly. The default length is 1, meaning every chunk will be one byte in size._

<h2><a name="firstpart()"># firstPart()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true):string|false
```

### ### Find first part of a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::firstPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L515)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

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

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::lastPart(string $find, string $string):string|false
```

### ### Find last part of a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::lastPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L530)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $find _String to find._
* string $string _The string being searched._

### Returns:

* string or false _The portion of string, or false if needle is not found._

<h2><a name="wrap()"># wrap()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::wrap(string $string, int $width = 75, string $break = "
", bool $cut_long_words = false):string
```

### ### Wraps a string to a given number of characters

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::wrap()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L552)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

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

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::chr(int $number):string
```

### ### Generate a single-byte string from a number

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::chr()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L564)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* int $number _ASCII code._

### Returns:

* string _The specified character, false otherwise._

<h2><a name="ord()"># ord()</a></h2>
***

{: .note }
> This is an **abstract** method that cannot be instantiated directly.


```php
abstract public static \FireHub\TheCore\Support\LowLevel\StrSafe::ord(string $string):int
```

### ### Get Unicode code point of character

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::ord()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L576)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $string _A character._

### Returns:

* int _The ASCII value as an integer, false otherwise._


