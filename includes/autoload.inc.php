<?php
spl_autoload_register('myAutoLoad');
function myAutoLoad($fileName)
{
    $folderName = 'classes/';
    $extention = '.class.php';
    $fullPath = $folderName.$fileName.$extention;
    if(!file_exists($fullPath)){
        return false;
    }
    require_once $fullPath;
}