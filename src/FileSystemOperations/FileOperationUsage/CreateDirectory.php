<?php
/**
 * add the new directory
 *
 *
 * Created by PhpStorm.
 * User: churc
 * Date: 20/05/2019
 * Time: 16:22
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class CreateDirectory
{
    private $directoryClass;
    private $systemClass;

    /**
     * GetFileCountInDirectory constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->directoryClass = new DirectoryGeneral($path);
        $this->createDirectory();

    }

    /**
     */
    public function createDirectory()
    {
        $this->systemClass = new FileSystemStuff();
        return $this->systemClass->createDirectory($this->directoryClass, $this->createDirectory());
    }

}

// take in parameters
new CreateDirectory($argv[1]);