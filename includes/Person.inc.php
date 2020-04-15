<?php
class Person
{
    public $name = 'hei';
    private $eye;
    private $age;

    public static $drinkingAge = 21;

    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return self::$drinkingAge;
    }
    public static function setDrinkingAge($age){
        self::$drinkingAge = $age;
    }
}


