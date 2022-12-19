
```php
class \FireHub\TheCore\Support\LowLevel\Arr()
```

### ### Array low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\Arr**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L91)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.Arr.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.Arr.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#isarray()">isArray</a>|### Checks if value is array|
|static |<a href="#isempty()">isEmpty</a>|### Checks if array is empty|
|static |<a href="#ismultidimensional()">isMultiDimensional</a>|### Checks if array is multidimensional|
|static |<a href="#isassociative()">isAssociative</a>|### Checks if array is associative|
|static |<a href="#count()">count</a>|### Counts all elements in the array|
|static |<a href="#countvalues()">countValues</a>|### Counts all the values of an array|
|static |<a href="#inarray()">inArray</a>|### Checks if a value exists in an array|
|static |<a href="#shift()">shift</a>|### Removes an item at the beginning of an array|
|static |<a href="#unshift()">unshift</a>|### Prepend elements to the beginning of the array|
|static |<a href="#pop()">pop</a>|### Pop the element off the end of array|
|static |<a href="#push()">push</a>|### Push elements onto the end of array|
|static |<a href="#column()">column</a>|### Return the values from a single column in the input array|
|static |<a href="#merge()">merge</a>|### Merges the elements of one or more arrays together|
|static |<a href="#mergerecursive()">mergeRecursive</a>|### Merge two or more arrays recursively|
|static |<a href="#combine()">combine</a>|### Creates an array by using one array for keys and another for its values|
|static |<a href="#search()">search</a>|### Searches the array for a given value and returns the first corresponding key if successful|
|static |<a href="#difference()">difference</a>|### Computes the difference of arrays|
|static |<a href="#differencekey()">differenceKey</a>|### Computes the difference of arrays using keys for comparison|
|static |<a href="#differenceassoc()">differenceAssoc</a>|### Computes the difference of arrays with additional index check|
|static |<a href="#unique()">unique</a>|### Removes duplicate values from an array|
|static |<a href="#flip()">flip</a>|### Exchanges all keys with their associated values in array|
|static |<a href="#pad()">pad</a>|### Pad array to the specified length with a value|
|static |<a href="#random()">random</a>|### Pick one or more random values out of the array|
|static |<a href="#reverse()">reverse</a>|### Reverse the order of array items|
|static |<a href="#intersect()">intersect</a>|### Computes the intersection of arrays|
|static |<a href="#intersectkey()">intersectKey</a>|### Computes the intersection of arrays using keys for comparison|
|static |<a href="#intersectassoc()">intersectAssoc</a>|### Computes the intersection of arrays with additional index check|
|static |<a href="#shuffle()">shuffle</a>|### Shuffle array items|
|static |<a href="#slice()">slice</a>|### Extract a slice of the array|
|static |<a href="#splice()">splice</a>|### Remove a portion of the array and replace it with something else|
|static |<a href="#sort()">sort</a>|### Sorts array|
|static |<a href="#sortbykey()">sortByKey</a>|### Sorts array by key|
|static |<a href="#sortby()">sortBy</a>|### Sorts array by values using a user-defined comparison function|
|static |<a href="#sortkeyby()">sortKeyBy</a>|### Sorts array by key using a user-defined comparison function|
|static |<a href="#sortbymany()">sortByMany</a>|### Sorts array by multiple fields|
|static |<a href="#keyexist()">keyExist</a>|### Checks if the given key or index exists in the array|
|static |<a href="#keys()">keys</a>|### Return all the keys or a subset of the keys of an array|
|static |<a href="#values()">values</a>|### Return all the values from array|
|static |<a href="#firstkey()">firstKey</a>|### Get first key from array|
|static |<a href="#lastkey()">lastKey</a>|### Get last key from array|
|static |<a href="#filter()">filter</a>|### Filter elements in an array|
|static |<a href="#range()">range</a>|### Create an array containing a range of elements|
|static |<a href="#walk()">walk</a>|### Apply a user function to every member of an array|
|static |<a href="#map()">map</a>|### Applies the callback to the elements of the given array|
|static |<a href="#fill()">fill</a>|### Fill an array with values|
|static |<a href="#fillkeys()">fillKeys</a>|### Fill an array with values, specifying keys|


# Methods


<h2><a name="isarray()"># isArray()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::isArray(mixed $value)
```

### ### Checks if value is array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::isArray()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L105)**</sub><br>


### Parameters:

* mixed $value _Value to check._

<h2><a name="isempty()"># isEmpty()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::isEmpty(array $array):bool
```

### ### Checks if array is empty
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::isEmpty()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L123)**</sub><br>


### Parameters:

* array $array 

### Returns:

* bool _True if array is empty, false otherwise_

<h2><a name="ismultidimensional()"># isMultiDimensional()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::isMultiDimensional(array $array):bool
```

### ### Checks if array is multidimensional
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::isMultiDimensional()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L144)**</sub><br>


### Parameters:

* array $array 

### Returns:

* bool _True if array is multidimensional, false otherwise._

<h2><a name="isassociative()"># isAssociative()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::isAssociative(array $array):bool
```

### ### Checks if array is associative
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::isAssociative()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L163)**</sub><br>


### Parameters:

* array $array 

### Returns:

* bool _True if array is associative, false otherwise_

<h2><a name="count()"># count()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::count(array $array, bool $multi_dimensional = false):positive-int|\FireHub\TheCore\Support\LowLevel\0
```

### ### Counts all elements in the array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::count()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L186)**</sub><br>


### Parameters:

* array $array 
* bool $multi_dimensional = false _[optional] 
Count multidimensional items._

### Returns:

* positive-int or [\FireHub\TheCore\Support\LowLevel\0](./0) _Number of elements in array._

<h2><a name="countvalues()"># countValues()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::countValues(array $array, null|int|string $key = null):array<array-key,int<1, max>>|false
```

### ### Counts all the values of an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::countValues()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L210)**</sub><br>


### Parameters:

* array $array 
* null or int or string $key = null _[optional] 
Key to count if counting multidimensional array._

### Returns:

* array&lt;array-key,int&lt;1, max&gt;&gt; or false _An associative array of values from input as keys and their count as value, false otherwise._

<h2><a name="inarray()"># inArray()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::inArray(mixed $value, array $array):bool
```

### ### Checks if a value exists in an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::inArray()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L237)**</sub><br>


### Parameters:

* mixed $value _The searched value.

note: If needle is a string, the comparison is done in a case-sensitive manner._
* array $array 

### Returns:

* bool _True if value is found in the array, false otherwise._

<h2><a name="shift()"># shift()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::shift(array &$array):mixed
```

### ### Removes an item at the beginning of an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::shift()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L255)**</sub><br>


### Parameters:

* by refrence array $array 

### Returns:

* mixed _The shifted value, or null if array is empty or is not an array._

<h2><a name="unshift()"># unshift()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::unshift(array &$array, mixed ...$values):int
```

### ### Prepend elements to the beginning of the array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::unshift()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L276)**</sub><br>


### Parameters:

* by refrence array $array 
* variadic mixed $values _[optional] 
The prepended variables._

### Returns:

* int _The number of elements in the array._

<h2><a name="pop()"># pop()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::pop(array &$array):\FireHub\TheCore\Support\LowLevel\TValue|null
```

### ### Pop the element off the end of array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::pop()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L295)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* by refrence array $array 

### Returns:

* [\FireHub\TheCore\Support\LowLevel\TValue](./TValue) or null _The last value of array. If array is empty (or is not an array), null will be returned._

<h2><a name="push()"># push()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::push(array &$array, mixed ...$values):int
```

### ### Push elements onto the end of array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::push()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L316)**</sub><br>


### Parameters:

* by refrence array $array 
* variadic mixed $values _[optional] 
The prepended variables._

### Returns:

* int _The number of elements in the array._

<h2><a name="column()"># column()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::column(array $array, int|string|null $key, int|string|null $index = null)
```

### ### Return the values from a single column in the input array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::column()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L342)**</sub><br>


### Parameters:

* array $array 
* int or string or null $key _The column of values to return.
This value may be the integer key of the column you wish to retrieve, or it may be the string key name for an associative array.
It may also be NULL to return complete arrays (useful together with index_key to reindex the array)._
* int or string or null $index = null _[optional] 
The column to use as the index/keys for the returned array.
This value may be the integer key of the column, or it may be the string key name.
The value is cast as usual for array keys._

<h2><a name="merge()"># merge()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::merge(array ...$arrays)
```

### ### Merges the elements of one or more arrays together
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::merge()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L366)**</sub><br>


### Parameters:

* variadic array $arrays 

<h2><a name="mergerecursive()"># mergeRecursive()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::mergeRecursive(array ...$arrays)
```

### ### Merge two or more arrays recursively
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::mergeRecursive()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L384)**</sub><br>


### Parameters:

* variadic array $arrays 

<h2><a name="combine()"># combine()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::combine(array $keys, array $values)
```

### ### Creates an array by using one array for keys and another for its values
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::combine()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L412)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $keys 
* array $values 

<h2><a name="search()"># search()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::search(mixed $value, array $array, int|string|false $second_dimension = false):int|string|false
```

### ### Searches the array for a given value and returns the first corresponding key if successful
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::search()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L450)**</sub><br>


### Parameters:

* mixed $value _The searched value._
* array $array 
* int or string or false $second_dimension = false _[optional] 
Allows you to search second dimension on multidimensional array._

### Returns:

* int or string or false _The key for needle if it is found in the array, false otherwise._

<h2><a name="difference()"># difference()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::difference(array $array, array ...$excludes)
```

### ### Computes the difference of arrays
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::difference()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L476)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $excludes 

<h2><a name="differencekey()"># differenceKey()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::differenceKey(array $array, array ...$excludes)
```

### ### Computes the difference of arrays using keys for comparison
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::differenceKey()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L502)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $excludes 

<h2><a name="differenceassoc()"># differenceAssoc()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::differenceAssoc(array $array, array ...$excludes)
```

### ### Computes the difference of arrays with additional index check
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::differenceAssoc()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L528)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $excludes 

<h2><a name="unique()"># unique()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::unique(array $array)
```

### ### Removes duplicate values from an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::unique()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L551)**</sub><br>


### Parameters:

* array $array 

<h2><a name="flip()"># flip()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::flip(array $array)
```

### ### Exchanges all keys with their associated values in array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::flip()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L574)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue of array-key*


### Parameters:

* array $array 

<h2><a name="pad()"># pad()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::pad(array $array, int $size, mixed $value)
```

### ### Pad array to the specified length with a value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::pad()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L600)**</sub><br>


### Parameters:

* array $array 
* int $size _New size of the array._
* mixed $value _Value to pad if input is less than pad_size._

<h2><a name="random()"># random()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::random(array $array, positive-int $number = 1, bool $preserve_keys = false)
```

### ### Pick one or more random values out of the array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::random()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L632)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* positive-int $number = 1 _[optional] 
Specifies how many entries you want to pick._
* bool $preserve_keys = false _[optional] 
Whether you want to preserve keys from original array or not._

<h2><a name="reverse()"># reverse()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::reverse(array $array, bool $preserve_keys = false)
```

### ### Reverse the order of array items
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::reverse()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L672)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* bool $preserve_keys = false _[optional] 
Whether you want to preserve keys from original array or not._

<h2><a name="intersect()"># intersect()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::intersect(array $array, array ...$arrays)
```

### ### Computes the intersection of arrays
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::intersect()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L700)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $arrays 

<h2><a name="intersectkey()"># intersectKey()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::intersectKey(array $array, array ...$arrays)
```

### ### Computes the intersection of arrays using keys for comparison
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::intersectKey()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L726)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $arrays 

<h2><a name="intersectassoc()"># intersectAssoc()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::intersectAssoc(array $array, array ...$arrays)
```

### ### Computes the intersection of arrays with additional index check
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::intersectAssoc()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L750)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* variadic array $arrays 

<h2><a name="shuffle()"># shuffle()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::shuffle(array &$array, bool $preserve_keys = false)
```

### ### Shuffle array items
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::shuffle()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L779)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* by refrence array $array 
* bool $preserve_keys = false _[optional] 
Whether you want to preserve keys from original array or not._

<h2><a name="slice()"># slice()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::slice(array $array, int $offset, null|int $length = null, bool $preserve_keys = false)
```

### ### Extract a slice of the array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::slice()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L835)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* int $offset _If offset is non-negative, the sequence will start at that offset in the array.
If offset is negative, the sequence will start that far from the end of the array._
* null or int $length = null _[optional] 
If length is given and is positive, then the sequence will have that many elements in it.
If length is given and is negative then the sequence will stop that many elements from the end of the array.
If it is omitted, then the sequence will have everything from offset up until the end of the array._
* bool $preserve_keys = false _[optional] 
Note that array_slice will reorder and reset the array indices by default.
You can change this behaviour by setting preserve_keys to true._

<h2><a name="splice()"># splice()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::splice(array &$array, int $offset, null|int $length = null, mixed $replacement = [])
```

### ### Remove a portion of the array and replace it with something else
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::splice()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L868)**</sub><br>


### Parameters:

* by refrence array $array 
* int $offset _If offset is positive then the start of removed portion is at that offset from the beginning of the input array.
If offset is negative then it starts that far from the end of the input array._
* null or int $length = null _[optional] 
If length is omitted, removes everything from offset to the end of the array.
If length is specified and is positive, then that many elements will be removed.
If length is specified and is negative then the end of the removed portion will be that many elements from the end of the array._
* mixed $replacement = [] _[optional] 
If replacement array is specified, then the removed elements are replaced with elements from this array.
If offset and length are such that nothing is removed, then the elements from the replacement array or array are inserted in the place specified by the offset.
Keys in replacement array are not preserved._

<h2><a name="sort()"># sort()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::sort(array &$array, \FireHub\TheCore\Support\Enums\Order $order = Order::ASC, bool $preserve_keys = false, \FireHub\TheCore\Support\Enums\Sort $flag = Sort::SORT_REGULAR):bool
```

### ### Sorts array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::sort()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L902)**</sub><br>


### Parameters:

* by refrence array $array 
* [\FireHub\TheCore\Support\Enums\Order](./Order) $order = Order::ASC _[optional] 
Order type._
* bool $preserve_keys = false _[optional] 
Whether you want to preserve keys from original array or not._
* [\FireHub\TheCore\Support\Enums\Sort](./Sort) $flag = Sort::SORT_REGULAR _[optional] 
Sorting flag._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="sortbykey()"># sortByKey()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::sortByKey(array &$array, \FireHub\TheCore\Support\Enums\Order $order = Order::ASC):bool
```

### ### Sorts array by key
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::sortByKey()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L931)**</sub><br>


### Parameters:

* by refrence array $array 
* [\FireHub\TheCore\Support\Enums\Order](./Order) $order = Order::ASC _[optional] 
Order type._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="sortby()"># sortBy()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::sortBy(array &$array, callable $callback, bool $preserve_keys = false):bool
```

### ### Sorts array by values using a user-defined comparison function
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::sortBy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L956)**</sub><br>


### Parameters:

* by refrence array $array 
* callable $callback _The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than,
equal to, or greater than the second._
* bool $preserve_keys = false _[optional] 
Whether you want to preserve keys from original array or not._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="sortkeyby()"># sortKeyBy()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::sortKeyBy(array &$array, callable $callback):bool
```

### ### Sorts array by key using a user-defined comparison function
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::sortKeyBy()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L979)**</sub><br>


### Parameters:

* by refrence array $array 
* callable $callback _The callback comparison function. Function cmp_function should accept two parameters which will be filled by pairs of array keys.
The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than,
equal to, or greater than the second._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="sortbymany()"># sortByMany()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::sortByMany(array $array, array $fields)
```

### ### Sorts array by multiple fields
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::sortByMany()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1009)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* array $fields 

<h2><a name="keyexist()"># keyExist()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::keyExist(array-key $key, array $array):bool
```

### ### Checks if the given key or index exists in the array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::keyExist()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1067)**</sub><br>


### Parameters:

* array-key $key _Key to check._
* array $array 

### Returns:

* bool _True if key exist in array, false otherwise._

<h2><a name="keys()"># keys()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::keys(array $array, \FireHub\TheCore\Support\LowLevel\TValue $filter = null)
```

### ### Return all the keys or a subset of the keys of an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::keys()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1091)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $array 
* [\FireHub\TheCore\Support\LowLevel\TValue](./TValue) $filter = null _[optional] 
If specified, then only keys containing these values are returned._

<h2><a name="values()"># values()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::values(array $array)
```

### ### Return all the values from array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::values()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1113)**</sub><br>


### Templates:

* *TValue*


### Parameters:

* array $array 

<h2><a name="firstkey()"># firstKey()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::firstKey(array $array):string|int|null
```

### ### Get first key from array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::firstKey()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1129)**</sub><br>


### Parameters:

* array $array 

### Returns:

* string or int or null _First key from array or null if array is empty._

<h2><a name="lastkey()"># lastKey()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::lastKey(array $array):string|int|null
```

### ### Get last key from array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::lastKey()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1145)**</sub><br>


### Parameters:

* array $array 

### Returns:

* string or int or null _First key from array or null if array is empty._

<h2><a name="filter()"># filter()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::filter(array $array, null|callable $callback = null, bool $pass_key = false, bool $pass_value = true)
```

### ### Filter elements in an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::filter()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1175)**</sub><br>


### Parameters:

* array $array 
* null or callable $callback = null _[optional] 
The callback function to use.
If no callback is supplied, all empty and false entries of array will be removed._
* bool $pass_key = false _[optional] 
Pass key as the argument to callback._
* bool $pass_value = true _[optional] 
Pass value as the argument to callback._

<h2><a name="range()"># range()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::range(int|float|string $start, int|float|string $end, int|float $step = 1):array<int,(float|int|string)>|false
```

### ### Create an array containing a range of elements
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::range()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1208)**</sub><br>


### Parameters:

* int or float or string $start _First value of the sequence._
* int or float or string $end _The sequence is ended upon reaching the end value._
* int or float $step = 1 _[optional] 
If a step value is given, it will be used as the increment between elements in the sequence.
Step should be given as a positive number. If not specified, step will default to 1._

### Returns:

* array&lt;int,(float or int or string)&gt; or false _An array of elements from start to end, inclusive, false otherwise._

<h2><a name="walk()"># walk()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::walk(array &$array, callable $callback):bool
```

### ### Apply a user function to every member of an array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::walk()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1240)**</sub><br>


### Parameters:

* by refrence array $array 
* callable $callback _Typically, function name takes on two parameters. The array parameter&#039;s value being the first, and the key/index second.
If function name needs to be working with the actual values of the array, specify the first parameter of function name as a reference.
Then, any changes made to those elements will be made in the original array itself.

Users may not change the array itself from the callback function. e.g. Add/delete elements, unset elements, etc.
If the array that walk is applied to is changed, the behavior of this function is undefined, and unpredictable._

### Returns:

* bool _True on success, false otherwise._

<h2><a name="map()"># map()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::map(array $array, callable $callback)
```

### ### Applies the callback to the elements of the given array
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::map()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1259)**</sub><br>


### Parameters:

* array $array 
* callable $callback _Callback function to run for each element in each array._

<h2><a name="fill()"># fill()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::fill(int $start_index, positive-int|\FireHub\TheCore\Support\LowLevel\0 $length, \FireHub\TheCore\Support\LowLevel\TValue $value):array<int,\FireHub\TheCore\Support\LowLevel\TValue>
```

### ### Fill an array with values
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::fill()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1283)**</sub><br>


### Templates:

* *TValue*


### Parameters:

* int $start_index _The first index of the returned array._
* positive-int or [\FireHub\TheCore\Support\LowLevel\0](./0) $length _Number of elements to insert. Must be greater than or equal to zero._
* [\FireHub\TheCore\Support\LowLevel\TValue](./TValue) $value _p&gt;
Value to use for filling._

### Returns:

* array&lt;int,\FireHub\TheCore\Support\LowLevel\TValue&gt; _Filled array._

<h2><a name="fillkeys()"># fillKeys()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Arr::fillKeys(array $keys, \FireHub\TheCore\Support\LowLevel\TValue $value)
```

### ### Fill an array with values, specifying keys
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Arr::fillKeys()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Arr.php#L1307)**</sub><br>


### Templates:

* *TKey of array-key*

* *TValue*


### Parameters:

* array $keys 
* [\FireHub\TheCore\Support\LowLevel\TValue](./TValue) $value _p&gt;
Value to use for filling._


