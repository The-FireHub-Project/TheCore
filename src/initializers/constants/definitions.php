<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This file contains all system definitions. This file is required to be loaded.
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

use const FIREHUB_DS;
use const FIREHUB_EOL;

/**
 * ### System definition for separating folders, platform specific
 *
 * Convert '\' and '/' for different operating systems.
 * This is just shorter version of PHP internal DIRECTORY_SEPARATOR constant.
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string \FireHub\TheCore\Initializers\Constants\DS
 *
 * @link https://www.php.net/manual/en/dir.constants.php To find more info for DIRECTORY_SEPARATOR constant.
 *
 * @api
 */
const DS = FIREHUB_DS;

/**
 * ### System definition for separating file lines, platform specific
 *
 * This is just shorter version of PHP internal PHP_EOL constant.
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string \FireHub\TheCore\Initializers\Constants\EOL
 *
 * @link https://www.php.net/manual/en/reserved.constants.php To find more info for PHP_EOL constant.
 *
 * @api
 */
const EOL = FIREHUB_EOL;