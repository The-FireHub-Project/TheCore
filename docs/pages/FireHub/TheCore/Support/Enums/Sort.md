---
layout: default
title: Sort
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Sort

```php
enum \FireHub\TheCore\Support\Enums\Sort
```

### ### Sorting enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\Sort**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/firehub.Sort.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/firehub.Sort.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#sort_regular">SORT_REGULAR</a>|### Compare items normally|0|
|<a href="#sort_numeric">SORT_NUMERIC</a>|### Compare items numerically|1|
|<a href="#sort_string">SORT_STRING</a>|### Compare items as strings|2|
|<a href="#sort_locale_string">SORT_LOCALE_STRING</a>|### Compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()|5|
|<a href="#sort_natural">SORT_NATURAL</a>|### Compare items as strings using "natural ordering" like natsort()|6|
|<a href="#sort_string_flag_case">SORT_STRING_FLAG_CASE</a>|### Sort strings case-insensitively|10|
|<a href="#sort_natural_flag_case">SORT_NATURAL_FLAG_CASE</a>|### Sort natural case-insensitively|14|


# Cases
***


<h2><a name="sort_regular"># SORT_REGULAR</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_REGULAR
```

### ### Compare items normally

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_REGULAR**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L29)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_numeric"># SORT_NUMERIC</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_NUMERIC = 1
```

### ### Compare items numerically

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_NUMERIC**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L35)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_string"># SORT_STRING</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_STRING = 2
```

### ### Compare items as strings

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_STRING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L41)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_locale_string"># SORT_LOCALE_STRING</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_LOCALE_STRING = 5
```

### ### Compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_LOCALE_STRING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L47)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_natural"># SORT_NATURAL</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_NATURAL = 6
```

### ### Compare items as strings using "natural ordering" like natsort()

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_NATURAL**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L53)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_string_flag_case"># SORT_STRING_FLAG_CASE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_STRING_FLAG_CASE = 10
```

### ### Sort strings case-insensitively

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_STRING_FLAG_CASE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L59)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="sort_natural_flag_case"># SORT_NATURAL_FLAG_CASE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\Sort::SORT_NATURAL_FLAG_CASE = 14
```

### ### Sort natural case-insensitively

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\Sort::SORT_NATURAL_FLAG_CASE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/firehub.Sort.php#L65)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

