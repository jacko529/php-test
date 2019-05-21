<?php
/**
 * User: churc
 * Date: 10/05/2019
 * Time: 07:27
 *
 * Call this class to set the modified and and created time of a file
 *
 * Upon creation just use the name of the file and path and call either modifiedTime or createdTime
 *
 */

namespace Tsc\CatStorageSystem\FileDetails\SubDetails;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\FileDetails\FileCall;

class FileTimes extends FileCall
{

    /**
     * FileTimes constructor.
     * @param $pathIn
     */
    public function __construct( $pathIn)
    {
        parent::__construct( $pathIn);
    }

    /**
     *Checks the modified time of a file
     *
     */
    public function modifiedTime(){

         $this->setModifiedTime(new \DateTime(date ("Y-m-d H:i:s.", filemtime($this->getPath().$this->getName()))));
    }

    /**
     * Checks the created time of a file
     *
     */
    public function createdTime(){

         $this->setCreatedTime(new \DateTime( date ("Y-m-d H:i:s.", filectime(($this->getPath().$this->getName())))));
    }
}

