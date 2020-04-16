<?php
declare(strict_types=1);
require_once 'autoload.inc.php';

$calc = new Calc($_GET['oper'],(int) $_GET['num1'],(int) $_GET['num2']);
try{
    echo $calc->calculator();
}catch (TypeError $exception){
    echo $exception->getMessage();
}
