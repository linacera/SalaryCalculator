<?php

namespace App\Models;
use Storage;

class File
{
    protected $path;

    function __construct($file){
        $this->path = $this->storeFile($file);
    }

    function storeFile($file){
        $path = Storage::putFile('files', $file);
        return $path;
    }

    function getFileContent(){
        $contents = Storage::get($this->path);
        return $contents;
    }
}
