<?php
namespace Person;

class Person
{
    public $first = 'daniel';
    private $last = 'nielsen';
    private $age = '27';
}
class Pet extends Person
{
    public function owner(){
        $a=$this->first;
        return $a;
    }
}
