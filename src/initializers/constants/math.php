<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This file contains all math definitions. This file is required to be loaded.
 * @since 0.1.1.pre-alpha.M1
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Initializers\Constants;

use const M_E;
use const M_PI;
use const M_EULER;

use function defined;
use function define;

/**
 * ### Ratio of a circle's circumference to its diameter
 * @since 0.1.3.pre-alpha.M1
 *
 * @var string PI
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\PI')) define('FireHub\TheCore\Initializers\Constants\PI', M_PI);

/**
 * ### Euler’s number
 *
 * The term Euler's number (e) refers to a mathematical expression for the base of the natural logarithm.
 * This is represented by a non-repeating number that never ends.
 * @since 0.1.3.pre-alpha.M1
 *
 * @var string EULER_NUM
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\EULER_NUM')) define('FireHub\TheCore\Initializers\Constants\EULER_NUM', M_E);

/**
 * ### Euler–Mascheroni constant
 * @since 0.1.3.pre-alpha.M1
 *
 * @var string EULER_CONST
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\EULER_CONST')) define('FireHub\TheCore\Initializers\Constants\EULER_CONST', M_EULER);