<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 09:33
 */

namespace Tsc\CatStorageSystem\DirectoryOperations\Usage;
use Tsc\CatStorageSystem\DirectoryOperations\SubDirectoryOperations\DirectoryInformationGeneral;

require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


class GetDirectoryTimeInformation extends DirectoryInformationGeneral
{

    /**
     * GetDirectoryTimeInformation constructor.
     * @param $path
     */
    public function __construct($path)
   {
       parent::__construct($path);
       $this->createdTiming();
   }

    /**
     * @return mixed
     */
    public function displayTime(){
       return print_r($this->getCreatedTime());
   }


}

new GetDirectoryTimeInformation($argv[1]);