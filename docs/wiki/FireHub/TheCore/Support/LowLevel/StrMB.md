
```php
class \FireHub\TheCore\Support\LowLevel\StrMB()
```

### ### String multi-byte low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\StrMB**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L58)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.StrMB.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.StrMB.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#isstring()">isString</a>|### Checks if value is string|
|static |<a href="#isempty()">isEmpty</a>|### Checks if value is empty|
|static |<a href="#replace()">replace</a>|### Checks if a string ends with a given value|
|static |<a href="#repeat()">repeat</a>|### Repeat a string|
|static |<a href="#explode()">explode</a>|### Split a string by a string|
|static |<a href="#implode()">implode</a>|### Join array elements with a string|
|static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|static |<a href="#contains()">contains</a>|### Checks if string contains value|
|static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|static |<a href="#length()">length</a>|### Get string length|
|static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence of a substring in a string|
|static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence of a substring in a string|
|static |<a href="#part()">part</a>|### Get part of string|
|static |<a href="#partcount()">partCount</a>|### Get part of string|
|static |<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|static |<a href="#tolower()">toLower</a>|### Make a string lowercase|
|static |<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|static |<a href="#totitle()">toTitle</a>|### Make a string title-cased|
|static |<a href="#capitalize()">capitalize</a>|### Make a first charater of string uppercased|
|static |<a href="#decapitalize()">deCapitalize</a>|### Make a first charater of string lowercased|
|static |<a href="#split()">split</a>|### Convert a string to an array|
|static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|static |<a href="#wrap()">wrap</a>|### Wraps a string to a given number of characters|
|static |<a href="#chr()">chr</a>|### Generate a single-byte string from a number|
|static |<a href="#ord()">ord</a>|### Get Unicode code point of character|
|static |<a href="#convertencoding()">convertEncoding</a>|### Convert a string from one character encoding to another|
|static |<a href="#detectencoding()">detectEncoding</a>|### Detect character encoding|
|static |<a href="#htmlencode()">htmlEncode</a>|### Convert all applicable characters to HTML entities|
|static |<a href="#htmldecode()">htmlDecode</a>|### Convert HTML entities to their corresponding characters|


# Methods


<h2><a name="isstring()"># isString()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::isString(mixed $value)
```

### ### Checks if value is string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::isString()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L62)**</sub><br>


### Parameters:

* mixed $value _Value to check._

<h2><a name="isempty()"># isEmpty()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::isEmpty(string $value)
```

### ### Checks if value is empty
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L78)**</sub><br>


### Parameters:

* string $value _Value to check._

<h2><a name="replace()"># replace()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::replace(string|array<int,string> $search, string|array<int,string> $replace, string $string, bool $case_sensitive = true, int|null &$count = null):string
```

### ### Checks if a string ends with a given value

_Note that multibyte characters may not work as expected while $case_sensitive is on._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::replace()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L109)**</sub><br>


### Parameters:

* string or array&lt;int,string&gt; $search _The replacement value that replaces found search values.
An array may be used to designate multiple replacements._
* string or array&lt;int,string&gt; $replace _The string being searched and replaced on._
* string $string _The value being searched for._
* bool $case_sensitive = true _[optional] 
Searched values are case-insensitive._
* by refrence int or null $count = null _[optional] 
If passed, this will hold the number of matched and replaced needles._

### Returns:

* string _String with the replaced values._

<h2><a name="repeat()"># repeat()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::repeat(string $string, int<1, max> $times, string $separator = ''):string
```

### ### Repeat a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::repeat()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L134)**</sub><br>


### Parameters:

* string $string _The string to be repeated._
* int&lt;1, max&gt; $times _Number of time the input string should be repeated.
Multiplier has to be greater than or equal to 0. If the multiplier is set to 0, the function will return an empty string._
* string $separator = '' _[optional] 
Seperator in between any repeated string._

### Returns:

* string _Repeated string._

<h2><a name="explode()"># explode()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::explode(string $string, non-empty-string $separator, int $limit = PHP_INT_MAX):string[]|false
```

### ### Split a string by a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::explode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L158)**</sub><br>


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

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::implode(string[] $array, string $separator = ''):string
```

### ### Join array elements with a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::implode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L178)**</sub><br>


### Parameters:

* string[] $array _The array of strings to implode._
* string $separator = '' _[optional] 
Defaults to an empty string. This is not the preferred usage of implode as glue would be the second parameter and thus,
the bad prototype would be used._

### Returns:

* string _A string containing a string representation of all the array elements in the same order, with the glue string between each element._

<h2><a name="striptags()"># stripTags()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::stripTags(string $string, null|string|string[] $allowed_tags = null):string
```

### ### Strip HTML and PHP tags from a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::stripTags()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L197)**</sub><br>


### Parameters:

* string $string _A string to strip tags._
* null or string or string[] $allowed_tags = null _Specify tags which should not be stripped._

### Returns:

* string _the Stripped string._

<h2><a name="stripslashes()"># stripSlashes()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::stripSlashes(string $string):string
```

### ### Un-quotes a quoted string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::stripSlashes()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L213)**</sub><br>


### Parameters:

* string $string _A string to un-quote._

### Returns:

* string _A string with backslashes stripped off. (\&#039; becomes &#039; and so on.) Double backslashes (\\) are made into a single backslash (\)._

<h2><a name="trim()"># trim()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::trim(string $string, \FireHub\TheCore\Support\Enums\Side $side = Side::BOTH, string $characters = " 
	 "):string
```

### ### Strip whitespace (or other characters) from the beginning and end of a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::trim()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L240)**</sub><br>


### Parameters:

* string $string _The string that will be trimmed._
* [\FireHub\TheCore\Support\Enums\Side](./Side) $side = Side::BOTH _[optional] 
Side to trim string._
* string $characters = " 
	 " _[optional] 
The stripped characters can also be specified using the char-list parameter.
Simply list all characters that you want to be stripped._

### Returns:

* string _The trimmed string._

<h2><a name="contains()"># contains()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::contains(string $value, string $string, bool $case_sensitive = true):bool
```

### ### Checks if string contains value

_Performs a case-sensitive check indicating bif $string is contained in $string._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::contains()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L268)**</sub><br>


### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive string._

### Returns:

* bool _True if string contains value, false otherwise._

<h2><a name="startswith()"># startsWith()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::startsWith(string $value, string $string):bool
```

### ### Checks if a string starts with a given value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::startsWith()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L289)**</sub><br>


### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._

### Returns:

* bool _True if string starts with value, false otherwise._

<h2><a name="endswith()"># endsWith()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrSafe::endsWith(string $value, string $string):bool
```

### ### Checks if a string ends with a given value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrSafe::endsWith()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrSafe.php#L308)**</sub><br>


### Parameters:

* string $value _The value to search for._
* string $string _The string to search in._

### Returns:

* bool _True if string ends with value, false otherwise._

<h2><a name="length()"># length()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::length(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Get string length

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::length()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L72)**</sub><br>


### Parameters:

* string $string _The string being measured for length._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* positive-int or [\FireHub\TheCore\Support\LowLevel\0](./0) _String length._

<h2><a name="firstposition()"># firstPosition()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Find the position of the first occurrence of a substring in a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::firstPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L99)**</sub><br>


### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._
* int $offset _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* int or false _Numeric position of the first occurrence or false if none exist._

<h2><a name="lastposition()"># lastPosition()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Find the position of the last occurrence of a substring in a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::lastPosition()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L128)**</sub><br>


### Parameters:

* string $search _A string to find position._
* string $string _The string to search in._
* bool $case_sensitive = true _[optional] 
Search case-sensitive position._
* int $offset _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* int or false _Numeric position of the last occurrence or false if none exist._

<h2><a name="part()"># part()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::part(string $string, int $start, null|int $length = null, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Get part of string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::part()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L157)**</sub><br>


### Parameters:

* string $string _The string to extract the substring from._
* int $start _If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string &#039;abcdef&#039;, the character at position 0 is &#039;a&#039;, the character at position 2 is &#039;c&#039;, and so forth.
If start is negative, the returned string will start at the start character from the end of string._
* null or int $length = null _[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _The portion of string specified by the start and length parameters._

<h2><a name="partcount()"># partCount()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::partCount(string $string, string $search, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Get part of string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::partCount()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L178)**</sub><br>


### Parameters:

* string $string _The string being checked._
* string $search _The string being found._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* int _Number of times the searched substring occurs in the string._

<h2><a name="pad()"># pad()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::pad(string $string, int $length, string $pad = " ", \FireHub\TheCore\Support\Enums\Side $side = Side::RIGHT, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Pad a string to a certain length with another string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::pad()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L212)**</sub><br>


### Parameters:

* string $string _The string being padded._
* int $length _If the value of pad_length is negative, less than, or equal to the length of the input string, no padding takes place._
* string $pad = " " _[optional] 
The pad_string may be truncated if the required number of padding characters can&#039;t be evenly divided by the pad_string&#039;s length._
* [\FireHub\TheCore\Support\Enums\Side](./Side) $side = Side::RIGHT _[optional] 
Pad side._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string or false _Padded string, false otherwise._

<h2><a name="tolower()"># toLower()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::toLower(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Make a string lowercase

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::toLower()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L239)**</sub><br>


### Parameters:

* string $string _The string being lowercased._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _String with all alphabetic characters converted to lowercase._

<h2><a name="toupper()"># toUpper()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::toUpper(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Make a string uppercase

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::toUpper()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L258)**</sub><br>


### Parameters:

* string $string _The string being uppercased._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _String with all alphabetic characters converted to uppercase._

<h2><a name="totitle()"># toTitle()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::toTitle(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Make a string title-cased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::toTitle()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L277)**</sub><br>


### Parameters:

* string $string _The string being title cased._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _String with title-cased conversion._

<h2><a name="capitalize()"># capitalize()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::capitalize(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Make a first charater of string uppercased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::capitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L297)**</sub><br>


### Parameters:

* string $string _The string being converted._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _String with first charater uppercased._

<h2><a name="decapitalize()"># deCapitalize()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::deCapitalize(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Make a first charater of string lowercased

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::deCapitalize()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L317)**</sub><br>


### Parameters:

* string $string _The string being converted._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _String with first charater lowercased._

<h2><a name="split()"># split()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::split(string $string, int<1, max> $length = 1, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Convert a string to an array

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::split()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L338)**</sub><br>


### Parameters:

* string $string _The string being split._
* int&lt;1, max&gt; $length = 1 _[optional] 
If specified, each element of the returned array will be composed of multiple characters instead of a single character._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* array&lt;int,string&gt; _If the optional length parameter is specified, the returned array will be broken down into chunks with each being length in length, except the final chunk which may be shorter if the string does not divide evenly. The default length is 1, meaning every chunk will be one byte in size._

<h2><a name="firstpart()"># firstPart()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Find first part of a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::firstPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L365)**</sub><br>


### Parameters:

* string $find _String to find._
* string $string _The string being searched._
* bool $before_needle = false _[optional] 
If true, returns the part of the string before the first occurrence (excluding the find string)._
* bool $case_sensitive = true _[optional] 
Is string to find case-sensitive or not._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string or false _The portion of string, or false if needle is not found._

<h2><a name="lastpart()"># lastPart()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::lastPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Find last part of a string

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::lastPart()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L394)**</sub><br>


### Parameters:

* string $find _String to find._
* string $string _The string being searched._
* bool $before_needle = false _[optional] 
If true, returns the part of the string before the last occurrence (excluding the find string)._
* bool $case_sensitive = true _[optional] 
Is string to find case-sensitive or not._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encodging. If it is null, the internal character encoding value will be used._

### Returns:

* string or false _The portion of string, or false if needle is not found._

<h2><a name="wrap()"># wrap()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::wrap(string $string, int $width = 75, string $break = "
", bool $cut_long_words = false)
```

### ### Wraps a string to a given number of characters

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::wrap()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L409)**</sub><br>


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

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::chr(int $number, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Generate a single-byte string from a number

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::chr()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L429)**</sub><br>


### Parameters:

* int $number _ASCII code._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _The specified character, false otherwise._

<h2><a name="ord()"># ord()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::ord(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null)
```

### ### Get Unicode code point of character

__

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::ord()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L449)**</sub><br>


### Parameters:

* string $string _A character._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* int _The ASCII value as an integer, false otherwise._

<h2><a name="convertencoding()"># convertEncoding()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::convertEncoding(string $string, \FireHub\TheCore\Support\Enums\String\Encoding $to, null|\FireHub\TheCore\Support\Enums\String\Encoding $from = null):string|false
```

### ### Convert a string from one character encoding to another
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::convertEncoding()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L475)**</sub><br>


### Parameters:

* string $string _The string to be converted._
* [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $to _The desired encoding of the result._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $from = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string or false _Encoded string or false on failure._

<h2><a name="detectencoding()"># detectEncoding()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::detectEncoding(string $string):string|false
```

### ### Detect character encoding
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::detectEncoding()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L495)**</sub><br>


### Parameters:

* string $string _The string to detect encoding._

### Returns:

* string or false _The detected character encoding, or false if the string is not valid in any of the listed encodings._

<h2><a name="htmlencode()"># htmlEncode()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::htmlEncode(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null):string
```

### ### Convert all applicable characters to HTML entities
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::htmlEncode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L519)**</sub><br>


### Parameters:

* string $string _String to encode._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _The encoded string._

<h2><a name="htmldecode()"># htmlDecode()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\StrMB::htmlDecode(string $string, null|\FireHub\TheCore\Support\Enums\String\Encoding $encoding = null):string
```

### ### Convert HTML entities to their corresponding characters
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\StrMB::htmlDecode()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.StrMB.php#L540)**</sub><br>


### Parameters:

* string $string _String to decode._
* null or [\FireHub\TheCore\Support\Enums\String\Encoding](./Encoding) $encoding = null _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._

### Returns:

* string _The decoded string._


