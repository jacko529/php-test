<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 09:33
 */

namespace Tsc\CatStorageSystem\FileDetails\Usage;
use Tsc\CatStorageSystem\FileDetails\SubDetails\FileTimes;

require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


class SeeFileTimes extends FileTimes
{


   public function __construct($pathIn)
   {
       parent::__construct($pathIn);
       $this->createdTime();
       $this->modifiedTime();
       $this->getSize();
   }

   public function getSize(){
       return print_r($this->modifiedTime(). ' is the modified time ' . $this->getCreatedTime(). ' is the created time');
   }

}

new SeeFileTimes($argv[1]);