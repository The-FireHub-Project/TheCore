
```php
class \FireHub\TheCore\Firehub()
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



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
||<a href="#boot()">boot</a>|### Light the torch|


# Methods


<h2><a name="boot()"># boot()</a></h2>

```php
\FireHub\TheCore\Firehub::boot(\FireHub\TheCore\Initializers\Enums\Kernel $kernel):string
```

### ### Light the torch

_This methode serves for instantiating FireHub framework._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Firehub::boot()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/firehub.FireHub.php#L58)**</sub><br>


### Parameters:

* [\FireHub\TheCore\Initializers\Enums\Kernel](./Kernel) $kernel _Pick Kernel from Kernel enum, process your
request and return appropriate response._

### Returns:

* string _Response from Kernel._


