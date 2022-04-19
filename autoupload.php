<?php

function myAutoloader($className)
{
    $filename = $className . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}
spl_autoload_register('myAutoloader');
