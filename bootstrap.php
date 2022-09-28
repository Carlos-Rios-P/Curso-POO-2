<?php

use Carlos\DB\Db;
use Carlos\DB\MySql;
use Carlos\DB\Postgres;

require __DIR__.'/autoload.php';

// $person = new \Carlos\People\Person;

// $person->setName('Carlos');
// $person->setAge(23);
// $person->setWeight(50.2);

// var_dump($person);

// var_dump((new Postgres)->connect());
// var_dump((new MySql)->connect());

try {
    (new \Carlos\DB\ORM)->select(false);
} catch(Carlos\MyException $e) {
    echo $e->getMessage();
} catch(\Exception $e) {
    echo $e->getMessage();
}