<?php

require __DIR__.'/src/People/Person.php';

$person = new \Carlos\People\Person;

$person->setName('Carlos');
$person->setAge(23);
$person->setWeight(50.2);

var_dump($person);