<?php

function load($class){
    if(file_exists(__DIR__ . '/controllers/' . $class . '.php')){
        require __DIR__ . '/controllers/' . $class . '.php';
    }else if(file_exists(__DIR__ . '/models/' . $class . '.php')){
        require __DIR__ . '/models/' . $class . '.php';
    }else if(file_exists(__DIR__ . '/classes/' . $class . '.php')){
        require __DIR__ . '/classes/' . $class . '.php';
    }else if(file_exists(__DIR__ . '/views/' . $class . '.php')) {
        require __DIR__ . '/views/' . $class . '.php';
    }
}

spl_autoload_extensions('.php');
spl_autoload_register('load');