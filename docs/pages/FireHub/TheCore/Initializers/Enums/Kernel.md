---
layout: default
title: Kernel
parent: \FireHub\Initializers
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Kernel

```php
enum \FireHub\TheCore\Initializers\Enums\Kernel
```

### ### Enum for available Kernel types

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Initializers\Enums\Kernel**</sub><br>
<sub>This enum is part of package:  **\FireHub\Initializers**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/enums/firehub.Kernel.php#L30)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/initializers/enums/firehub.Kernel.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/initializers/enums/firehub.Kernel.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.2.pre-alpha.M1** 


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#http">HTTP</a>|### Fully functional HTTP Kernel||
|<a href="#micro_http">MICRO_HTTP</a>|### Simplified Micro HTTP Kernel||
|<a href="#console">CONSOLE</a>|### Console Kernel||


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#run()">run</a>|### Run selected Kernel|


# Cases
***


<h2><a name="http"># HTTP</a></h2>
***

```php
\FireHub\TheCore\Initializers\Enums\Kernel::HTTP
```

### ### Fully functional HTTP Kernel

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Initializers\Enums\Kernel::HTTP**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/enums/firehub.Kernel.php#L38)**</sub><br>

### Changelog:

* **0.1.2.pre-alpha.M1** 

### See also:

* [\FireHub\TheCore\Kernel\HTTP\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\HTTP\Kernel) _To find more details on how to use this kernel._

<h2><a name="micro_http"># MICRO_HTTP</a></h2>
***

```php
\FireHub\TheCore\Initializers\Enums\Kernel::MICRO_HTTP
```

### ### Simplified Micro HTTP Kernel

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Initializers\Enums\Kernel::MICRO_HTTP**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/enums/firehub.Kernel.php#L46)**</sub><br>

### Changelog:

* **0.1.2.pre-alpha.M1** 

### See also:

* [\FireHub\TheCore\Kernel\HTTP\Micro\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\HTTP\Micro\Kernel) _To find more details on how to use this kernel._

<h2><a name="console"># CONSOLE</a></h2>
***

```php
\FireHub\TheCore\Initializers\Enums\Kernel::CONSOLE
```

### ### Console Kernel

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Initializers\Enums\Kernel::CONSOLE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/enums/firehub.Kernel.php#L54)**</sub><br>

### Changelog:

* **0.1.2.pre-alpha.M1** 

### See also:

* [\FireHub\TheCore\Kernel\Console\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\Console\Kernel) _To find more details on how to use this kernel._


# Methods
***


<h2><a name="run()"># run()</a></h2>
***

```php
public \FireHub\TheCore\Initializers\Enums\Kernel::run():\FireHub\TheCore\Initializers\Kernel
```

### ### Run selected Kernel

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Enums\Kernel::run()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/enums/firehub.Kernel.php#L66)**</sub><br>

### Changelog:

* **0.1.2.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Kernel\HTTP\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\HTTP\Kernel) _To create HTTP Kernel._
* [\FireHub\TheCore\Kernel\HTTP\Micro\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\HTTP\Micro\Kernel) _To create Micro HTTP Kernel._
* [\FireHub\TheCore\Kernel\Console\Kernel](/thecore/v0.2\FireHub\TheCore\Kernel\Console\Kernel) _To create Console Kernel._

### Returns:

* [\FireHub\TheCore\Initializers\Kernel](/thecore/v0.2\FireHub\TheCore\Initializers\Kernel) _Selected Kernel._


