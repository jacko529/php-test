<?php
/**
 * User: churc
 * Date: 10/05/2019
 * Time: 07:10
 */

namespace Tsc\CatStorageSystem\FileDetails\SubDetails;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\FileDetails\FileCall;
require '../FileCall.php';
class CalculateSize extends FileCall
{


    /**
     * CalculateSize constructor.
     * @param $name
     * @param $filePath
     */
    public function __construct( $filePath)
    {
         parent::__construct( $filePath);
    }

    /**
     * @return void
     */
    public function calculateFileSize()
    {
       $this->setSize(filesize($this->getPath().$this->getName()));
    }

}




