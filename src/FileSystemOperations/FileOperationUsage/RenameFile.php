<?php
/**
 *
 * This class is the useage for calling renaming files
 *
 *
 * Created by PhpStorm.
 * User: churc
 * Date: 20/05/2019
 * Time: 19:46
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;
use Tsc\CatStorageSystem\FileDetails\FileCall;

class RenameFile
{

    private $fileClass;
    private $systemClass;

    /**
     * Only need to enter path after 3sc project
     *
     * RenameFile constructor.
     * @param $oldPath
     * @param $newPath
     */
    public function __construct($oldPath, $newPath)
    {
        $this->fileClass = new FileCall($oldPath);
        $this->renameFile($newPath);

    }

    /**
     * @param $newPath
     */
    public function renameFile($newPath){

        $this->systemClass = new FileSystemStuff();
        $this->systemClass->renameFile($this->fileClass, $newPath);

        return var_dump($this->fileClass->getPath());
    }

}
// take in parameters
new RenameFile($argv[1], $argv[2]);
