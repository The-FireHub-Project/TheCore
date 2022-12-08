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
    Data\Type as DataType, FileFolder\Permission, Order
};

use const FireHub\TheCore\Initializers\Constants\DS;
use const SCANDIR_SORT_ASCENDING;
use const SCANDIR_SORT_DESCENDING;
use const SCANDIR_SORT_NONE;

use function basename;
use function chmod;
use function decoct;
use function dirname;
use function disk_free_space;
use function disk_total_space;
use function fileatime;
use function filectime;
use function filemtime;
use function fileperms;
use function mkdir;
use function rename;
use function rmdir;
use function octdec;
use function scandir;
use function touch;

/**
 * ### Folder low level class
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
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag) Low level class can have boolian arguments.
 */
final class Folder {

    /**
     * ### Checks if path is a folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\DataIs::folder() To check if value is folder.
     *
     * @param string $path <p>
     * Path to check.
     * </p>
     *
     * @return bool True if path is file, false otherwise.
     */
    public static function isFolder (string $path):bool {

        return DataIs::folder($path);

    }

    /**
     * ### Checks if folder is empty
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to check.
     * </p>
     *
     * @return bool True if folder is empty, false otherwise.
     */
    public static function isEmpty (string $path):bool {

        return !self::isFolder($path) || Arr::count(
            ($list = self::list($path, hidden: false))
                ? $list
                : []
        ) === 0;

    }

    /**
     * ### Returns parent folder name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     * @param int<1, max> $levels [optional] <p>
     * The number of parent directories to go up. This must be an integer greater than 0.
     * </p>
     *
     * @return string The parent folder name of the given path.
     */
    public static function parentFolder (string $path, int $levels = 1):string {

        return dirname($path, $levels);

    }

    /**
     * ### Returns base name component of path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     *
     * @return string|false The basename of the given path, false if folder doesn't exist.
     */
    public static function basename (string $path):string|false {

        return self::isFolder($path) ? basename($path) : false;

    }

    /**
     * ### Gets folder permissions
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::getType() To get typo of file permissions.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To compare permissions value.
     * @uses \FireHub\TheCore\Support\LowLevel\StrSafe::part() To extract substring from string.
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return string|false Folder permissions, false otherwise.
     */
    public static function getPermissions (string $path):string|false {

        if (!self::isFolder($path) || Data::getType($permissions = fileperms($path)) !== DataType::T_INT) return false;

        /**
         * PHPStan stan reports that $permissions could be false.
         * @phpstan-ignore-next-line
         */
        return StrSB::part(decoct($permissions), -4);

    }

    /**
     * ### Sets folder permissions
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\FileFolder\Permission As parametar.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::getType() To get typo of file permissions.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To compare permissions value.
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner <p>
     * Folder owner permission.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group <p>
     * Folder owner group permission.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $global <p>
     * Everyone's permission.
     * </p>
     *
     * @return bool True if permission was set, false otherwise.
     *
     * @note This method will not work on Windows.
     * @note This method will not work on remote folders as the folder to be examined must be accessible via the server's filesystem.
     */
    public static function setPermissions (string $path, Permission $owner, Permission $owner_group, Permission $global):bool {

        $mode = '0'.$owner->value.$owner_group->value.$global->value;

        if (!self::isFolder($path) || Data::getType($permissions = octdec($mode)) !== DataType::T_INT) return false;

        /**
         * PHPStan stan reports that $permissions could be false.
         * @phpstan-ignore-next-line
         */
        return chmod($path, $permissions);

    }

    /**
     * ### Creates folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Data::getType() To get typo of file permissions.
     * @uses \FireHub\TheCore\Support\Enums\Data\Type::T_INT To compare permissions value.
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner [optional] <p>
     * Folder owner permission.
     *
     * note: This parameter is ignored on Windows.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $owner_group [optional] <p>
     * Folder owner group permission.
     *
     * note: This parameter is ignored on Windows.
     * </p>
     * @param \FireHub\TheCore\Support\Enums\FileFolder\Permission $global [optional] <p>
     * Everyone's permission.
     *
     * note: This parameter is ignored on Windows.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function create (string $path, Permission $owner = Permission::ALL, Permission $owner_group = Permission::ALL, Permission $global = Permission::ALL):bool {

        $mode = '0'.$owner->value.$owner_group->value.$global->value;

        if (self::isFolder($path) || Data::getType($permissions = octdec($mode)) !== DataType::T_INT) return false;

        /**
         * PHPStan stan reports that $permissions could be float.
         * @phpstan-ignore-next-line
         */
        return mkdir($path, $permissions, true);

    }

    /**
     * ### Deletes folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function delete (string $path):bool {

        return self::isFolder($path) && rmdir($path);

    }

    /**
     * ### Copies source folder to destination
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::create() To create folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::copy() To copy folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::list() To list folders.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     *
     * @param string $source <p>
     * The source path.
     * </p>
     * @param string $destination <p>
     * The destination path.
     * </p>
     * @param bool $hidden [optional] <p>
     * Copy hidden file as well.
     * </p>
     *
     * @return bool True if folder was copied, false otherwise.
     *
     * @note If destination folder doesn't exist, it will be created.
     */
    public static function copy (string $source, string $destination, bool $hidden = false):bool {

        if (!self::create($destination)) return false;

        if (!DataIs::array($list = self::list($source, hidden: $hidden))) return false;

        foreach ($list as $filename) {

            self::isFolder($source.DS.$filename)
                ? self::copy($source.DS.$filename, $destination.DS.$filename)
                : File::copy($source.DS.$filename, $destination, false);

        }

        return true;

    }

    /**
     * ### Moves folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     *
     * @param string $source <p>
     * The source path.
     * </p>
     * @param string $destination <p>
     * The destination path.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function move (string $source, string $destination):bool {

        return !(!self::isFolder($source) || self::isFolder($destination)) && rename($source, $destination);

    }

    /**
     * ### Renames folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Initializers\Constants\DS To seperate folders.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::isFolder() To check if path is folder.
     * @uses \FireHub\TheCore\Support\LowLevel\Folder::parentFolder() To get parent folder from source.
     *
     * @param string $source <p>
     * The source path.
     * </p>
     * @param string $new_source $to <p>
     * New destination path.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public static function rename (string $source, string $new_source):bool {

        return !(!self::isFolder($source) || self::isFolder($new_source)) && rename($source, self::parentFolder($source).DS.$new_source);

    }

    /**
     * ### List files and directories inside the specified path
     * @since 0.1.3.pre-alpha.M1
     *
     * @uses \FireHub\TheCore\Support\Enums\Order::ASC To sort folders in ascending order.
     * @uses \FireHub\TheCore\Support\Enums\Order::DESC To sort folders in descending order.
     *
     * @param string $path <p>
     * Path to filename.
     * </p>
     * @param null|\FireHub\TheCore\Support\Enums\Order $order [optional] <p>
     * Result order.
     * </p>
     * @param bool $hidden [optional] <p>
     * List hidden file as well.
     * </p>
     *
     * @return array{int, string} Array of filenames on success, or false on failure.
     */
    public static function list (string $path, ?Order $order = null, bool $hidden = true):array|false {

        $order = match ($order) {
            Order::ASC => SCANDIR_SORT_ASCENDING,
            Order::DESC => SCANDIR_SORT_DESCENDING,
            default => SCANDIR_SORT_NONE
        };

        return ($filenames = scandir($path, $order))
            ? $hidden
                ? $filenames
                : Arr::filter($filenames, fn($value):bool => !StrSB::startsWith('.', $value)) // @phpstan-ignore-line
            : false;

    }

    /**
     * ### Gets last access time of folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return int|false Returns the time the file was last accessed, or false on failure. The time is returned as a Unix timestamp.
     */
    public static function lastAccessed (string $path):int|false {

        return fileatime($path);

    }

    /**
     * ### Gets last modification time of folder
     *
     * Represents when the data or content is changed or modified, not including that of metadata such as ownership or owner group.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return int|false Returns the time the folder was last accessed, or false on failure. The time is returned as a Unix timestamp.
     */
    public static function lastModified (string $path):int|false {

        return filemtime($path);

    }

    /**
     * ### Sets last access and modification time of folder
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
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
     * ### Gets inode change time of a folder
     *
     * Represents the time when the metadata or inode data of a file is altered, such as the change of permissions, ownership or group.
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return int|false Returns the time the folder was last accessed, or false on failure. The time is returned as a Unix timestamp.
     *
     * @note On Windows, this function will return creating time, but on UNIX inode change time.
     */
    public static function lastChanged (string $path):int|false {

        return filectime($path);

    }

    /**
     * ### Gets total size of a filesystem or disk partition
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return float|false Returns the total number of bytes as a float or false on failure.
     */
    public static function totalSpace (string $path):float|false {

        return disk_total_space($path);

    }

    /**
     * ### Gets free space of a filesystem or disk partition
     * @since 0.1.3.pre-alpha.M1
     *
     * @param string $path <p>
     * Path to folder.
     * </p>
     *
     * @return float|false Returns the total free space of bytes as a float or false on failure.
     */
    public static function freeSpace (string $path):float|false {

        return disk_free_space($path);

    }

}