<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = 'classes/';
    $ext = '.php';
    $fullpath = $path . $className . $ext;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}
