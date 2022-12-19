
```php
class \FireHub\TheCore\Support\LowLevel\File()
```

### ### File low level class

_This low level support class is for manipulating data._

<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\File**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L71)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.File.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.File.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#isfile()">isFile</a>|### Checks if path is a file|
|static |<a href="#isempty()">isEmpty</a>|### Checks if file is empty|
|static |<a href="#parentfolder()">parentFolder</a>|### Returns parent folder name component of path|
|static |<a href="#basename()">basename</a>|### Returns base name component of path|
|static |<a href="#filename()">filename</a>|### Get file name component of path|
|static |<a href="#extension()">extension</a>|### Get extension name component of path|
|static |<a href="#getpermissions()">getPermissions</a>|### Gets file permissions|
|static |<a href="#setpermissions()">setPermissions</a>|### Sets file permissions|
|static |<a href="#create()">create</a>|### Creates file|
|static |<a href="#delete()">delete</a>|### Deletes file|
|static |<a href="#copy()">copy</a>|### Copies file|
|static |<a href="#move()">move</a>|### Moves file|
|static |<a href="#rename()">rename</a>|### Renames file|
|static |<a href="#getcontent()">getContent</a>|### Reads entire file into a string|
|static |<a href="#putcontent()">putContent</a>|### Write data to a file|
|static |<a href="#size()">size</a>|### Gets file size|
|static |<a href="#lastaccessed()">lastAccessed</a>|### Gets last access time of file|
|static |<a href="#lastmodified()">lastModified</a>|### Gets last modification time of file|
|static |<a href="#setlastaccessedandmodification()">setLastAccessedAndModification</a>|### Sets last access and modification time of file|
|static |<a href="#lastchanged()">lastChanged</a>|### Gets inode change time of a file|
|static |<a href="#open()">open</a>|### Open file|
|static |<a href="#write()">write</a>|### Write to the file|
|static |<a href="#close()">close</a>|### Close the file|
|static |<a href="#eol()">eol</a>|### Tests for end-of-file on a file pointer|
|static |<a href="#character()">character</a>|### Gets character from file pointer|
|static |<a href="#line()">line</a>|### Gets line from file pointer|
|static |<a href="#lines()">lines</a>|### Reads entire file into an array|
|static |<a href="#lazylines()">lazyLines</a>|### Reads entire file into an array|
|static |<a href="#lock()">lock</a>|### Portable advisory file locking|
|static |<a href="#moveuploaded()">moveUploaded</a>|### Moves an uploaded file to a new location|


# Methods


<h2><a name="isfile()"># isFile()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::isFile(string $path):bool
```

### ### Checks if path is a file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::isFile()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L85)**</sub><br>


### Parameters:

* string $path _Path to check._

### Returns:

* bool _True if path is file, false otherwise._

<h2><a name="isempty()"># isEmpty()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::isEmpty(string $path):bool
```

### ### Checks if file is empty
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L103)**</sub><br>


### Parameters:

* string $path _Path to check._

### Returns:

* bool _True if file is empty, false otherwise._

<h2><a name="parentfolder()"># parentFolder()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::parentFolder(string $path):string
```

### ### Returns parent folder name component of path
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::parentFolder()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L121)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string _The parent folder name of the given path._

<h2><a name="basename()"># basename()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::basename(string $path):string|false
```

### ### Returns base name component of path
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::basename()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L139)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string or false _The basename of the given path, false if folder doesn&#039;t exist._

<h2><a name="filename()"># filename()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::filename(string $path):string|false
```

### ### Get file name component of path
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::filename()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L157)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string or false _The file name of the given path, false if file doesn&#039;t exist._

<h2><a name="extension()"># extension()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::extension(string $path):string|false
```

### ### Get extension name component of path
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::extension()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L175)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string or false _The extension of the given path, false if file doesn&#039;t exist._

<h2><a name="getpermissions()"># getPermissions()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::getPermissions(string $path):string
```

### ### Gets file permissions
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::getPermissions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L196)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string _File permissions, false otherwise._

<h2><a name="setpermissions()"># setPermissions()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::setPermissions(string $path, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner, \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group, \FireHub\TheCore\Support\Enums\FileFolder\Permission $global):bool
```

### ### Sets file permissions
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::setPermissions()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L232)**</sub><br>


### Parameters:

* string $path _Path to filename._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](./Permission) $owner _File owner permission._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](./Permission) $owner_group _File owner group permission._
* [\FireHub\TheCore\Support\Enums\FileFolder\Permission](./Permission) $global _Everyone&#039;s permission._

### Returns:

* bool _True if permission was set, false otherwise._

<h2><a name="create()"># create()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::create(string $path):bool
```

### ### Creates file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::create()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L259)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="delete()"># delete()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::delete(string $path):bool
```

### ### Deletes file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::delete()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L277)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="copy()"># copy()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::copy(string $path, string $to, bool $overwrite = true):bool
```

### ### Copies file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::copy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L304)**</sub><br>


### Parameters:

* string $path _Path to filename._
* string $to _The destination path. If dest is a URL, the copy operation may fail if the wrapper does not support overwriting of existing files.
If the destination file already exists, it will be overwritten._
* bool $overwrite = true _[optional] 
Is set to true, if file already exists will be overwritten with the new one._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="move()"># move()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::move(string $path, string $to, bool $overwrite = true):bool
```

### ### Moves file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::move()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L332)**</sub><br>


### Parameters:

* string $path _Path to filename._
* string $to _The destination path._
* bool $overwrite = true _[optional] 
Is set to true, if file already exists will be overwritten with the new one._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="rename()"># rename()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::rename(string $path, string $new_basename, bool $overwrite = true):bool
```

### ### Renames file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::rename()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L361)**</sub><br>


### Parameters:

* string $path _Path to filename._
* string $new_basename _$to 
New
file base name (file name with extension)._
* bool $overwrite = true _[optional] 
Is set to true, if file already exists will be overwritten with the new one._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="getcontent()"># getContent()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::getContent(string $path):string|false
```

### ### Reads entire file into a string
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::getContent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L379)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* string or false _Data from file, false otherwise._

<h2><a name="putcontent()"># putContent()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::putContent(string $path, string|array $data, bool $append = false, bool $lock = true, bool $create_file = false):int|false
```

### ### Write data to a file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::putContent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L407)**</sub><br>


### Parameters:

* string $path _Path to filename._
* string or array $data 
* bool $append = false _[optional] 
Append the data to the file instead of overwriting it._
* bool $lock = true _[optional] 
Acquire an exclusive lock on the file while proceeding to the writing._
* bool $create_file = false _[optional] 
Is true, method will create new file if one doesn&#039;t exist._

### Returns:

* int or false _Number of bytes that were written to the file, false otherwise._

<h2><a name="size()"># size()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::size(string $path):int|false
```

### ### Gets file size
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::size()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L440)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* int or false _The size of the file in bytes, false otherwise._

<h2><a name="lastaccessed()"># lastAccessed()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lastAccessed(string $path):int|false
```

### ### Gets last access time of file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lastAccessed()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L460)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* int or false _Returns the time the file was last accessed, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="lastmodified()"># lastModified()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lastModified(string $path):int|false
```

### ### Gets last modification time of file

_Represents when the data or content is changed or modified, not including that of metadata such as ownership or owner group._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lastModified()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L478)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* int or false _Returns the time the file was last modified, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="setlastaccessedandmodification()"># setLastAccessedAndModification()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::setLastAccessedAndModification(string $path, int|null $last_accessed, int|null $modified):bool
```

### ### Sets last access and modification time of file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::setLastAccessedAndModification()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L501)**</sub><br>


### Parameters:

* string $path _Path to filename._
* int or null $last_accessed _The touch time. If mtime is null, the current system time() is used._
* int or null $modified _If not null, the access time of the given filename is set to the value of atime.
Otherwise, it is set to the value passed to the mtime parameter. If both are null, the current system time is used._

### Returns:

* bool _True on success or false on failure._

<h2><a name="lastchanged()"># lastChanged()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lastChanged(string $path):int|false
```

### ### Gets inode change time of a file

_Represents the time when the metadata or inode data of a file is altered, such as the change of permissions, ownership or group._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lastChanged()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L521)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* int or false _Returns the time the file was last changed, or false on failure. The time is returned as a Unix timestamp._

<h2><a name="open()"># open()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::open(string $filename, \FireHub\TheCore\Support\Enums\FileFolder\Mode $mode):resource|false
```

### ### Open file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::open()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L540)**</sub><br>


### Parameters:

* string $filename _File system pointer resource that is typically created using fopen()._
* [\FireHub\TheCore\Support\Enums\FileFolder\Mode](./Mode) $mode _File mode enum for type of access._

### Returns:

* resource or false _File pointer resource on success, or false on failure._

<h2><a name="write()"># write()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::write(resource $filename, string $data):int|false
```

### ### Write to the file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::write()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L559)**</sub><br>


### Parameters:

* resource $filename _File system pointer resource that is typically created using fopen()._
* string $data _String that is to be written._

### Returns:

* int or false 

<h2><a name="close()"># close()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::close(resource $filename):bool
```

### ### Close the file
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::close()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L575)**</sub><br>


### Parameters:

* resource $filename _File pointer must be valid, and must point to a file successfully opened by fopen or fsockopen._

### Returns:

* bool _True if file is closed, false otherwise._

<h2><a name="eol()"># eol()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::eol(resource $filename):bool
```

### ### Tests for end-of-file on a file pointer
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::eol()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L591)**</sub><br>


### Parameters:

* resource $filename _File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose())._

### Returns:

* bool _True if the file pointer is at EOF or an error occurs, otherwise returns false._

<h2><a name="character()"># character()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::character(resource $filename):string|false
```

### ### Gets character from file pointer
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::character()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L607)**</sub><br>


### Parameters:

* resource $filename _File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose())._

### Returns:

* string or false _String containing a single character read from the file pointed to by stream. Returns false on EOF._

<h2><a name="line()"># line()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::line(resource $filename):string|false
```

### ### Gets line from file pointer
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::line()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L626)**</sub><br>


### Parameters:

* resource $filename _File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose())._

### Returns:

* string or false _String of up to length - 1 bytes read from the file pointed to by stream. If there is no more data to read in the file pointer, then false is returned._

<h2><a name="lines()"># lines()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lines(string $path):array<int,string>|false
```

### ### Reads entire file into an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lines()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L648)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* array&lt;int,string&gt; or false _Each element of the array corresponds to a line in the file, with the newline still attached, false otherwise._

<h2><a name="lazylines()"># lazyLines()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lazyLines(string $path):\Generator<int,string>|false
```

### ### Reads entire file into an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lazyLines()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L677)**</sub><br>


### Parameters:

* string $path _Path to filename._

### Returns:

* [\Generator&lt;int,string&gt;](./Generator&lt;int,string&gt;) or false _Each element of the array corresponds to a line in the file, with the newline still attached, false otherwise._

<h2><a name="lock()"># lock()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::lock(resource $filename, \FireHub\TheCore\Support\Enums\FileFolder\Lock $lock):bool
```

### ### Portable advisory file locking
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::lock()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L697)**</sub><br>


### Parameters:

* resource $filename _An open file pointer._
* [\FireHub\TheCore\Support\Enums\FileFolder\Lock](./Lock) $lock 

### Returns:

* bool _True on success or false on failure._

<h2><a name="moveuploaded()"># moveUploaded()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\File::moveUploaded(string $from, string $to):bool
```

### ### Moves an uploaded file to a new location
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\File::moveUploaded()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.File.php#L716)**</sub><br>


### Parameters:

* string $from _Filename of the uploaded file._
* string $to _Destination of the moved file._

### Returns:

* bool _True on success or false on failure._


