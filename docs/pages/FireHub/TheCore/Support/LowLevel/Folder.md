---
layout: default
title: Folder
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Folder

{: .note }
> This class is marked as **final** and can't be subclassed.


```php
final class \FireHub\TheCore\Support\LowLevel\Folder()
```

### ### Folder low level class

_This low level support class is for manipulating data._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Folder**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L58)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/lowlevel/firehub.Folder.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/lowlevel/firehub.Folder.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Methods table
***

| Type  | Name  | Title |
| :---  | :---  | :---  |
|public static |<a href="#isfolder()">isFolder</a>|### Checks if path is a folder|
|public static |<a href="#isempty()">isEmpty</a>|### Checks if folder is empty|
|public static |<a href="#parentfolder()">parentFolder</a>|### Returns parent folder name component of path|
|public static |<a href="#basename()">basename</a>|### Returns base name component of path|
|public static |<a href="#getpermissions()">getPermissions</a>|### Gets folder permissions|
|public static |<a href="#setpermissions()">setPermissions</a>|### Sets folder permissions|
|public static |<a href="#create()">create</a>|### Creates folder|
|public static |<a href="#delete()">delete</a>|### Deletes folder|
|public static |<a href="#copy()">copy</a>|### Copies source folder to destination|
|public static |<a href="#move()">move</a>|### Moves folder|
|public static |<a href="#rename()">rename</a>|### Renames folder|
|public static |<a href="#list()">list</a>|### List files and directories inside the specified path|
|public static |<a href="#lastaccessed()">lastAccessed</a>|### Gets last access time of folder|
|public static |<a href="#lastmodified()">lastModified</a>|### Gets last modification time of folder|
|public static |<a href="#setlastaccessedandmodification()">setLastAccessedAndModification</a>|### Sets last access and modification time of folder|
|public static |<a href="#lastchanged()">lastChanged</a>|### Gets inode change time of a folder|
|public static |<a href="#totalspace()">totalSpace</a>|### Gets total size of a filesystem or disk partition|
|public static |<a href="#freespace()">freeSpace</a>|### Gets free space of a filesystem or disk partition|


# Methods
***


<h2><a name="isfolder()"># isFolder()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::isFolder(string $path):bool
```

### ### Checks if path is a folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::isFolder()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L72)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\DataIs::folder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\DataIs#folder()) _To check if value is folder._

### This method is used by:

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*

* *To check if path is folder.*


### Parameters:

* string $path _Path to check._

### Returns:

* bool _True if path is file, false otherwise._

<h2><a name="isempty()"># isEmpty()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::isEmpty(string $path):bool
```

### ### Checks if folder is empty

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L88)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to check._

### Returns:

* bool _True if folder is empty, false otherwise._

<h2><a name="parentfolder()"># parentFolder()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::parentFolder(string $path, int<1, max> $levels = 1):string
```

### ### Returns parent folder name component of path

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::parentFolder()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L111)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method is used by:

* *To get parent folder for path.*

* *To get parent folder from source.*


### Parameters:

* string $path _Path to folder._
* int&lt;1, max&gt; $levels = 1 _[optional] 
The number of parent directories to go up. This must be an integer greater than 0._

### Returns:

* string _The parent folder name of the given path._

<h2><a name="basename()"># basename()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::basename(string $path):string|false
```

### ### Returns base name component of path

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::basename()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L129)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._

### Parameters:

* string $path _Path to filename._

### Returns:

* string or false _The basename of the given path, false if folder doesn&#039;t exist._

<h2><a name="getpermissions()"># getPermissions()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::getPermissions(string $path):string|false
```

### ### Gets folder permissions

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::getPermissions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L150)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._
* [\FireHub\TheCore\Support\LowLevel\Data::getType()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Data#gettype()) _To get typo of file permissions._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/core/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To compare permissions value._
* [\FireHub\TheCore\Support\LowLevel\StrSafe::part()](/core/v0.2\FireHub\TheCore\Support\LowLevel\StrSafe#part()) _To extract substring from string._

### Parameters:

* string $path _Path to folder._

### Returns:

* string or false _Folder permissions, false otherwise._

<h2><a name="setpermissions()"># setPermissions()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::setPermissions(string $path, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group, \FireHub\TheCore\Support\Enums\FileFolder\Permission $global):bool
```

### ### Sets folder permissions

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::setPermissions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L189)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) _As parametar._
* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._
* [\FireHub\TheCore\Support\LowLevel\Data::getType()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Data#gettype()) _To get typo of file permissions._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/core/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To compare permissions value._

### Parameters:

* string $path _Path to folder._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $owner _Folder owner permission._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $owner_group _Folder owner group permission._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $global _Everyone&#039;s permission._

### Returns:

* bool _True if permission was set, false otherwise._

<h2><a name="create()"># create()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::create(string $path, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner = Permission::ALL, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group = Permission::ALL, \FireHub\TheCore\Support\Enums\FileFolder\Permission $global = Permission::ALL):bool
```

### ### Creates folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L232)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._
* [\FireHub\TheCore\Support\LowLevel\Data::getType()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Data#gettype()) _To get typo of file permissions._
* [\FireHub\TheCore\Support\Enums\Data\Type::T_INT](/core/v0.2\FireHub\TheCore\Support\Enums\Data\Type#t_int) _To compare permissions value._

### This method is used by:

* *To create folder.*


### Parameters:

* string $path _Path to folder._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $owner = Permission::ALL _[optional] 
Folder owner permission.

note: This parameter is ignored on Windows._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $owner_group = Permission::ALL _[optional] 
Folder owner group permission.

note: This parameter is ignored on Windows._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](/core/v0.2\FireHub\TheCore\Support\Enums\FileFolder\Permission) $global = Permission::ALL _[optional] 
Everyone&#039;s permission.

note: This parameter is ignored on Windows._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="delete()"># delete()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::delete(string $path):bool
```

### ### Deletes folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::delete()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L258)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._

### Parameters:

* string $path _Path to folder._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="copy()"># copy()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::copy(string $source, string $destination, bool $hidden = false):bool
```

### ### Copies source folder to destination

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::copy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L288)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Initializers\Constants\DS](/core/v0.2\FireHub\TheCore\Initializers\Constants\DS) _To seperate folders._
* [\FireHub\TheCore\Support\LowLevel\Folder::create()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#create()) _To create folder._
* [\FireHub\TheCore\Support\LowLevel\Folder::copy()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#copy()) _To copy folder._
* [\FireHub\TheCore\Support\LowLevel\Folder::list()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#list()) _To list folders._
* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._

### This method is used by:

* *To copy folder.*


### Parameters:

* string $source _The source path._
* string $destination _The destination path._
* bool $hidden = false _[optional] 
Copy hidden file as well._

### Returns:

* bool _True if folder was copied, false otherwise._

<h2><a name="move()"># move()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::move(string $source, string $destination):bool
```

### ### Moves folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::move()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L321)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._

### Parameters:

* string $source _The source path._
* string $destination _The destination path._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="rename()"># rename()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::rename(string $source, string $new_source):bool
```

### ### Renames folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::rename()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L344)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Initializers\Constants\DS](/core/v0.2\FireHub\TheCore\Initializers\Constants\DS) _To seperate folders._
* [\FireHub\TheCore\Support\LowLevel\Folder::isFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#isfolder()) _To check if path is folder._
* [\FireHub\TheCore\Support\LowLevel\Folder::parentFolder()](/core/v0.2\FireHub\TheCore\Support\LowLevel\Folder#parentfolder()) _To get parent folder from source._

### Parameters:

* string $source _The source path._
* string $new_source _$to 
New destination path._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="list()"># list()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::list(string $path, null|\FireHub\TheCore\Support\Enums\Order $order = null, bool $hidden = true)
```

### ### List files and directories inside the specified path

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::list()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L369)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### This method uses:

* [\FireHub\TheCore\Support\Enums\Order::ASC](/core/v0.2\FireHub\TheCore\Support\Enums\Order#asc) _To sort folders in ascending order._
* [\FireHub\TheCore\Support\Enums\Order::DESC](/core/v0.2\FireHub\TheCore\Support\Enums\Order#desc) _To sort folders in descending order._

### This method is used by:

* *To list folders.*


### Parameters:

* string $path _Path to filename._
* null or [\FireHub\TheCore\Support\Enums\Order](/core/v0.2\FireHub\TheCore\Support\Enums\Order) $order = null _[optional] 
Result order._
* bool $hidden = true _[optional] 
List hidden file as well._

<h2><a name="lastaccessed()"># lastAccessed()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::lastAccessed(string $path):int|false
```

### ### Gets last access time of folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::lastAccessed()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L395)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._

### Returns:

* int or false _Returns the time the file was last accessed, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="lastmodified()"># lastModified()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::lastModified(string $path):int|false
```

### ### Gets last modification time of folder

_Represents when the data or content is changed or modified, not including that of metadata such as ownership or owner group._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::lastModified()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L413)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._

### Returns:

* int or false _Returns the time the folder was last accessed, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="setlastaccessedandmodification()"># setLastAccessedAndModification()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::setLastAccessedAndModification(string $path, int|null $last_accessed, int|null $modified):bool
```

### ### Sets last access and modification time of folder

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::setLastAccessedAndModification()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L436)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._
* int or null $last_accessed _The touch time. If mtime is null, the current system time() is used._
* int or null $modified _If not null, the access time of the given filename is set to the value of atime.
Otherwise, it is set to the value passed to the mtime parameter. If both are null, the current system time is used._

### Returns:

* bool _True on success or false on failure._

<h2><a name="lastchanged()"># lastChanged()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::lastChanged(string $path):int|false
```

### ### Gets inode change time of a folder

_Represents the time when the metadata or inode data of a file is altered, such as the change of permissions, ownership or group._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::lastChanged()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L456)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._

### Returns:

* int or false _Returns the time the folder was last accessed, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="totalspace()"># totalSpace()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::totalSpace(string $path):float|false
```

### ### Gets total size of a filesystem or disk partition

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::totalSpace()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L472)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._

### Returns:

* float or false _Returns the total number of bytes as a float or false on failure._

<h2><a name="freespace()"># freeSpace()</a></h2>
***

```php
public static \FireHub\TheCore\Support\LowLevel\Folder::freeSpace(string $path):float|false
```

### ### Gets free space of a filesystem or disk partition

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Folder::freeSpace()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/lowlevel/firehub.Folder.php#L488)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

### Parameters:

* string $path _Path to folder._

### Returns:

* float or false _Returns the total free space of bytes as a float or false on failure._


