<?php

class FirstClass
{
    const EXAMPLE = 'this is example';

    public static function test(){
        $testing = 'this is test';
        return $testing;
    }
}

class SecondClass extends FirstClass
{
    private static $staticProperty;

    public static function setStaticProper($staticProperty){
        self::$staticProperty =$staticProperty;
    }
    public static function getStaticProperty()
    {
        echo self::$staticProperty;
    }
}
SecondClass::setStaticProper('123');
$a = SecondClass::getStaticProperty();
echo $a;


