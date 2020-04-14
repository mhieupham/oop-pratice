<?php
class Person
{
    public $name;
    public $age;
    public $eyeColor;

    public function setName($name,$eyeColor,$age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
        return [
            'name'=>$this->name,
            'age'=>$this->age,
            'eyeColor'=>$this->eyeColor
        ];
    }
}