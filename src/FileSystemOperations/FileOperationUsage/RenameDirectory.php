<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 07:49
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';

class RenameDirectory
{

    private $directoryClass;
    private $systemClass;

    /**
     * RenameDirectory constructor.
     * @param $path
     * @param $newDirectoryName
     */
    public function __construct($path, $newDirectoryName)
    {
        $this->directoryClass = new DirectoryGeneral($path);

        $this->renameDirectory($newDirectoryName);
    }

    /**
     * @param $newDirectoryName
     * @return \Tsc\CatStorageSystem\DirectoryInterface
     */
    public function renameDirectory($newDirectoryName)
    {
        $this->systemClass = new FileSystemStuff();
       return  $this->systemClass->renameDirectory($this->directoryClass, $newDirectoryName);

    }
}

// take in parameters
new RenameDirectory($argv[1],$argv[2]);