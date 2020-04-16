<?php
spl_autoload_register('myAutoLoad');
function myAutoLoad($fileName)
{
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'includes') !== false){
        $folderName='../classes/';
    }else{
        $folderName = 'classes/';
    }
    $extension = '.class.php';
    $fullPath = $folderName.$fileName.$extension;
    require_once $fullPath;
}