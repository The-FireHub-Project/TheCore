<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This file contains all math definitions. This file is required to be loaded.
 * @since 0.2.0.pre-alpha.M2
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Support\Constants;

use const M_E;
use const M_PI;
use const M_EULER;

use function defined;
use function define;

/**
 * ### Ratio of a circle's circumference to its diameter
 * @since 0.2.0.pre-alpha.M2
 *
 * @var string FIREHUB_PI
 *
 * @internal
 */
if (!defined('FIREHUB_PI')) define('FIREHUB_PI', M_PI);

/**
 * ### Euler’s number
 *
 * The term Euler's number (e) refers to a mathematical expression for the base of the natural logarithm.
 * This is represented by a non-repeating number that never ends.
 * @since 0.2.0.pre-alpha.M2
 *
 * @var string FIREHUB_EULER_NUM
 *
 * @internal
 */
if (!defined('FIREHUB_EULER_NUM')) define('FIREHUB_EULER_NUM', M_E);

/**
 * ### Euler–Mascheroni constant
 * @since 0.2.0.pre-alpha.M2
 *
 * @var string FIREHUB_EULER_CONST
 *
 * @internal
 */
if (!defined('FIREHUB_EULER_CONST')) define('FIREHUB_EULER_CONST', M_EULER);