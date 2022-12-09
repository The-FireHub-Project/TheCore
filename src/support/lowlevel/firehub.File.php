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

namespace FireHub\TheCore\Support\LowLevel;

use FireHub\TheCore\Support\Enums\ {
    Data\Type as DataType, FileFolder\Lock, FileFolder\Mode, FileFolder\Permission, Side
};
use Generator;

use const FireHub\TheCore\Initializers\Constants\DS;
use const FireHub\TheCore\Initializers\Constants\EOL;
use const FILE_APPEND;
use const LOCK_EX;
use const PATHINFO_EXTENSION;
use const PATHINFO_FILENAME;

use function basename;
use function chmod;
use function copy;
use function decoct;
use function fclose;
use function feof;
use function fgetc;
use function fgets;
use function file_get_contents;
use function file_put_contents;
use function fileatime;
use function filectime;
use function filemtime;
use function fileperms;
use function filesize;
use function flock;
use function fopen;
use function fwrite;
use function move_uploaded_file;
use function octdec;
use function pathinfo;
use function rename;
use function touch;
use function unlink;

/**
 * ### File low level class
 *
 * This low level support class is for manipulating data.
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.TooManyMethods) Support class are supposed to have many methods.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) Support class are supposed to have many public methods.
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity) Support class are not complex.
 * @SuppressWarnings(PHPMD.ExcessiveClassLength) Support class can be long.
 * @SuppressWarnings(PHPMD.ExcessivePublicCount) Support class can have large number of public items.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolean arguments.
 *
 * @todo Add calendar to time methods.
 */
final class File {

    /**
     * ### Checks if path is a file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::file() To check if value is file.
     *
     * @param string $path <p>
     * Path to check.
     * </p>
     *
     * @return bool True if path is file, false otherwise.
     */
    public static function isFile (string $path):bool {

        return DataIs::file($path);

    }

    /**
     * ### Checks if file is empty
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To get file size.
     *
     * @param string $path <p>
     * Path to check.
     * </p>
     *
     * @return bool True if file is empty, false otherwise.
     */
    public static function isEmpty (string $path):bool {

        return self::size($path) === 0;

    }

    /**
     * ### Returns parent folder name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::parentFolder() To get parent folder for path.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string The parent folder name of the given path.
     */
    public static function parentFolder (string $path):string {

        return Folder::parentFolder($path);

    }

    /**
     * ### Returns base name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string|false The basename of the given path, false if folder doesn't exist.
     */
    public static function basename (string $path):string|false {

        return self::isFile($path) ? basename($path) : false;

    }

    /**
     * ### Get file name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string|false The file name of the given path, false if file doesn't exist.
     */
    public static function filename (string $path):string|false {

        return self::isFile($path) ? pathinfo($path, PATHINFO_FILENAME) : false;

    }

    /**
     * ### Get extension name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string|false The extension of the given path, false if file doesn't exist.
     */
    public static function extension (string $path):string|false {

        return self::isFile($path) ? pathinfo($path, PATHINFO_EXTENSION) : false;

    }

    /**
     * ### Gets file permissions
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::getType() To get typo of file permissions.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To compare permissions value.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSafe::part() To extract substring from string.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string File permissions, false otherwise.
     */
    public static function getPermissions (string $path):string|false {

        if (!self::isFile($path) || Data::getType($permissions = fileperms($path)) !== DataType::T_INT) return false;

        /**
         * PHPStan stan reports that $permissions could be false.
         * @phpstan-ignore-next-line
         */
        return StrSB::part(decoct($permissions), -4);

    }

    /**
     * ### Sets file permissions
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\FileFolder\Permission As parametar.
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::getType() To get typo of file permissions.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To compare permissions value.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner <p>
     * File owner permission.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group <p>
     * File owner group permission.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $global <p>
     * Everyone's permission.
     * </p>
     *
     * @return bool True if permission was set, false otherwise.
     */
    public static function setPermissions (string $path, Permission $owner, Permission $owner_group, Permission $global):bool {

        $mode = '0'.$owner->value.$owner_group->value.$global->value;

        if (!self::isFile($path) || Data::getType($permissions = octdec($mode)) !== DataType::T_INT) return false;

        /**
         * PHPStan stan reports that $permissions could be false.
         * @phpstan-ignore-next-line
         */
        return chmod($path, $permissions);

    }

    /**
     * ### Creates file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\File::putContent() To write data to a file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function create (string $path):bool {

        return !self::isFile($path) && self::putContent($path, '', create_file: true) === 0;

    }

    /**
     * ### Deletes file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function delete (string $path):bool {

        return self::isFile($path) && unlink($path);

    }

    /**
     * ### Copies file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\File::basename() To get base name component of path.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param string $to <p>
     * The destination path. If dest is a URL, the copy operation may fail if the wrapper does not support overwriting of existing files.
     * If the destination file already exists, it will be overwritten.
     * </p>
     * @param bool $overwrite [optional] <p>
     * Is set to true, if file already exists will be overwritten with the new one.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function copy (string $path, string $to, bool $overwrite = true):bool {

        return $overwrite
            ? copy($path, $to.DS.self::basename($path))
            : (!self::isFile($to.DS.self::basename($path)) && copy($path, $to.DS.self::basename($path)));

    }

    /**
     * ### Moves file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\File::basename() To get base name component of path.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param string $to <p>
     * The destination path.
     * </p>
     * @param bool $overwrite [optional] <p>
     * Is set to true, if file already exists will be overwritten with the new one.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function move (string $path, string $to, bool $overwrite = true):bool {

        return $overwrite
            ? rename($path, $to.DS.self::basename($path))
            : (!self::isFile($to . DS . self::basename($path)) && rename($path, $to . DS . self::basename($path)));

    }

    /**
     * ### Renames file
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if path is file.
     * @uses \FireHub\TheCore\Support\LowLevel\File::basename() To get base name component of path.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param string $new_basename $to <p>
     * New
     * file base name (file name with extension).
     * </p>
     * @param bool $overwrite [optional] <p>
     * Is set to true, if file already exists will be overwritten with the new one.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function rename (string $path, string $new_basename, bool $overwrite = true):bool {

        return $overwrite
            ? rename($path, self::parentFolder($path).DS.$new_basename)
            : (!self::isFile(self::parentFolder($path) . DS . $new_basename) && rename($path, self::parentFolder($path) . DS . $new_basename));

    }

    /**
     * ### Reads entire file into a string
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string|false Data from file, false otherwise.
     */
    public static function getContent (string $path):string|false {

        return file_get_contents($path);

    }

    /**
     * ### Write data to a file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param string|array{int, string} $data <p>
     * The data to write.
     * </p>
     * @param bool $append [optional] <p>
     * Append the data to the file instead of overwriting it.
     * </p>
     * @param bool $lock [optional] <p>
     * Acquire an exclusive lock on the file while proceeding to the writing.
     * </p>
     * @param bool $create_file [optional] <p>
     * Is true, method will create new file if one doesn't exist.
     * </p>
     *
     * @return int|false Number of bytes that were written to the file, false otherwise.
     */
    public static function putContent (string $path, string|array $data, bool $append = false, bool $lock = true, bool $create_file = false):int|false {

        $options = match (true) {
            $append && $lock => FILE_APPEND | LOCK_EX,
            $append => FILE_APPEND,
            $lock => LOCK_EX,
            default => 0
        };

        // if $create_file option is off and $path is not file
        if (!$create_file && !self::isFile($path)) return false;

        // since file_put_contents fails if you try to put a file in a folder that doesn't exist, we need to create folder manually
        if (!Folder::isFolder(Folder::parentFolder($path))) Folder::create(Folder::parentFolder($path).'/');

        return file_put_contents($path, $data, $options);

    }

    /**
     * ### Gets file size
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::isFile() To check if file exist.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return int|false The size of the file in bytes, false otherwise.
     *
     * @note Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2 GB.
     */
    public static function size (string $path):int|false {

        return self::isFile($path)
            ? ($size = filesize($path)) !== false
                ? $size
                : false
            : false;

    }

    /**
     * ### Gets last access time of file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return int|false Returns the time the file was last accessed, or false on failure. The time is returned as a Unix timestamp.
     */
    public static function lastAccessed (string $path):int|false {

        return fileatime($path);

    }

    /**
     * ### Gets last modification time of file
     *
     * Represents when the data or content is changed or modified, not including that of metadata such as ownership or owner group.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return int|false Returns the time the file was last modified, or false on failure. The time is returned as a Unix timestamp.
     */
    public static function lastModified (string $path):int|false {

        return filemtime($path);

    }

    /**
     * ### Sets last access and modification time of file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param int|null $last_accessed <p>
     * The touch time. If mtime is null, the current system time() is used.
     * </p>
     * @param int|null $modified <p>
     * If not null, the access time of the given filename is set to the value of atime.
     * Otherwise, it is set to the value passed to the mtime parameter. If both are null, the current system time is used.
     * </p>
     *
     * @return bool True on success or false on failure.
     */
    public static function setLastAccessedAndModification (string $path, ?int $last_accessed, ?int $modified):bool {

        return touch($path, $modified, $last_accessed);

    }

    /**
     * ### Gets inode change time of a file
     *
     * Represents the time when the metadata or inode data of a file is altered, such as the change of permissions, ownership or group.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return int|false Returns the time the file was last changed, or false on failure. The time is returned as a Unix timestamp.
     *
     * @note On Windows, this function will return creating time, but on UNIX inode change time.
     */
    public static function lastChanged (string $path):int|false {

        return filectime($path);

    }

    /**
     * ### Open file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $filename <p>
     * File system pointer resource that is typically created using fopen().
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Mode $mode <p>
     * File mode enum for type of access.
     * </p>
     *
     * @return resource|false File pointer resource on success, or false on failure.
     */
    public static function open (string $filename, Mode $mode):mixed {

        return fopen($filename, $mode->value);

    }

    /**
     * ### Write to the file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param resource $filename <p>
     * File system pointer resource that is typically created using fopen().
     * </p>
     * @param string $data <p>
     * String that is to be written.
     * </p>
     *
     * @return int|false
     */
    public static function write (mixed $filename, string $data):int|false {

        return fwrite($filename, $data);

    }

    /**
     * ### Close the file
     * @since 0.1.3.pre-alpha.M1
     *
     * @param resource $filename <p>
     * File pointer must be valid, and must point to a file successfully opened by fopen or fsockopen.
     * </p>
     *
     * @return bool True if file is closed, false otherwise.
     */
    public static function close (mixed $filename):bool {

        return fclose($filename);

    }

    /**
     * ### Tests for end-of-file on a file pointer
     * @since 0.1.3.pre-alpha.M1
     *
     * @param resource $filename <p>
     * File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
     * </p>
     *
     * @return bool True if the file pointer is at EOF or an error occurs, otherwise returns false.
     */
    public static function eol (mixed $filename):bool {

        return feof($filename);

    }

    /**
     * ### Gets character from file pointer
     * @since 0.1.3.pre-alpha.M1
     *
     * @param resource $filename <p>
     * File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
     * </p>
     *
     * @return string|false String containing a single character read from the file pointed to by stream. Returns false on EOF.
     */
    public static function character (mixed $filename):string|false {

        return fgetc($filename);

    }

    /**
     * ### Gets line from file pointer
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\EOL As charactes to trim for each line in file.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSafe::trim() To trim characters for each line in file.
     *
     * @param resource $filename <p>
     * File pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
     * </p>
     *
     * @return string|false String of up to length - 1 bytes read from the file pointed to by stream. If there is no more data to read in the file pointer, then false is returned.
     */
    public static function line (mixed $filename):string|false {

        return ($line = fgets($filename)) !== false ? StrSB::trim($line, Side::RIGHT, EOL) : false;

    }

    /**
     * ### Reads entire file into an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::open() To open file.
     * @uses \FireHub\TheCore\Support\Enums\FileFolder\Mode::READ To open file as read-only.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::resource() To check if file is resource.
     * @uses \FireHub\TheCore\Initializers\Constants\EOL As charactes to trim for each line in file.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSafe::trim() To trim characters for each line in file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return array<int, string>|false Each element of the array corresponds to a line in the file, with the newline still attached, false otherwise.
     */
    public static function lines (string $path):array|false {

        $file = self::open($path, Mode::READ);

        if (!DataIs::resource($file)) return false;

        $lines = [];
        while (($line = fgets($file)) !== false) $lines[] = StrSB::trim($line, Side::RIGHT, EOL); // no self::line() here or self::trim, because overloading for large files

        return $lines;

    }

    /**
     * ### Reads entire file into an array
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\File::open() To open file.
     * @uses \FireHub\TheCore\Support\Enums\FileFolder\Mode::READ To open file as read-only.
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::resource() To check if file is resource.
     * @uses \FireHub\TheCore\Initializers\Constants\EOL As charactes to trim for each line in file.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSafe::trim() To trim characters for each line in file.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return Generator<int, string>|false Each element of the array corresponds to a line in the file, with the newline still attached, false otherwise.
     */
    public static function lazyLines (string $path):Generator|false {

        $file = self::open($path, Mode::READ);

        if (!DataIs::resource($file)) return false;

        while (($line = fgets($file)) !== false) yield StrSB::trim($line, Side::RIGHT, EOL); // @phpstan-ignore-line no self::line() here or self::trim, because overloading for large files

    }

    /**
     * ### Portable advisory file locking
     * @since 0.1.3.pre-alpha.M1
     *
     * @param resource $filename <p>
     * An open file pointer.
     * </p>
     *
     * @return bool True on success or false on failure.
     */
    public static function lock (mixed $filename, Lock $lock):bool {

        return flock($filename, $lock->value);

    }

    /**
     * ### Moves an uploaded file to a new location
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $from <p>
     * Filename of the uploaded file.
     * </p>
     * @param string $to <p>
     * Destination of the moved file.
     * </p>
     *
     * @return bool True on success or false on failure.
     */
    public static function moveUploaded (string $from, string $to):bool {

        return move_uploaded_file($from, $to);

    }

}