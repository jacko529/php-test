<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 07/05/2019
 * Time: 12:21
 */

namespace Tsc\CatStorageSystem\DirectoryOperations;
require  dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';


use DateTimeInterface;
use Tsc\CatStorageSystem\DirectoryInterface;
class DirectoryGeneral implements DirectoryInterface
{
    private $name;
    private $created;
    private $path;


    public function __construct( $path)
    {
        $this->name = basename($path);
        $this->path = dirname(dirname(dirname(__FILE__))).$path;
    }

    /**
     * @return string
     */
    public function getName()
    {
       return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
       $this->name = $name;
       return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedTime()
    {
        return $this->created;
    }

    /**
     * @param DateTimeInterface $created
     *
     * @return $this
     */
    public function setCreatedTime(DateTimeInterface $created)
    {
         $this->created = $created->format($created);
         return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
      $this->path = $path;
      return $this;

    }
}

