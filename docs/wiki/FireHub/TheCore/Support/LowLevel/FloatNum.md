
```php
class \FireHub\TheCore\Support\LowLevel\FloatNum()
```

### ### Float low level class
<sub>Fully Qualified Class Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum**</sub><br>
<sub>This class is part of package:  **\FireHub\Support**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L51)**</sub><br>
<sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/TheCore/blame/v1.0/src/support/lowlevel/firehub.FloatNum.php)**</sub><br>
<sub>History:  **[view history](https://github.com/The-FireHub-Project/TheCore/commits/v1.0/src/support/lowlevel/firehub.FloatNum.php)**</sub><br>

<sub>_This class was created by Danijel Galić <danijel.galic@outlook.com>_</sub><br>
<sub>_2023 FireHub Web Application Framework_</sub><br>
<sub>_<https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3_</sub><br>
<sub>_GIT: $Id$ Blob checksum._</sub><br>



## Methods table

| Type  | Name  | Title |
| :---  | :---  | :---  |
|static |<a href="#numeric()">numeric</a>|### Checks if value is numeric|
|static |<a href="#absolute()">absolute</a>|### Get absolute value|
|static |<a href="#round()">round</a>|### Rounds a float|
|static |<a href="#ceil()">ceil</a>|### Round fractions up|
|static |<a href="#floor()">floor</a>|### Round fractions down|
|static |<a href="#max()">max</a>|### Find highest value|
|static |<a href="#min()">min</a>|### Find lowest value|
|static |<a href="#power()">power</a>|### Exponential expression|
|static |<a href="#isfloat()">isFloat</a>|### Checks if value is float|
|static |<a href="#cosine()">cosine</a>|### Cosine value|
|static |<a href="#cosinearc()">cosineArc</a>|### Arc cosine value|
|static |<a href="#cosinehyperbolic()">cosineHyperbolic</a>|### Hyperbolic cosine|
|static |<a href="#cosineinversehyperbolic()">cosineInverseHyperbolic</a>|### Inverse hyperbolic cosine|
|static |<a href="#sine()">sine</a>|### Sine|
|static |<a href="#sinearc()">sineArc</a>|### Arc sine|
|static |<a href="#sinehyperbolic()">sineHyperbolic</a>|### Hyperbolic sine|
|static |<a href="#sinehyperbolicinverse()">sineHyperbolicInverse</a>|### Inverse hyperbolic sine|
|static |<a href="#tangent()">tangent</a>|### Tangent|
|static |<a href="#tangentarc()">tangentArc</a>|### Arc tangent|
|static |<a href="#tangentarc2()">tangentArc2</a>|### Arc tangent of two variables|
|static |<a href="#tangenthyperbolic()">tangentHyperbolic</a>|### Hyperbolic Tangent|
|static |<a href="#tangenthyperbolicinverse()">tangentHyperbolicInverse</a>|### Inverse hyperbolic Tangent|
|static |<a href="#degreestoradian()">degreesToRadian</a>|### Converts the number in degrees to the radian equivalent|
|static |<a href="#radiantodegrees()">radianTodegrees</a>|### Converts the radian number to the equivalent number in degrees|
|static |<a href="#exponent()">exponent</a>|### Calculates the exponent of e|
|static |<a href="#divide()">divide</a>|### Divides two numbers, according to IEEE 754|
|static |<a href="#logarithm()">logarithm</a>|### Natural logarithm|
|static |<a href="#squareroot()">squareRoot</a>|### Square root|


# Methods


<h2><a name="numeric()"># numeric()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::numeric(mixed $value)
```

### ### Checks if value is numeric
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::numeric()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L54)**</sub><br>


### Parameters:

* mixed $value _Value to check._

<h2><a name="absolute()"># absolute()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::absolute(int|float $number)
```

### ### Get absolute value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::absolute()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L70)**</sub><br>


### Parameters:

* int or float $number _The numeric value to process._

<h2><a name="round()"># round()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::round(int|float $number, int $precision, \FireHub\TheCore\Support\Enums\Number\RoundMode $round_mode = RoundMode::PHP_ROUND_HALF_UP)
```

### ### Rounds a float
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::round()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L94)**</sub><br>


### Parameters:

* int or float $number _The value to round._
* int $precision _[optional] 
Number of decimal digits to round to._
* [\FireHub\TheCore\Support\Enums\Number\RoundMode](./RoundMode) $round_mode = RoundMode::PHP_ROUND_HALF_UP _[optional] 
Specify the mode in which rounding occurs._

<h2><a name="ceil()"># ceil()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::ceil(int|float $number):int
```

### ### Round fractions up
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::ceil()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L112)**</sub><br>


### Parameters:

* int or float $number _The value to round up._

### Returns:

* int _Rounded number up to the next highest integer._

<h2><a name="floor()"># floor()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::floor(int|float $number):int
```

### ### Round fractions down
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::floor()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L128)**</sub><br>


### Parameters:

* int or float $number _The value to round down._

### Returns:

* int _Rounded number up to the next lowest integer._

<h2><a name="max()"># max()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::max(mixed $value, mixed ...$values):mixed
```

### ### Find highest value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::max()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L147)**</sub><br>


### Parameters:

* mixed $value _Any comparable value._
* variadic mixed $values _Any comparable values._

### Returns:

* mixed _Parameter value considered highest according to standard comparisons. If an empty array is passed, then false will be returned._

<h2><a name="min()"># min()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::min(mixed $value, mixed ...$values):mixed
```

### ### Find lowest value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::min()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L166)**</sub><br>


### Parameters:

* mixed $value _Any comparable value._
* variadic mixed $values _Any comparable values._

### Returns:

* mixed _Parameter value considered lowest according to standard comparisons. If an empty array is passed, then false will be returned._

<h2><a name="power()"># power()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\Num::power(int|float $base, int|float $exponent):int|float
```

### ### Exponential expression
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\Num::power()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.Num.php#L185)**</sub><br>


### Parameters:

* int or float $base _The base to use._
* int or float $exponent _The exponent._

### Returns:

* int or float _Base raised to the power of exponent. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with int type, otherwise it will be returned as a float._

<h2><a name="isfloat()"># isFloat()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::isFloat(mixed $value)
```

### ### Checks if value is float
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::isFloat()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L65)**</sub><br>


### Parameters:

* mixed $value _Value to check._

<h2><a name="cosine()"># cosine()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::cosine(float $number):float
```

### ### Cosine value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::cosine()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L81)**</sub><br>


### Parameters:

* float $number _The argument to process in radians._

### Returns:

* float _The cosine of angle._

<h2><a name="cosinearc()"># cosineArc()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::cosineArc(float $number):float
```

### ### Arc cosine value
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::cosineArc()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L97)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _The arc cosine of num in radians._

<h2><a name="cosinehyperbolic()"># cosineHyperbolic()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::cosineHyperbolic(float $number):float
```

### ### Hyperbolic cosine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::cosineHyperbolic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L113)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Hyperbolic cosine of number, defined as (exp($number) + exp(-$number))/2._

<h2><a name="cosineinversehyperbolic()"># cosineInverseHyperbolic()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::cosineInverseHyperbolic(float $number):float
```

### ### Inverse hyperbolic cosine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::cosineInverseHyperbolic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L129)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Inverse hyperbolic cosine of num, i.e. the value whose hyperbolic cosine is number._

<h2><a name="sine()"># sine()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::sine(float $number):float
```

### ### Sine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::sine()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L145)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Sine of number._

<h2><a name="sinearc()"># sineArc()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::sineArc(float $number):float
```

### ### Arc sine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::sineArc()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L161)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Arc sine of num in radians._

<h2><a name="sinehyperbolic()"># sineHyperbolic()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::sineHyperbolic(float $number):float
```

### ### Hyperbolic sine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::sineHyperbolic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L177)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Hyperbolic sine of number._

<h2><a name="sinehyperbolicinverse()"># sineHyperbolicInverse()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::sineHyperbolicInverse(float $number):float
```

### ### Inverse hyperbolic sine
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::sineHyperbolicInverse()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L193)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Inverse hyperbolic sine of number._

<h2><a name="tangent()"># tangent()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::tangent(float $number):float
```

### ### Tangent
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::tangent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L209)**</sub><br>


### Parameters:

* float $number _The argument to process in radians._

### Returns:

* float _Tangent of number._

<h2><a name="tangentarc()"># tangentArc()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::tangentArc(float $number):float
```

### ### Arc tangent
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::tangentArc()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L225)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Arc tangent of num in radians._

<h2><a name="tangentarc2()"># tangentArc2()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::tangentArc2(float $x, float $y):float
```

### ### Arc tangent of two variables

_This method calculates the arc tangent of the two variables x and y.
It is similar to calculating the arc tangent of y / x, except that the signs of both arguments are used to determine the quadrant of the result._

<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::tangentArc2()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L247)**</sub><br>


### Parameters:

* float $x _Divisor parameter._
* float $y _Dividend parameter._

### Returns:

* float _Arc tangent of y/x in radians._

<h2><a name="tangenthyperbolic()"># tangentHyperbolic()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::tangentHyperbolic(float $number):float
```

### ### Hyperbolic Tangent
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::tangentHyperbolic()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L263)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Hyperbolic tangent of number._

<h2><a name="tangenthyperbolicinverse()"># tangentHyperbolicInverse()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::tangentHyperbolicInverse(float $number):float
```

### ### Inverse hyperbolic Tangent
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::tangentHyperbolicInverse()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L279)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _Inverse hyperbolic tangent of number._

<h2><a name="degreestoradian()"># degreesToRadian()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::degreesToRadian(float $number):float
```

### ### Converts the number in degrees to the radian equivalent
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::degreesToRadian()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L295)**</sub><br>


### Parameters:

* float $number _Angular value in degrees._

### Returns:

* float _Radian equivalent of number._

<h2><a name="radiantodegrees()"># radianTodegrees()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::radianTodegrees(float $number):float
```

### ### Converts the radian number to the equivalent number in degrees
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::radianTodegrees()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L311)**</sub><br>


### Parameters:

* float $number _Radian value._

### Returns:

* float _Equivalent of number in degrees._

<h2><a name="exponent()"># exponent()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::exponent(float $number):float
```

### ### Calculates the exponent of e
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::exponent()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L329)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _&#039;e&#039; raised to the power of number._

<h2><a name="divide()"># divide()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::divide(float $dividend, float $divisor):float
```

### ### Divides two numbers, according to IEEE 754
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::divide()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L348)**</sub><br>


### Parameters:

* float $dividend _Number to be divided._
* float $divisor _Number which divides the $dividend._

### Returns:

* float _The floating point result of the division of $dividend by $divisor._

<h2><a name="logarithm()"># logarithm()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::logarithm(float $number, float $base = EULER_NUM):float
```

### ### Natural logarithm
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::logarithm()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L369)**</sub><br>


### Parameters:

* float $number _The value to calculate the logarithm for._
* float $base = EULER_NUM _[optional] 
The optional logarithmic base to use (defaults to &#039;e&#039; and so to the natural logarithm)._

### Returns:

* float _The floating point result of the division of $dividend by $divisor._

<h2><a name="squareroot()"># squareRoot()</a></h2>

```php
static \FireHub\TheCore\Support\LowLevel\FloatNum::squareRoot(float $number):float
```

### ### Square root
<sub>Fully Qualified Method Name:  **\FireHub\TheCore\Support\LowLevel\FloatNum::squareRoot()**</sub><br>
<sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/TheCore/blob/v1.0/src/support/lowlevel/firehub.FloatNum.php#L385)**</sub><br>


### Parameters:

* float $number _The argument to process._

### Returns:

* float _The square root of num or the special value NAN for negative numbers._


