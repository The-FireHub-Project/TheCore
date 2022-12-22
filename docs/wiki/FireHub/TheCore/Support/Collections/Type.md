
```php
class \FireHub\TheCore\Support\Collections\Type()
```

### ### Collection type
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Collections\Type**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L26)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/collections/firehub.Type.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/collections/firehub.Type.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
||<a href="#__construct()">__construct</a>|### Constructor|
||<a href="#basic()">basic</a>|### Basic array collection type|
||<a href="#associative()">associative</a>|### Associative array collection type|


# Methods


<h2><a name="__construct()"># __construct()</a></h2>

```php
\FireHub\TheCore\Support\Collections\Type::__construct(class-string $storage)
```

### ### Constructor
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::__construct()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L36)**</sub><br>


### Parameters:

* class-string $storage _Storage for collection to use._

<h2><a name="basic()"># basic()</a></h2>

```php
\FireHub\TheCore\Support\Collections\Type::basic(\Closure $callable):\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Basic array collection type

_Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1)._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::basic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L54)**</sub><br>


### Parameters:

* [\Closure](./Closure) $callable _Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type\Basic](./Basic) _Basic collection._

<h2><a name="associative()"># associative()</a></h2>

```php
\FireHub\TheCore\Support\Collections\Type::associative(\Closure $callable):\FireHub\TheCore\Support\Collections\Type\Associative
```

### ### Associative array collection type

_Collections that use named keys that you assign to them._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Type::associative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Type.php#L74)**</sub><br>


### Parameters:

* [\Closure](./Closure) $callable _Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type\Associative](./Associative) _Associative collection._


