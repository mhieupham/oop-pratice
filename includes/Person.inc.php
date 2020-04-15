<?php
class Person
{
    private $name;
    private $eye;
    private $age;

    public function __construct($name,$eye,$age)
    {
        $this->name=$name;
        $this->eye=$eye;
        $this->age=$age;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

