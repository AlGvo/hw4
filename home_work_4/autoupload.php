<?php

function myAutoloader($className)
{
    $filename = __DIR__ . '/' . $className . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

function mechanismsAutoloader($className)
{
    $segments = explode('\\', $className);
    $filename = __DIR__ . '/Mechanisms/' . $segments[count($segments) - 1] . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

function animalsAutoloader($className)
{
    $segments = explode('\\', $className);
    $filename = __DIR__ . '/Animals/' . $segments[count($segments) - 1] . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}
function traitsAutoloader($className)
{
    $segments = explode('\\', $className);
    $filename = __DIR__ . '/Traits/' . $segments[count($segments) - 1] . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

spl_autoload_register('myAutoloader');
spl_autoload_register('mechanismsAutoloader');
spl_autoload_register('animalsAutoloader');
spl_autoload_register('traitsAutoloader');
