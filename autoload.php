<?php

namespace App;

class Autoload {

    public static function register(): void
    {
        spl_autoload_register(function($class){
            // $class = Model\Example\Test
            // DIRECTORY_SEPARATOR = / (unix) \ (Windows)
            
            require_once str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        });
    }
}

Autoload::register();