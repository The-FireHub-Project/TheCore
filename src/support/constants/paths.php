<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This file contains all system path constants required for
 * successful app booting. This file is required to be loaded.
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

use Phar;

use function defined;
use function define;
use function dirname;

/**
 * ### Root FireHub Core path
 * @since 0.2.0.pre-alpha.M2
 *
 * @var string FIREHUB_CORE_ROOT
 *
 * @link https://php.net/manual/en/class.phar.php To find more info about Phar class.
 *
 * @internal
 */
if (!defined('FIREHUB_CORE_ROOT')) define('FIREHUB_CORE_ROOT', Phar::running(true));

/**
 * ### Root project path
 * @since 0.2.0.pre-alpha.M2
 *
 * @var string FIREHUB_PROJECT_ROOT
 *
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @internal
 */
if (!defined('FIREHUB_PROJECT_ROOT')) define('FIREHUB_PROJECT_ROOT', dirname(Phar::running(false)).FIREHUB_DS.implode(FIREHUB_DS, ['..', '..', '..', '..']));