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

use const FIREHUB_CORE_ROOT;
use const FIREHUB_PROJECT_ROOT;

/**
 * ### Root FireHub Core path
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string \FireHub\TheCore\Initializers\Constants\CORE_ROOT
 *
 * @link https://php.net/manual/en/class.phar.php To find more info about Phar class.
 *
 * @api
 */
const CORE_ROOT = FIREHUB_CORE_ROOT;

/**
 * ### Root project path
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT
 *
 * @api
 */
const PROJECT_ROOT = FIREHUB_PROJECT_ROOT;

/**
 * ### Root app path
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string \FireHub\TheCore\Initializers\Constants\APP_ROOT
 *
 * @uses \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT To resolve root project path.
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @api
 */
const APP_ROOT = PROJECT_ROOT.DS.'app';

/**
 * ### Root vendor path
 *
 * @since 0.1.1.pre-alpha.M1
 * @since 0.2.0-pre-alpha.M2 Changed internal definition for constant.
 *
 * @var string VENDOR_ROOT
 *
 * @uses \FireHub\TheCore\Initializers\Constants\PROJECT_ROOT To resolve root project path.
 * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
 *
 * @api
 */
const VENDOR_ROOT = PROJECT_ROOT.DS.'vendor';