<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 07:01
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class GetDirectoryCount
{

    private $directoryClass;
    private $systemClass;

    /**
     * GetDirectoryCount constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->directoryClass = new DirectoryGeneral($path);
        $this->getCountOfDirectories();

    }

    /**
     */
    public function getCountOfDirectories()
    {
        $this->systemClass = new FileSystemStuff();
        return print_r($this->systemClass->getDirectoryCount($this->directoryClass));
    }

}

// take in parameters
new GetDirectoryCount($argv[1]);