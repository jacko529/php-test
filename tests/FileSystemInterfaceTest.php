<?php

namespace Tsc\CatStorageSystem;

use PHPUnit\Framework\TestCase;
use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileDetails\FileCall;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class FileSystemInterfaceTest extends TestCase {

    private $testingClass;
    private $systemClass;
    private $fileClass;

    public function test_it_creates_a_new_instance() {

        $stub = $this->createMock(FileSystemInterface::class);
        $this->assertTrue($stub instanceof FileSystemInterface);
    }

    public function test_File_Is_Renamed(){

        $this->testingClass = new FileCall('\src\images\pat3.gif');
        $this->systemClass = new FileSystemStuff();
        $this->systemClass->renameFile($this->testingClass, '\src\images\pat3.gif');
        // will move rename and move
        $this->assertEquals('\src\images\pat3.gif', $this->testingClass->getName());

    }

    public function test_get_file_count(){

        $this->testingClass = new DirectoryGeneral('\src\images');
        $this->systemClass = new FileSystemStuff();
        // will move rename and move
        $this->assertEquals('2', $this->systemClass->getFileCount($this->testingClass));

    }


    public function test_directory_is_renamed(){
        $this->testingClass = new DirectoryGeneral('\src\images');
        $this->systemClass = new FileSystemStuff();
        $this->systemClass->renameDirectory($this->testingClass, '\images');
        // will move rename and move
        $this->assertEquals('C:\xampp\htdocs\3sc-php-task\src\images', $this->testingClass->getPath());

    }


    public function test_make_new_item(){
        $this->testingClass = new DirectoryGeneral('/src/images/');
        $this->fileClass = new FileCall('\src\images\hello.txt');

        $this->systemClass = new FileSystemStuff();
        $this->systemClass->createFile( $this->fileClass, $this->testingClass);
        // will move rename and move
        $this->assertEquals('hello.txt', $this->fileClass->getName());

    }


}


