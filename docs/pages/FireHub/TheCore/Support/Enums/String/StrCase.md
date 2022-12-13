---
layout: default
title: StrCase
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# StrCase

```php
enum \FireHub\TheCore\Support\Enums\String\StrCase
```

### ### String case enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\String\StrCase**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/string/firehub.StrCase.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/string/firehub.StrCase.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/string/firehub.StrCase.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

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
|<a href="#upper">UPPER</a>|### Performs a full upper-case folding|0|
|<a href="#lower">LOWER</a>|### Performs a full lower-case folding|1|
|<a href="#title">TITLE</a>|### Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. In particular this improves handling of quotes and apostrophes|2|
|<a href="#mb_case_fold">MB_CASE_FOLD</a>|### Performs a full case fold conversion which removes case distinctions present in the string. This is used for caseless matching|3|


# Cases
***


<h2><a name="upper"># UPPER</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\String\StrCase::UPPER
```

### ### Performs a full upper-case folding

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\String\StrCase::UPPER**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/string/firehub.StrCase.php#L29)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="lower"># LOWER</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\String\StrCase::LOWER = 1
```

### ### Performs a full lower-case folding

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\String\StrCase::LOWER**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/string/firehub.StrCase.php#L35)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="title"># TITLE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\String\StrCase::TITLE = 2
```

### ### Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. In particular this improves handling of quotes and apostrophes

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\String\StrCase::TITLE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/string/firehub.StrCase.php#L41)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="mb_case_fold"># MB_CASE_FOLD</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\String\StrCase::MB_CASE_FOLD = 3
```

### ### Performs a full case fold conversion which removes case distinctions present in the string. This is used for caseless matching

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\String\StrCase::MB_CASE_FOLD**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/string/firehub.StrCase.php#L47)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

