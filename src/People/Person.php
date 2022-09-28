<?php

namespace Carlos\People;

class Person
{
    use \Carlos\GetterSetter;

    private $name;
    private $age;
    private $weight;

    public function __construct()
    {
        echo 'classe instaciada'.PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function getName(){
        return explode('r', $this->name);
    }
    
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    public function __toString() :string
    {
        return $this->name . ', ' . $this->age . ', ' . $this->weight . PHP_EOL;
    }
}