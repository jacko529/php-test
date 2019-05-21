<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 21/05/2019
 * Time: 09:33
 */

namespace Tsc\CatStorageSystem\FileDetails\Usage;
use Tsc\CatStorageSystem\FileDetails\SubDetails\CalculateSize;

require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


class CalculateFileSizes extends CalculateSize
{


    /**
     * CalculateFileSizes constructor.
     * @param $filePath
     */
    public function __construct($filePath)
    {
        parent::__construct( $filePath);
        $this->calculateFileSize();
        $this->fileSize();
    }

    /**
     *Checks the modified time of a file
     *
     */
    public function fileSize(){

        return print_r($this->getSize());
    }
}
new CalculateFileSizes($argv[1]);