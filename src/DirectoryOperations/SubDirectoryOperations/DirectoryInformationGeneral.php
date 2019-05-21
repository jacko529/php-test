<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 10/05/2019
 * Time: 07:26
 */

namespace Tsc\CatStorageSystem\DirectoryOperations\SubDirectoryOperations;

require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';

use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;

class DirectoryInformationGeneral extends DirectoryGeneral
{

    public function __construct( $path)
    {
        parent::__construct( $path);
    }

    /**
     *
     * external function to set the file created time
     *
     */
    public function createdTiming(){

        $this->setCreatedTime(new \DateTime( date ("Y-m-d H:i:s.",filectime($this->getPath().$this->getName()))));

    }

}
