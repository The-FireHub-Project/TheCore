---
layout: default
title: Lock
parent: \FireHub\Support
grand_parent: Core v0.2
has_children: false
---

<link rel="stylesheet" type="text/css" href="/css/style.css" />

# Lock

```php
enum \FireHub\TheCore\Support\Enums\FileFolder\Lock
```

### ### File lock enum

<sub>Fully Qualified Enum Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock**</sub><br>
<sub>This enum is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L23)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/v1.0/src/support/enums/filefolder/firehub.Lock.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/v1.0/src/support/enums/filefolder/firehub.Lock.php)**</sub><br>

<sub>_This enum was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>

## Changelog
***

* **0.1.3.pre-alpha.M1** 


## Cases table
***

| Name  | Title | Value |
| :---  | :---  | :---  |
|<a href="#shared">SHARED</a>|### Acquire a shared lock (reader)|1|
|<a href="#exclusive">EXCLUSIVE</a>|### Acquire an exclusive lock (writer)|2|
|<a href="#release">RELEASE</a>|### Release lock (shared or exclusive)|3|
|<a href="#shared_non_blocking">SHARED_NON_BLOCKING</a>|### Shared non-blocking operation while locking|5|
|<a href="#exclusive_non_blocking">EXCLUSIVE_NON_BLOCKING</a>|### Exclusive non-blocking operation while locking|6|


# Cases
***


<h2><a name="shared"># SHARED</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\FileFolder\Lock::SHARED = 1
```

### ### Acquire a shared lock (reader)

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock::SHARED**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L29)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="exclusive"># EXCLUSIVE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\FileFolder\Lock::EXCLUSIVE = 2
```

### ### Acquire an exclusive lock (writer)

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock::EXCLUSIVE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L35)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="release"># RELEASE</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\FileFolder\Lock::RELEASE = 3
```

### ### Release lock (shared or exclusive)

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock::RELEASE**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L41)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="shared_non_blocking"># SHARED_NON_BLOCKING</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\FileFolder\Lock::SHARED_NON_BLOCKING = 5
```

### ### Shared non-blocking operation while locking

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock::SHARED_NON_BLOCKING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L47)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

<h2><a name="exclusive_non_blocking"># EXCLUSIVE_NON_BLOCKING</a></h2>
***

```php
\FireHub\TheCore\Support\Enums\FileFolder\Lock::EXCLUSIVE_NON_BLOCKING = 6
```

### ### Exclusive non-blocking operation while locking

<sub>Fully Qualified Case Name:  **\FireHub\TheCore\Support\Enums\FileFolder\Lock::EXCLUSIVE_NON_BLOCKING**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/v1.0/src/support/enums/filefolder/firehub.Lock.php#L53)**</sub><br>

### Changelog:

* **0.1.3.pre-alpha.M1** 

