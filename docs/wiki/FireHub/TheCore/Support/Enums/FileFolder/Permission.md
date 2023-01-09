
```php
enum \FireHub\TheCore\Support\Enums\FileFolder\Permission
```

### ### File permission enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/enums/filefolder/firehub.Permission.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/enums/filefolder/firehub.Permission.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#nothing">NOTHING</a>|### User has no permissions|0|
|<a href="#execute">EXECUTE</a>|### User with execute permissions can run a file as a program|1|
|<a href="#write">WRITE</a>|### Grants the capability to modify, or remove the content of the file|2|
|<a href="#write_execute">WRITE_EXECUTE</a>|### Combination of write and execute permissions|3|
|<a href="#read">READ</a>|### Grants the capability to read, i.e., view the contents of the file|4|
|<a href="#read_execute">READ_EXECUTE</a>|### Combination of read and execute permissions|5|
|<a href="#read_write">READ_WRITE</a>|### Combination of read and write permissions|6|
|<a href="#all">ALL</a>|### User has all permissions: read, write and execute|7|


# Cases


<h2><a name="nothing"># NOTHING</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::NOTHING
```

### ### User has no permissions
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::NOTHING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L29)**</sub><br>


<h2><a name="execute"># EXECUTE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::EXECUTE = 1
```

### ### User with execute permissions can run a file as a program
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::EXECUTE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L35)**</sub><br>


<h2><a name="write"># WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::WRITE = 2
```

### ### Grants the capability to modify, or remove the content of the file
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L41)**</sub><br>


<h2><a name="write_execute"># WRITE_EXECUTE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::WRITE_EXECUTE = 3
```

### ### Combination of write and execute permissions
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::WRITE_EXECUTE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L47)**</sub><br>


<h2><a name="read"># READ</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ = 4
```

### ### Grants the capability to read, i.e., view the contents of the file
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L53)**</sub><br>


<h2><a name="read_execute"># READ_EXECUTE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ_EXECUTE = 5
```

### ### Combination of read and execute permissions
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ_EXECUTE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L59)**</sub><br>


<h2><a name="read_write"># READ_WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ_WRITE = 6
```

### ### Combination of read and write permissions
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::READ_WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L65)**</sub><br>


<h2><a name="all"># ALL</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Permission::ALL = 7
```

### ### User has all permissions: read, write and execute
<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Permission::ALL**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/enums/filefolder/firehub.Permission.php#L71)**</sub><br>


