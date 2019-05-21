<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 07:00
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class GetDirectories
{

    private $systemClass;
    private $directoryClass;

    /**
     * GetDirectories constructor.
     *
     *
     *
     * @param $path
     */
    public function __construct($path)
    {
        $this->directoryClass = new DirectoryGeneral($path);

    }

    /**
     * @return \Tsc\CatStorageSystem\DirectoryInterface[]
     */
    public function getArrayOfDirectories(){

        $this->systemClass = new FileSystemStuff();
        return print_r($this->systemClass->getDirectories( $this->directoryClass ));

    }
}

// take in parameters
new GetDirectoryCount($argv[1]);