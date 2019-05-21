<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 08/05/2019
 * Time: 14:57
 */

namespace Tsc\CatStorageSystem\FileDetails;
require  dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';


use DateTimeInterface;
use Tsc\CatStorageSystem\DirectoryInterface;
use Tsc\CatStorageSystem\FileInterface;


class FileCall implements FileInterface
{

    private $name;
    private $size;
    private $CreatedTime;
    private $ModifiedTime;
    private $parent;
    private $path;

    /**
     * FileCall constructor.
     * @param $path
     */
    public function __construct( $path)
    {
        $this->name = basename($path); ;
        $this->path = dirname(dirname(dirname(__FILE__))).$path;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }

    /**
     * @param \DateTimeInterface $CreatedTime
     */
    public function setCreatedTime(DateTimeInterface $CreatedTime)
    {
        $this->CreatedTime = $CreatedTime->format($CreatedTime);
    }

    /**
     * @return mixed
     */
    public function getModifiedTime()
    {
        return $this->ModifiedTime;
    }

    /**
     * @param mixed $ModifiedTime
     */
    public function setModifiedTime(DateTimeInterface $ModifiedTime)
    {
        $this->ModifiedTime = $ModifiedTime->format($ModifiedTime);
    }

    /**
     * @return mixed
     */
    public function getParentDirectory()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParentDirectory(DirectoryInterface $parent)
    {
        $this->parent = $parent->getPath();
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }




}

