---
layout: default
title: DataIs
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# DataIs

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\DataIs()
```

### ### DataIs low level class

_This low level support class is for checking data type._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\DataIs**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L56)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.DataIs.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.DataIs.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## This class is used by
***

* *To check if last key is null.*


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#array()">array</a>|### Checks if value is array|
|public static |<a href="#bool()">bool</a>|### Checks if value is boolean|
|public static |<a href="#callable()">callable</a>|### Verify that the contents of a variable can be called as a function|
|public static |<a href="#countable()">countable</a>|### Verify that the contents of a variable is a countable value|
|public static |<a href="#executable()">executable</a>|### Tells whether the filename is executable|
|public static |<a href="#file()">file</a>|### Tells whether the given file is a regular file|
|public static |<a href="#finite()">finite</a>|### Finds whether a value is a legal finite number|
|public static |<a href="#float()">float</a>|### Finds whether the type of variable is a float|
|public static |<a href="#folder()">folder</a>|### Tells whether the filename is a folder|
|public static |<a href="#infinite()">infinite</a>|### Finds whether a value is infinite|
|public static |<a href="#int()">int</a>|### Find whether the type of variable is an integer|
|public static |<a href="#iterable()">iterable</a>|### Verify that the contents of a variable is an iterable value|
|public static |<a href="#link()">link</a>|### Tells whether the filename is a symbolic link|
|public static |<a href="#nan()">nan</a>|### Finds whether a value is not a number|
|public static |<a href="#null()">null</a>|### Finds whether a variable is null|
|public static |<a href="#numeric()">numeric</a>|### Finds whether a variable is a number or a numeric string|
|public static |<a href="#object()">object</a>|### Finds whether a variable is an object|
|public static |<a href="#readable()">readable</a>|### Tells whether a file exists and is readable|
|public static |<a href="#resource()">resource</a>|### Finds whether a variable is a resource|
|public static |<a href="#scalar()">scalar</a>|### Finds whether a variable is a scalar|
|public static |<a href="#string()">string</a>|### Find whether the type of variable is a string|
|public static |<a href="#uploadedfile()">uploadedFile</a>|### Tells whether the file was uploaded via HTTP POST|
|public static |<a href="#writable()">writable</a>|### Tells whether the filename is writable|


# Methods
***


<h2><a name="array()"># array()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::array(mixed $value)
```

### ### Checks if value is array

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::array()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L68)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is array.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="bool()"># bool()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::bool(mixed $value)
```

### ### Checks if value is boolean

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::bool()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L84)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* mixed $value _Value to check._

<h2><a name="callable()"># callable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::callable(mixed $value)
```

### ### Verify that the contents of a variable can be called as a function

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::callable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L100)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* mixed $value _Value to check._

<h2><a name="countable()"># countable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::countable(mixed $value)
```

### ### Verify that the contents of a variable is a countable value

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::countable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L116)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* mixed $value _Value to check._

<h2><a name="executable()"># executable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::executable(string $filename):bool
```

### ### Tells whether the filename is executable

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::executable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L134)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $filename _Path to the file._

### Returns:

* bool _True if the filename exists and is executable, or false on error._

<h2><a name="file()"># file()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::file(string $filename):bool
```

### ### Tells whether the given file is a regular file

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::file()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L152)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is file.*


### Parameters:

* string $filename _Path to the file._

### Returns:

* bool _True if the filename exists and is a regular file, false otherwise._

<h2><a name="finite()"># finite()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::finite(float $number):bool
```

### ### Finds whether a value is a legal finite number

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::finite()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L168)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* float $number _The value to check._

### Returns:

* bool _True if number is a legal finite number within the allowed range for a PHP float on this platform, false otherwise._

<h2><a name="float()"># float()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::float(mixed $value)
```

### ### Finds whether the type of variable is a float

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::float()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L184)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is float.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="folder()"># folder()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::folder(string $filename):bool
```

### ### Tells whether the filename is a folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::folder()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L200)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is folder.*


### Parameters:

* string $filename _Path to the file._

### Returns:

* bool _Returns true if the filename exists and is a folder, false otherwise._

<h2><a name="infinite()"># infinite()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::infinite(float $number):bool
```

### ### Finds whether a value is infinite

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::infinite()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L216)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* float $number _The value to check._

### Returns:

* bool _True if number is infinite, false otherwise._

<h2><a name="int()"># int()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::int(mixed $value)
```

### ### Find whether the type of variable is an integer

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::int()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L232)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is integer.*

* *To check if max value is integer.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="iterable()"># iterable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::iterable(mixed $value)
```

### ### Verify that the contents of a variable is an iterable value

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::iterable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L248)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is iterable.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="link()"># link()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::link(string $filename):bool
```

### ### Tells whether the filename is a symbolic link

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::link()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L264)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $filename _Path to the file._

### Returns:

* bool _True if the filename exists and is a symbolic link, false otherwise._

<h2><a name="nan()"># nan()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::nan(float $number):bool
```

### ### Finds whether a value is not a number

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::nan()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L280)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* float $number _Value to check._

### Returns:

* bool _True if number is &#039;not a number&#039;, false otherwise._

<h2><a name="null()"># null()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::null(mixed $value)
```

### ### Finds whether a variable is null

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::null()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L296)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if $key is null.*

* *To check if filter is null.*

* *To check if return is not null.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="numeric()"># numeric()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::numeric(mixed $value)
```

### ### Finds whether a variable is a number or a numeric string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::numeric()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L312)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is numeric.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="object()"># object()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::object(mixed $value)
```

### ### Finds whether a variable is an object

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::object()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L328)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if value is object.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="readable()"># readable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::readable(string $filename):bool
```

### ### Tells whether a file exists and is readable

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::readable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L344)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $filename _Path to the file._

### Returns:

* bool _True if the file or directory specified by filename exists and is readable, false otherwise._

<h2><a name="resource()"># resource()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::resource(mixed $value)
```

### ### Finds whether a variable is a resource

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::resource()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L360)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if file is resource.*

* *To check if file is resource.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="scalar()"># scalar()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::scalar(mixed $value)
```

### ### Finds whether a variable is a scalar

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::scalar()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L379)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* mixed $value _Value to check._

<h2><a name="string()"># string()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::string(mixed $value)
```

### ### Find whether the type of variable is a string

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::string()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L395)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To check if first $field value is string.*

* *To check if value is string.*


### Parameters:

* mixed $value _Value to check._

<h2><a name="uploadedfile()"># uploadedFile()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::uploadedFile(string $filename):bool
```

### ### Tells whether the file was uploaded via HTTP POST

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::uploadedFile()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L413)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $filename _The filename being checked._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="writable()"># writable()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\DataIs::writable(string $filename):bool
```

### ### Tells whether the filename is writable

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\DataIs::writable()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.DataIs.php#L429)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $filename _The filename being checked._

### Returns:

* bool _True if filename exists and is writable, false otherwise._


