<?php

require 'inky/common.php';

//配置文件
require 'config.php';

//autoload
spl_autoload_register(function($class){    
    $file = str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)){        
        include $file;
    }
});

//start
$start = new \inky\start();
$start->run();