
```php
class \FireHub\TheCore\Support\Collections\Collection()
```

### ### ### Data collection

_Collection is a wrapper for working with lists of data._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\Collections\Collection**</sub><br>
<sub>This class is part of package:  **\FireHub\Support\Calendar**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L31)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/collections/firehub.Collection.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/collections/firehub.Collection.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#create()">create</a>|### Array collection type|
|static |<a href="#lazy()">lazy</a>|### Lazy collection type|


# Methods


<h2><a name="create()"># create()</a></h2>

```php
static \FireHub\TheCore\Support\Collections\Collection::create(\Closure|null $callable = null):\FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Array collection type

_Array Collection type is collection that has main focus of performance
and doesn&amp;#039;t concern itself about memory consumption.
This collection can hold any type of data._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Collection::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L59)**</sub><br>


### Parameters:

* [\Closure](./Closure) or null $callable = null _[optional] 
Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type](./Type) or [\FireHub\TheCore\Support\Collections\Type\Basic](./Basic) _Array collection._

<h2><a name="lazy()"># lazy()</a></h2>

```php
static \FireHub\TheCore\Support\Collections\Collection::lazy(\Closure|null $callable = null):\FireHub\TheCore\Support\Collections\Type|\FireHub\TheCore\Support\Collections\Type\Basic
```

### ### Lazy collection type
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\Collections\Collection::lazy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/collections/firehub.Collection.php#L82)**</sub><br>


### Parameters:

* [\Closure](./Closure) or null $callable = null _[optional] 
Data from callable source._

### Returns:

* [\FireHub\TheCore\Support\Collections\Type](./Type) or [\FireHub\TheCore\Support\Collections\Type\Basic](./Basic) _Lazy collection._


