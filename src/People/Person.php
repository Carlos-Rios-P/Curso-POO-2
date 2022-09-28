<?php

namespace Carlos\People;

class Person
{
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
    

    public function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if(method_exists($this, $method)){
            $this->$method($value);
        } else {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if(method_exists($this, $method)){
            return $this->$method();
        }

        return $this->$name;
    }

    public function __toString() :string
    {
        return $this->name . ', ' . $this->age . ', ' . $this->weight . PHP_EOL;
    }
}