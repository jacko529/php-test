<?php
/**
 *
 *
 * add the full file path
 *
 * add the full directory path
 *
 *
 * Created by PhpStorm.
 * User: churc
 * Date: 20/05/2019
 * Time: 22:05
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileDetails\FileCall;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class CreateFile
{
    private $directoryClass;
    private $fileClass;
    private $systemClass;

    /**
     * GetFileCountInDirectory constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->directoryClass = new DirectoryGeneral($path);
        $this->fileClass = new FileCall($path);

        $this->createFile();

    }

    /**
     */
    public function createFile()
    {
        $this->systemClass = new FileSystemStuff();
        return print_r($this->systemClass->createFile( $this->fileClass,$this->directoryClass));
    }

}

// take in parameters
new CreateFile($argv[1]);