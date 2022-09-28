<?php

namespace Carlos\People;

class Person
{
    private $data = [];

    public function __construct()
    {
        echo 'classe instaciada'.PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->data[] = $name;
    }

    public function setAge(int $age)
    {
        $this->data[] = $age;
    }

    public function setWeight(float $weight)
    {
        $this->data[] = $weight;
    }

    public function __toString() :string
    {
        return implode(', ', $this->data) . '.' .PHP_EOL;
    }
}