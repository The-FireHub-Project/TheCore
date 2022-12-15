
```php
enum \FireHub\TheCore\Support\Enums\DateTime\Format\Month
```

### ### Month format enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/datetime/format/firehub.Month.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/datetime/format/firehub.Month.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#textual_long">TEXTUAL_LONG</a>|### Full textual representation of a month|&#039;F&#039;|
|<a href="#textual_short">TEXTUAL_SHORT</a>|### Short textual representation of a month, three letters|&#039;M&#039;|
|<a href="#numeric_long">NUMERIC_LONG</a>|### Numeric representation of a month, with leading zeros|&#039;m&#039;|
|<a href="#numeric_short">NUMERIC_SHORT</a>|### Numeric representation of a month, without leading zeros|&#039;n&#039;|
|<a href="#number_of_days">NUMBER_OF_DAYS</a>|### Number of days in the given month|&#039;t&#039;|


# Cases


<h2><a name="textual_long"># TEXTUAL_LONG</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_LONG = 'F'
```

### ### Full textual representation of a month
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_LONG**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L34)**</sub><br>


### Examples:

```php
January, December
```



<h2><a name="textual_short"># TEXTUAL_SHORT</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_SHORT = 'M'
```

### ### Short textual representation of a month, three letters
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month::TEXTUAL_SHORT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L45)**</sub><br>


### Examples:

```php
Jan, Dec
```



<h2><a name="numeric_long"># NUMERIC_LONG</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_LONG = 'm'
```

### ### Numeric representation of a month, with leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_LONG**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L56)**</sub><br>


### Examples:

```php
01 through 12
```



<h2><a name="numeric_short"># NUMERIC_SHORT</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_SHORT = 'n'
```

### ### Numeric representation of a month, without leading zeros
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMERIC_SHORT**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L67)**</sub><br>


### Examples:

```php
1 through 12
```



<h2><a name="number_of_days"># NUMBER_OF_DAYS</a></h2>

```php
\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMBER_OF_DAYS = 't'
```

### ### Number of days in the given month
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\DateTime\Format\Month::NUMBER_OF_DAYS**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/datetime/format/firehub.Month.php#L78)**</sub><br>


### Examples:

```php
28 through 31
```



