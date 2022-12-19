
```php
enum \FireHub\TheCore\Support\Enums\Json\Decode
```

### ### JSON decode flag enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\Json\Decode**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/json/firehub.Decode.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/json/firehub.Decode.php)**</sub><br>

<sub>_This enum was created by Danijel Galić_</sub><br>
<sub>_2022 FireHub Web Application Framework_</sub><br>
<sub>_OSL Open Source License version 3 - [https://opensource.org/licenses/OSL-3.0](https://opensource.org/licenses/OSL-3.0)_</sub><br>
<sub>_1.0 _</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#json_object_as_array">JSON_OBJECT_AS_ARRAY</a>|### Decodes JSON objects as PHP array|1|
|<a href="#json_bigint_as_string">JSON_BIGINT_AS_STRING</a>|### Decodes large integers as their original string value|2|
|<a href="#json_invalid_utf8_ignore">JSON_INVALID_UTF8_IGNORE</a>|### Ignore invalid UTF-8 characters|1048576|
|<a href="#json_invalid_utf8_substitute">JSON_INVALID_UTF8_SUBSTITUTE</a>|### Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER')|2097152|
|<a href="#json_throw_on_error">JSON_THROW_ON_ERROR</a>|### Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error() and json_last_error_msg()|4194304|


# Cases


<h2><a name="json_object_as_array"># JSON_OBJECT_AS_ARRAY</a></h2>

```php
\FireHub\TheCore\Support\Enums\Json\Decode::JSON_OBJECT_AS_ARRAY = 1
```

### ### Decodes JSON objects as PHP array
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Decode::JSON_OBJECT_AS_ARRAY**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L29)**</sub><br>


<h2><a name="json_bigint_as_string"># JSON_BIGINT_AS_STRING</a></h2>

```php
\FireHub\TheCore\Support\Enums\Json\Decode::JSON_BIGINT_AS_STRING = 2
```

### ### Decodes large integers as their original string value
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Decode::JSON_BIGINT_AS_STRING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L35)**</sub><br>


<h2><a name="json_invalid_utf8_ignore"># JSON_INVALID_UTF8_IGNORE</a></h2>

```php
\FireHub\TheCore\Support\Enums\Json\Decode::JSON_INVALID_UTF8_IGNORE = 1048576
```

### ### Ignore invalid UTF-8 characters
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Decode::JSON_INVALID_UTF8_IGNORE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L41)**</sub><br>


<h2><a name="json_invalid_utf8_substitute"># JSON_INVALID_UTF8_SUBSTITUTE</a></h2>

```php
\FireHub\TheCore\Support\Enums\Json\Decode::JSON_INVALID_UTF8_SUBSTITUTE = 2097152
```

### ### Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER')
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Decode::JSON_INVALID_UTF8_SUBSTITUTE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L47)**</sub><br>


<h2><a name="json_throw_on_error"># JSON_THROW_ON_ERROR</a></h2>

```php
\FireHub\TheCore\Support\Enums\Json\Decode::JSON_THROW_ON_ERROR = 4194304
```

### ### Throws JsonException if an error occurs instead of setting the global error state that is retrieved with json_last_error() and json_last_error_msg()
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Json\Decode::JSON_THROW_ON_ERROR**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/json/firehub.Decode.php#L53)**</sub><br>


