<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 09/05/2019
 * Time: 17:06
 */

namespace Tsc\CatStorageSystem\FileSystemOperations;

require  dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';

use Tsc\CatStorageSystem\DirectoryInterface;

use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileDetails\FileCall;
use Tsc\CatStorageSystem\FileInterface;
use Tsc\CatStorageSystem\FileSystemInterface;

class FileSystemStuff implements FileSystemInterface
{


    /**
     * @param FileInterface $file
     * @param DirectoryInterface $parent
     *
     * @return FileInterface
     */
    public function createFile(FileInterface $file, DirectoryInterface $parent)
    {
        fopen($parent->getPath().$file->getName(), 'w');

        return $file->setName($file->getName());
    }

    /**
     * @param FileInterface $file
     *
     * @return FileInterface
     */
    public function updateFile(FileInterface $file)
    {
        return new FileCall('normla.html','');

    }

    /**
     * @param FileInterface $file
     * @param string $newName
     *
     * @return FileInterface
     */
    public function renameFile(FileInterface $file, $newName)
    {
        rename($file->getPath(),dirname(dirname(dirname(__FILE__))).$newName);
        return $file->setName($newName);
    }

    /**
     * @param FileInterface $file
     *
     * @return bool
     */
    public function deleteFile(FileInterface $file)
    {
        return unlink($file->getPath());
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return DirectoryInterface
     */
    public function createRootDirectory(DirectoryInterface $directory)
    {
        (mkdir($directory->getPath(), 0777, true));
        return $directory->setName($directory->getName());

    }

    /**
     * @param DirectoryInterface $directory
     * @param DirectoryInterface $parent
     *
     * @return DirectoryInterface
     */
    public function createDirectory(DirectoryInterface $directory, DirectoryInterface $parent)
    {
        mkdir($parent->getPath().$directory->getName(), 0777, true);

        return $directory->setPath($directory->getName());

    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return bool
     */
    public function deleteDirectory(DirectoryInterface $directory)
    {
        return rmdir($directory->getPath());
    }

    /**
     * @param DirectoryInterface $directory
     * @param string $newName
     *
     * @return DirectoryInterface
     */
    public function renameDirectory(DirectoryInterface $directory, $newName)
    {
        rename($directory->getPath(), pathinfo($directory->getPath(), PATHINFO_DIRNAME).$newName);
        return new DirectoryGeneral(pathinfo($directory->getPath(), PATHINFO_DIRNAME).$newName);
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getDirectoryCount(DirectoryInterface $directory)
    {
        return count( glob($directory->getPath().'*', GLOB_ONLYDIR));
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getFileCount(DirectoryInterface $directory)
    {

        $files = scandir( $directory->getPath());

        return  count($files)-2;
    }

    /**
     * @param DirectoryInterface $directory
     *
     * @return int
     */
    public function getDirectorySize(DirectoryInterface $directory)
    {
        $size = 0;
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory->getPath())) as $file) {
            $size += $file->getSize();
        }
        return $size;
    }

    /**
     * wrong
     * @param DirectoryInterface $directory
     *
     * @return DirectoryInterface[]
     */
    public function getDirectories(DirectoryInterface $directory)
    {
        foreach (new \DirectoryIterator($directory->getPath()) as $file) {
            if ($file->isDir()) {
                $arrayOfPaths[] = $file->getFilename() ;
            }
        }
        return $arrayOfPaths;


    }

    /**
     * wrong
     * @param DirectoryInterface $directory
     *
     * @return FileInterface[]
     */
    public function getFiles(DirectoryInterface $directory)
    {

        foreach (new \DirectoryIterator($directory->getPath()) as $file) {
            if ($file->isFile()) {
                $arrayOfFile[] = $file->getFilename() ;
            }
        }

        return $arrayOfFile;
    }
}



