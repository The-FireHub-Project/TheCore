<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Support\Enums\FileFolder;

/**
 * ### File mode enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Mode:string {

    /**
     * ### Open for reading only
     *
     * Place the file pointer at the beginning of the file.
     * 0.1.3.pre-alpha.M1
     */
    case READ = 'r';

    /**
     * ### Open for reading and writing
     *
     * Place the file pointer at the beginning of the file.
     * 0.1.3.pre-alpha.M1
     */
    case READ_WRITE = 'r+';

    /**
     * ### Open for writing only.
     *
     * Place the file pointer at the beginning of the file and truncate the file to zero length.
     * If the file does not exist, attempt to create it.
     * 0.1.3.pre-alpha.M1
     */
    case REWRITE = 'w';

    /**
     * ### Open for reading and writing, otherwise it has the same behavior as 'w'.
     * 0.1.3.pre-alpha.M1
     */
    case READ_REWRITE = 'w+';

    /**
     * ### Open for writing only
     *
     * Place the file pointer at the end of the file.
     * If the file does not exist, attempt to create it.
     * In this mode, fseek() has no effect, writes are always appended.
     * 0.1.3.pre-alpha.M1
     */
    case WRITE_APPEND = 'a';

    /**
     * ### Open for reading and writing
     *
     * Place the file pointer at the end of the file.
     * If the file does not exist, attempt to create it.
     * In this mode, fseek() only affects the reading position, writes are always appended.
     * 0.1.3.pre-alpha.M1
     */
    case READ_WRITE_APPEND = 'a+';

    /**
     * ### Create and open for writing only
     *
     * Place the file pointer at the beginning of the file.
     * If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING.
     * If the file does not exist, attempt to create it.
     * This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
     * 0.1.3.pre-alpha.M1
     */
    case CREATE_WRITE = 'x';

    /**
     * ### Create and open for reading and writing
     *
     * Otherwise, it has the same behavior as 'x'.
     * 0.1.3.pre-alpha.M1
     */
    case CREATE_READ_WRITE = 'x+';

    /**
     * Open the file for writing only
     *
     * If the file does not exist, it is created.
     * If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x').
     * The file pointer is positioned on the beginning of the file.
     * This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
     * 0.1.3.pre-alpha.M1
     */
    case CHECK_WRITE = 'c';

    /**
     * Open the file for reading and writing
     *
     * Otherwise, it has the same behavior as 'c'.
     * 0.1.3.pre-alpha.M1
     */
    case CHECK_READ = 'c+';

}