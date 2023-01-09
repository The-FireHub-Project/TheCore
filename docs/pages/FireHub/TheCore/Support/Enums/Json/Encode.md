---
layout: default
title: Encode
parent: \FireHub\Support
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Encode

```php
enum \FireHub\TheCore\Support\Enums\Json\Encode
```

### ### JSON encode flag enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\Json\Encode**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/json/firehub.Encode.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/json/firehub.Encode.php)**</sub><br>

<sub>_This enum was created by Danijel Galić_</sub><br>
<sub>_2022 FireHub Web Application Framework_</sub><br>
<sub>_OSL Open Source License version 3 - [https://opensource.org/licenses/OSL-3.0](https://opensource.org/licenses/OSL-3.0)_</sub><br>
<sub>_1.0 _</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## This enum is used by
***

* *As parameter.*


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#json_hex_tag">JSON_HEX_TAG</a>|### All &lt; and &gt; are converted to \u003C and \u003E|1|
|<a href="#json_hex_amp">JSON_HEX_AMP</a>|### All &s are converted to \u0026|2|
|<a href="#json_hex_apos">JSON_HEX_APOS</a>|### All ' are converted to \u0027|4|
|<a href="#json_hex_quot">JSON_HEX_QUOT</a>|### All " are converted to \u0022|8|
|<a href="#json_force_object">JSON_FORCE_OBJECT</a>|### Outputs an object rather than an array when a non-associative array is used|16|
|<a href="#json_numeric_check">JSON_NUMERIC_CHECK</a>|### Encodes numeric strings as numbers|32|
|<a href="#json_unescaped_slashes">JSON_UNESCAPED_SLASHES</a>|### Don't escape /|64|
|<a href="#json_pretty_print">JSON_PRETTY_PRINT</a>|### Use whitespace in returned data to format it|128|
|<a href="#json_unescaped_unicode">JSON_UNESCAPED_UNICODE</a>|### Encode multibyte Unicode characters literally (default is to escape as \uXXXX)|256|
|<a href="#json_partial_output_on_error">JSON_PARTIAL_OUTPUT_ON_ERROR</a>|### Substitute some un-encodable values instead of failing|512|
|<a href="#json_preserve_zero_fraction">JSON_PRESERVE_ZERO_FRACTION</a>|### Ensures that float values are always encoded as a float value|1024|
|<a href="#json_unescaped_line_terminators">JSON_UNESCAPED_LINE_TERMINATORS</a>|### The line terminators are kept unescaped when JSON_UNESCAPED_UNICODE is supplied|2048|
|<a href="#json_invalid_utf8_ignore">JSON_INVALID_UTF8_IGNORE</a>|### Ignore invalid UTF-8 characters|1048576|
|<a href="#json_invalid_utf8_substitute">JSON_INVALID_UTF8_SUBSTITUTE</a>|### Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER')|2097152|
|<a href="#json_throw_on_error">JSON_THROW_ON_ERROR</a>|### Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error() and json_last_error_msg()|4194304|


# Cases
***


<h2><a name="json_hex_tag"># JSON_HEX_TAG</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_TAG = 1
```

### ### All &lt; and &gt; are converted to \u003C and \u003E

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_TAG**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L29)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_hex_amp"># JSON_HEX_AMP</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_AMP = 2
```

### ### All &s are converted to \u0026

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_AMP**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L35)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_hex_apos"># JSON_HEX_APOS</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_APOS = 4
```

### ### All ' are converted to \u0027

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_APOS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L41)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_hex_quot"># JSON_HEX_QUOT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_QUOT = 8
```

### ### All " are converted to \u0022

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_HEX_QUOT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L47)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_force_object"># JSON_FORCE_OBJECT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_FORCE_OBJECT = 16
```

### ### Outputs an object rather than an array when a non-associative array is used

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_FORCE_OBJECT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L53)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_numeric_check"># JSON_NUMERIC_CHECK</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_NUMERIC_CHECK = 32
```

### ### Encodes numeric strings as numbers

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_NUMERIC_CHECK**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L59)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_unescaped_slashes"># JSON_UNESCAPED_SLASHES</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_SLASHES = 64
```

### ### Don't escape /

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_SLASHES**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L65)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_pretty_print"># JSON_PRETTY_PRINT</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PRETTY_PRINT = 128
```

### ### Use whitespace in returned data to format it

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PRETTY_PRINT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L71)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_unescaped_unicode"># JSON_UNESCAPED_UNICODE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_UNICODE = 256
```

### ### Encode multibyte Unicode characters literally (default is to escape as \uXXXX)

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_UNICODE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L77)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_partial_output_on_error"># JSON_PARTIAL_OUTPUT_ON_ERROR</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PARTIAL_OUTPUT_ON_ERROR = 512
```

### ### Substitute some un-encodable values instead of failing

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PARTIAL_OUTPUT_ON_ERROR**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L83)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_preserve_zero_fraction"># JSON_PRESERVE_ZERO_FRACTION</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PRESERVE_ZERO_FRACTION = 1024
```

### ### Ensures that float values are always encoded as a float value

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_PRESERVE_ZERO_FRACTION**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L89)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_unescaped_line_terminators"># JSON_UNESCAPED_LINE_TERMINATORS</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_LINE_TERMINATORS = 2048
```

### ### The line terminators are kept unescaped when JSON_UNESCAPED_UNICODE is supplied

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_UNESCAPED_LINE_TERMINATORS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L95)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_invalid_utf8_ignore"># JSON_INVALID_UTF8_IGNORE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_INVALID_UTF8_IGNORE = 1048576
```

### ### Ignore invalid UTF-8 characters

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_INVALID_UTF8_IGNORE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L101)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_invalid_utf8_substitute"># JSON_INVALID_UTF8_SUBSTITUTE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_INVALID_UTF8_SUBSTITUTE = 2097152
```

### ### Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER')

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_INVALID_UTF8_SUBSTITUTE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L107)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="json_throw_on_error"># JSON_THROW_ON_ERROR</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Json\Encode::JSON_THROW_ON_ERROR = 4194304
```

### ### Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error() and json_last_error_msg()

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Encode::JSON_THROW_ON_ERROR**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Encode.php#L113)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

