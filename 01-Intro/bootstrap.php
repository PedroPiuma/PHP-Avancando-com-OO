<?php

// use PedroPiuma\People\Person;

require __DIR__ . '/src/People/Person.php';

// $person = new Person;
$person = new PedroPiuma\People\Person;
$person->setName('Pedro');
$person->setAge(32);
$person->setWeight(80);

var_dump($person);
