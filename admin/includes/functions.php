<?php

function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if(is_file($the_path) && !class_exists($class)){
        include $the_path;
    } else {
        die("<br>" . "<h2>This file named {$class}.php was not found anywhere. Sorry, mate!</h2>");
    }
}

spl_autoload_register('classAutoLoader');
