<?php

function load($class){
        $classParts = explode('\\', $class);
        $classParts[0] = __DIR__;
        unset($classParts[1]);
        $path = implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
        if (file_exists($path)){
            require $path;
        }
}

spl_autoload_extensions('.php');
spl_autoload_register('load');