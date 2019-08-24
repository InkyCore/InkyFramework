<?php

namespace inky;

class view{
    private $path;//视图文件夹
    public $file;
    public $data;
    function __construct($path)
    {
        $this->path = $path;
    }
    function display(){
        $data = $this->data;
        include_once $this->path . '/' . $this->file . '.php';
    }
}