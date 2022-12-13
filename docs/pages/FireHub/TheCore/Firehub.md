---
layout: default
title: Firehub
parent: \FireHub
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Firehub

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Firehub()
```

### ### Main FireHub class for bootstrapping

_This class contains all system definitions, constants and dependant
components for FireHub bootstrapping._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Firehub**</sub><br>
<sub>This class is part of package:  **\FireHub**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L41)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/firehub.FireHub.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/firehub.FireHub.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.1.pre-alpha.M1** 
* **0.1.2** _Added kernel parameter parameter and response from Kernel to boot method and created kernel method._
* **0.1.3.pre-alpha.M1** _Removed unused variable $folder._
* **0.2.0-pre-alpha.M2** _In registerConstants method, added constant from support._


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#boot()">boot</a>|### Light the torch|
|private |<a href="#bootloaders()">bootloaders</a>|### Initialize bootloaders|
|private |<a href="#registerconstants()">registerConstants</a>|### Register init constants|
|private |<a href="#autoload()">autoload</a>|### Load autoload file|
|private |<a href="#kernel()">kernel</a>|### Process Kernel|


# Methods
***


<h2><a name="boot()"># boot()</a></h2>
***

```php
public \FireHub\TheCore\Firehub::boot(\FireHub\TheCore\Initializers\Enums\Kernel $kernel):string
```

### ### Light the torch

_This methode serves for instantiating FireHub framework._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::boot()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L58)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 
* **0.1.2.pre-alpha.M1** _Added $kernel parameter and response from Kernel._

### Parameters:

* [\FireHub\TheCore\Initializers\Enums\Kernel](/core/v0.2\FireHub\TheCore\Initializers\Enums\Kernel) $kernel _Pick Kernel from Kernel enum, process your
request and return appropriate response._

### Returns:

* string _Response from Kernel._

<h2><a name="bootloaders()"># bootloaders()</a></h2>
***

```php
private \FireHub\TheCore\Firehub::bootloaders():$this
```

### ### Initialize bootloaders

_Load series of bootloaders required for
booting FireHub framework._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::bootloaders()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L75)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### Returns:

* $this _This object._

<h2><a name="registerconstants()"># registerConstants()</a></h2>
***

```php
private \FireHub\TheCore\Firehub::registerConstants():$this
```

### ### Register init constants

_This method will scan FireHub\Initializers\Constants folder
and automatically include all PHP files._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::registerConstants()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L100)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 
* **0.1.3.pre-alpha.M1** _Removed unused variable $folder._
* **0.2.0-pre-alpha.M2** _Added constant from support._

### This method uses:

* [\DirectoryIterator](/core/v0.2\DirectoryIterator) _To find all php files in folder._
* [\Throwable](/core/v0.2\Throwable) _To cache error._

### Throws:

* [\Error](/core/v0.2\Error) _If FireHub cannot load constant files._

### Returns:

* $this _This object._

<h2><a name="autoload()"># autoload()</a></h2>
***

```php
private \FireHub\TheCore\Firehub::autoload():$this
```

### ### Load autoload file

_This file contains definitions and series of functions
needed for calling classes._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::autoload()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L138)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Initializers\Constants\CORE_ROOT](/core/v0.2\FireHub\TheCore\Initializers\Constants\CORE_ROOT) _To find FireHub framework root path._
* [\FireHub\TheCore\Initializers\Constants\VENDOR_ROOT](/core/v0.2\FireHub\TheCore\Initializers\Constants\VENDOR_ROOT) _To find vendor root path._
* [\FireHub\TheCore\Initializers\Constants\PROJECT_ROOT](/core/v0.2\FireHub\TheCore\Initializers\Constants\PROJECT_ROOT) _To find project root path._
* [\FireHub\TheCore\Initializers\Constants\DS](/core/v0.2\FireHub\TheCore\Initializers\Constants\DS) _To seperate folders._
* [\FireHub\TheCore\Initializers\Autoload](/core/v0.2\FireHub\TheCore\Initializers\Autoload) _To autoload called classes._
* [\FireHub\TheCore\Initializers\Autoload::register()](/core/v0.2\FireHub\TheCore\Initializers\Autoload#register()) _To register autoload implementations._

### Throws:

* [\Error](/core/v0.2\Error) _If FireHub cannot load Autoload file._

### Returns:

* $this _This object._

<h2><a name="kernel()"># kernel()</a></h2>
***

```php
private \FireHub\TheCore\Firehub::kernel(\FireHub\TheCore\Initializers\Kernel $kernel):string
```

### ### Process Kernel

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::kernel()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L192)**</sub><br>

### Changelog:

* **0.1.2.pre-alpha.M1** 

### Parameters:

* [\FireHub\TheCore\Initializers\Kernel](/core/v0.2\FireHub\TheCore\Initializers\Kernel) $kernel _Picked Kernel from Kernel enum, process your
request and return appropriate response._

### Returns:

* string _Response from Kernel._


