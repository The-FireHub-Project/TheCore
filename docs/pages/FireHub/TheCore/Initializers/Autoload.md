---
layout: default
title: Autoload
parent: \FireHub\Initializers
grand_parent: TheCore v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Autoload

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Initializers\Autoload()
```

### ### Autoload for called classes

_Firehub autoloader implementation used to
call main Firehub classes and its components._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Initializers\Autoload**</sub><br>
<sub>This class is part of package:  **\FireHub\Initializers**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L51)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/initializers/firehub.Autoload.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/initializers/firehub.Autoload.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.1.pre-alpha.M1** 
* **0.1.3.pre-alpha.M1** _Removed optional from all parameters in register method and replaced them with class properties, removed unused parameter $class_fqn in callable method, fixed suffix by adding strtolower to return key in extract method._


## This class is used by
***

* *To autoload called classes.*


## Properties table
***

| Type  | Name  | Title | Default |
| :---  | :---  | :---  | :---    |
|private bool|<a href="#$prefix">prefix</a>|### If true, you can use underscore after class name to add type to class|false|
|private bool|<a href="#$suffix">suffix</a>|### If true, you can use underscore after class name to add type to class|false|


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public |<a href="#register()">register</a>|### Register new autoload implementation|
|public |<a href="#unregister()">unregister</a>|### Unregister all autoload implementations|
|public |<a href="#functions()">functions</a>|### Get all autoload implementations|
|public |<a href="#load()">load</a>|### Try to load class from registered auto-loaders|
|private |<a href="#callback()">callback</a>|### The autoload function being registereD|
|private |<a href="#extract()">extract</a>|### Breake class fully-qualified name into usable components|
|private |<a href="#prefix()">prefix</a>|### Check for valid prefix|
|private |<a href="#suffix()">suffix</a>|### Check for valid suffix|


# Properties
***


<h2><a name="$prefix"># $prefix</a></h2>
***

```php
private bool \FireHub\TheCore\Initializers\Autoload::$prefix = false
```

### ### If true, you can use underscore after class name to add type to class

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Initializers\Autoload::$prefix**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L59)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="$suffix"># $suffix</a></h2>
***

```php
private bool \FireHub\TheCore\Initializers\Autoload::$suffix = false
```

### ### If true, you can use underscore after class name to add type to class

<sub>Fully Qualified Property Name:  **\FireHub\TheCore\Initializers\Autoload::$suffix**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L67)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 



# Methods
***


<h2><a name="register()"># register()</a></h2>
***

```php
public \FireHub\TheCore\Initializers\Autoload::register(callable|string $path, bool $prefix, bool $suffix, bool $prepend):bool
```

### ### Register new autoload implementation

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::register()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L121)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 
* **0.1.3.pre-alpha.M1** _Removed optional from all parameters._

### This method is used by:

* *To register autoload implementations.*


### Parameters:

* callable or string $path _Root path where register will try to find classes. All namespace components will be resolved as folders
inside root path._
* bool $prefix _If true, your class filenames will have to use prefixes.

note: Prefix must be listed in \FireHub\Initializers\Enums\Prefix to work and will have to match your first namespace component
with dot at the end of prefix._
* bool $suffix _If true, you can use underscore after class name to add type to class.

note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work._
* bool $prepend _If true, register will prepend the autoloader on the autoload stack instead of appending it._

### Throws:

* [\Error](/thecore/v0.2\Error) _If class doesn&#039;t have at least two namespace levels._

### Returns:

* bool _True if autoload is registered, false otherwise._

### Examples:

Registiring new autoload implementation.
```php
use FireHub\TheCore\Initializers\Autoload;
use const FireHub\TheCore\Initializers\Constants\PROJECT_ROOT;

$autoload = new Autoload();
$autoload->register(
 PROJECT_ROOT, false, true, true
);
```


Registiring new autoload implementation with callable path.
```php
use FireHub\TheCore\Initializers\Autoload;
use const FireHub\TheCore\Initializers\Constants\PROJECT_ROOT;

$autoload = new Autoload();
$autoload->register(
 function (array $class_fqn_components):string {
 return PROJECT_ROOT.(!empty($class_fqn_components['namespace']) ? DS.$class_fqn_components['namespace'] : '');
 }, false, true, true
);
```



<h2><a name="unregister()"># unregister()</a></h2>
***

```php
public \FireHub\TheCore\Initializers\Autoload::unregister():void
```

### ### Unregister all autoload implementations

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::unregister()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L142)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### Returns:

* void 

<h2><a name="functions()"># functions()</a></h2>
***

```php
public \FireHub\TheCore\Initializers\Autoload::functions():callable[]
```

### ### Get all autoload implementations

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::functions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L154)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### Returns:

* callable[] _List of all autoload implementations._

<h2><a name="load()"># load()</a></h2>
***

```php
public \FireHub\TheCore\Initializers\Autoload::load(class-string $class, array $arguments = []):void
```

### ### Try to load class from registered auto-loaders

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::load()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L175)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### Parameters:

* class-string $class _Fully-qualified class name._
* array $arguments = [] 

### Throws:

* [\Error](/thecore/v0.2\Error) _If class does not exist._

### Returns:

* void 

<h2><a name="callback()"># callback()</a></h2>
***

```php
private \FireHub\TheCore\Initializers\Autoload::callback(string $path, array $class_fqn_components, bool $prefix, bool $suffix):void
```

### ### The autoload function being registereD

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::callback()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L215)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 
* **0.1.3.pre-alpha.M1** _Removed unused parameter $class_fqn_

### This method uses:

* [\FireHub\TheCore\Initializers\Constants\DS](/thecore/v0.2\FireHub\TheCore\Initializers\Constants\DS) _To seperate folders._

### Parameters:

* string $path _Root path where register will try to find classes._
* array $class_fqn_components 
* bool $prefix _If true, your class filenames will have to use prefixes.

note: Prefix must be listed in \FireHub\Initializers\Enums\Prefix to work and will have to match your first namespace component
with dot at the end of prefix._
* bool $suffix _If true, you can use underscore after class name to add type to class.

note: Suffix must be listed in \FireHub\Initializers\Enums\Suffix to work._

### Returns:

* void 

<h2><a name="extract()"># extract()</a></h2>
***

```php
private \FireHub\TheCore\Initializers\Autoload::extract(string $class_fqn)
```

### ### Breake class fully-qualified name into usable components

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::extract()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L251)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 
* **0.1.3.pre-alpha.M1** _Fixed suffix by adding strtolower to return key._

### This method uses:

* [\FireHub\TheCore\Initializers\Constants\DS](/thecore/v0.2\FireHub\TheCore\Initializers\Constants\DS) _To seperate folders._

### Parameters:

* string $class_fqn _Fully-qualified class name._

### Throws:

* [\Error](/thecore/v0.2\Error) _If class doesn&#039;t have at least two namespace levels._

<h2><a name="prefix()"># prefix()</a></h2>
***

```php
private \FireHub\TheCore\Initializers\Autoload::prefix(string $name):\FireHub\TheCore\Initializers\Enums\Prefix|false
```

### ### Check for valid prefix

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::prefix()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L295)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Initializers\Enums\Prefix](/thecore/v0.2\FireHub\TheCore\Initializers\Enums\Prefix) _To try to match valid prefix._

### Parameters:

* string $name _Prefix name to check for._

### Returns:

* [\FireHub\TheCore\Initializers\Enums\Prefix](/thecore/v0.2\FireHub\TheCore\Initializers\Enums\Prefix) or false _Valid prefix on false is none exist._

<h2><a name="suffix()"># suffix()</a></h2>
***

```php
private \FireHub\TheCore\Initializers\Autoload::suffix(string $name):\FireHub\TheCore\Initializers\Enums\Suffix|false
```

### ### Check for valid suffix

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::suffix()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L313)**</sub><br>

### Changelog:

* **0.1.1.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Initializers\Enums\Suffix](/thecore/v0.2\FireHub\TheCore\Initializers\Enums\Suffix) _To try to match valid suffix._

### Parameters:

* string $name _Suffix name to check for._

### Returns:

* [\FireHub\TheCore\Initializers\Enums\Suffix](/thecore/v0.2\FireHub\TheCore\Initializers\Enums\Suffix) or false _Valid suffix on false is none exist._


