
```php
class \FireHub\TheCore\Initializers\Autoload()
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



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
||<a href="#register()">register</a>|### Register new autoload implementation|
||<a href="#unregister()">unregister</a>|### Unregister all autoload implementations|
||<a href="#functions()">functions</a>|### Get all autoload implementations|
||<a href="#load()">load</a>|### Try to load class from registered autoloaders|


# Methods


<h2><a name="register()"># register()</a></h2>

```php
\FireHub\TheCore\Initializers\Autoload::register(callable|string $path, bool $prefix, bool $suffix, bool $prepend):bool
```

### ### Register new autoload implementation
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::register()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L121)**</sub><br>


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

* [\Error](./Error) _If class doesn&#039;t have at least two namespace levels._

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

```php
\FireHub\TheCore\Initializers\Autoload::unregister():void
```

### ### Unregister all autoload implementations
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::unregister()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L142)**</sub><br>


### Returns:

* void 

<h2><a name="functions()"># functions()</a></h2>

```php
\FireHub\TheCore\Initializers\Autoload::functions():callable[]
```

### ### Get all autoload implementations
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::functions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L154)**</sub><br>


### Returns:

* callable[] _List of all autoload implementations._

<h2><a name="load()"># load()</a></h2>

```php
\FireHub\TheCore\Initializers\Autoload::load(class-string $class, array<array-key,mixed> $arguments = []):void
```

### ### Try to load class from registered autoloaders
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Initializers\Autoload::load()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/initializers/firehub.Autoload.php#L175)**</sub><br>


### Parameters:

* class-string $class _Fully-qualified class name._
* array&lt;array-key,mixed&gt; $arguments = [] _[optional] 
List of constructor parameters to pass to class._

### Throws:

* [\Error](./Error) _If class does not exist._

### Returns:

* void 


