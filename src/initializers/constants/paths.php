<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This file contains all system path constants required for
 * successful app booting. This file is required to be loaded.
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

use Phar;

use function defined;
use function define;
use function dirname;

/**
 * ### System definition for separating folders, platform specific
 *
 * Convert '\' and '/' for different operating systems.
 * This is just shorter version of PHP internal DIRECTORY_SEPARATOR constant.
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string DS
 *
 * @uses DIRECTORY_SEPARATOR To resolve definition for separating folders.
 *
 * @link https://www.php.net/manual/en/dir.constants.php To find more info for DIRECTORY_SEPARATOR constant.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\DS')) define('FireHub\TheCore\Initializers\Constants\DS', DIRECTORY_SEPARATOR);

/**
 * ### System definition for separating file lines, platform specific
 *
 * This is just shorter version of PHP internal PHP_EOL constant.
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string EOL
 *
 * @uses PHP_EOL To resolve separating file lines.
 *
 * @link https://www.php.net/manual/en/reserved.constants.php To find more info for PHP_EOL constant.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\EOL')) define('FireHub\TheCore\Initializers\Constants\EOL', PHP_EOL);

/**
 * ### Root FireHub Core path
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string CORE_ROOT
 *
 * @uses \Phar To return the full phar URL to the currently executing Phar archive.
 *
 * @link https://php.net/manual/en/class.phar.php To find more info about Phar class.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\CORE_ROOT')) define('FireHub\TheCore\Initializers\Constants\CORE_ROOT', Phar::running(true));

/**
 * ### Root project path
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string PROJECT_ROOT
 *
 * @uses \Phar To return the full path on disk.
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\PROJECT_ROOT')) define('FireHub\TheCore\Initializers\Constants\PROJECT_ROOT', dirname(Phar::running(false)).DS.implode(DS, ['..', '..', '..', '..']));

/**
 * ### Root app path
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string APP_ROOT
 *
 * @uses \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT To resolve root project path.
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\APP_ROOT')) define('FireHub\TheCore\Initializers\Constants\APP_ROOT', PROJECT_ROOT.DS.'app');

/**
 * ### Root vendor path
 * @since 0.1.1.pre-alpha.M1
 *
 * @var string VENDOR_ROOT
 *
 * @uses \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT To resolve root project path.
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @api
 */
if (!defined('FireHub\TheCore\Initializers\Constants\VENDOR_ROOT')) define('FireHub\TheCore\Initializers\Constants\VENDOR_ROOT', PROJECT_ROOT.DS.'vendor');