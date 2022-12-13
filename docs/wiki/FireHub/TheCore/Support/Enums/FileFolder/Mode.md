
```php
enum \FireHub\TheCore\Support\Enums\FileFolder\Mode
```

### ### File mode enum
<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/filefolder/firehub.Mode.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/filefolder/firehub.Mode.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Cases table

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#read">READ</a>|### Open for reading only|&#039;r&#039;|
|<a href="#read_write">READ_WRITE</a>|### Open for reading and writing|&#039;r+&#039;|
|<a href="#rewrite">REWRITE</a>|### Open for writing only.|&#039;w&#039;|
|<a href="#read_rewrite">READ_REWRITE</a>|### Open for reading and writing, otherwise it has the same behavior as 'w'.|&#039;w+&#039;|
|<a href="#write_append">WRITE_APPEND</a>|### Open for writing only|&#039;a&#039;|
|<a href="#read_write_append">READ_WRITE_APPEND</a>|### Open for reading and writing|&#039;a+&#039;|
|<a href="#create_write">CREATE_WRITE</a>|### Create and open for writing only|&#039;x&#039;|
|<a href="#create_read_write">CREATE_READ_WRITE</a>|### Create and open for reading and writing|&#039;x+&#039;|
|<a href="#check_write">CHECK_WRITE</a>|Open the file for writing only|&#039;c&#039;|
|<a href="#check_read">CHECK_READ</a>|Open the file for reading and writing|&#039;c+&#039;|


# Cases


<h2><a name="read"># READ</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ = 'r'
```

### ### Open for reading only

_Place the file pointer at the beginning of the file.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L31)**</sub><br>


<h2><a name="read_write"># READ_WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_WRITE = 'r+'
```

### ### Open for reading and writing

_Place the file pointer at the beginning of the file.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L39)**</sub><br>


<h2><a name="rewrite"># REWRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::REWRITE = 'w'
```

### ### Open for writing only.

_Place the file pointer at the beginning of the file and truncate the file to zero length.
If the file does not exist, attempt to create it.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::REWRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L48)**</sub><br>


<h2><a name="read_rewrite"># READ_REWRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_REWRITE = 'w+'
```

### ### Open for reading and writing, otherwise it has the same behavior as 'w'.

_0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_REWRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L54)**</sub><br>


<h2><a name="write_append"># WRITE_APPEND</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::WRITE_APPEND = 'a'
```

### ### Open for writing only

_Place the file pointer at the end of the file.
If the file does not exist, attempt to create it.
In this mode, fseek() has no effect, writes are always appended.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::WRITE_APPEND**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L64)**</sub><br>


<h2><a name="read_write_append"># READ_WRITE_APPEND</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_WRITE_APPEND = 'a+'
```

### ### Open for reading and writing

_Place the file pointer at the end of the file.
If the file does not exist, attempt to create it.
In this mode, fseek() only affects the reading position, writes are always appended.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::READ_WRITE_APPEND**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L74)**</sub><br>


<h2><a name="create_write"># CREATE_WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::CREATE_WRITE = 'x'
```

### ### Create and open for writing only

_Place the file pointer at the beginning of the file.
If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING.
If the file does not exist, attempt to create it.
This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::CREATE_WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L85)**</sub><br>


<h2><a name="create_read_write"># CREATE_READ_WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::CREATE_READ_WRITE = 'x+'
```

### ### Create and open for reading and writing

_Otherwise, it has the same behavior as &amp;#039;x&amp;#039;.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::CREATE_READ_WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L93)**</sub><br>


<h2><a name="check_write"># CHECK_WRITE</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::CHECK_WRITE = 'c'
```

### Open the file for writing only

_If the file does not exist, it is created.
If it exists, it is neither truncated (as opposed to &amp;#039;w&amp;#039;), nor the call to this function fails (as is the case with &amp;#039;x&amp;#039;).
The file pointer is positioned on the beginning of the file.
This may be useful if it&amp;#039;s desired to get an advisory lock (see flock()) before attempting to modify the file, as using &amp;#039;w&amp;#039; could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::CHECK_WRITE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L104)**</sub><br>


<h2><a name="check_read"># CHECK_READ</a></h2>

```php
\FireHub\TheCore\Support\Enums\FileFolder\Mode::CHECK_READ = 'c+'
```

### Open the file for reading and writing

_Otherwise, it has the same behavior as &amp;#039;c&amp;#039;.
0.1.3.pre-alpha.M1_

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Mode::CHECK_READ**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Mode.php#L112)**</sub><br>


