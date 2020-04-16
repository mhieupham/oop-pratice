<?php
class Person
{
    public $first ;
    private $last;
    private $age ;
    private $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

