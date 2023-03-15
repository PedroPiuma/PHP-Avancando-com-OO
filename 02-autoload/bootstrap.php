<?php

require __DIR__ . '/autoload.php';

$person = new PedroPiuma\People\Person;
$person->setName('Pedro');
$person->setAge(32);
$person->setWeight(80);

// var_dump($person);
var_dump((new PedroPiuma\DB\Db)->connect());
var_dump((new PedroPiuma\DB\MySql)->connect());
