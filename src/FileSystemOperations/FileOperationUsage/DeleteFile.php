<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 20/05/2019
 * Time: 22:00
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\FileDetails\FileCall;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class DeleteFile
{
    private $fileClass;
    private $systemClass;

    /**
     * GetFileCountInDirectory constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->fileClass = new FileCall($path);
        $this->deleteFile();

    }

    /**
     */
    public function deleteFile()
    {
        $this->systemClass = new FileSystemStuff();
        return $this->systemClass->deleteFile($this->fileClass);
    }

}
// take in parameters
new DeleteFile($argv[1]);