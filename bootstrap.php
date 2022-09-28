<?php

require __DIR__.'/src/Person.php';

$person = new Person;

$person->setName('Carlos');
$person->setAge(23);
$person->setWeight(50.2);

var_dump($person);