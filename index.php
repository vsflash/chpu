<?php

spl_autoload_register(function($className){

    $path='lib'.DIRECTORY_SEPARATOR.$className.'.php';
    if(file_exists($path)){
        include_once $path;
        return true;
    }
    return false;
});

Router::load();