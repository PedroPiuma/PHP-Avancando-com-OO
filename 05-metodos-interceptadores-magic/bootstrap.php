<?php

require __DIR__ . '/autoload.php';

// $person = new PedroPiuma\People\Person;
// $person->setName('Pedro');
// $person->setAge(32);
// $person->setWeight(80);

// var_dump($person);
// var_dump((new PedroPiuma\DB\Postgres)->connect());
// var_dump((new PedroPiuma\DB\MySql)->connect());

// try {
//     echo "\nTRUE:\n";
//     var_dump((new PedroPiuma\DB\ORM)->select(true));
//     echo "\n";
//     echo "FALSE:\n";
//     var_dump((new PedroPiuma\DB\ORM)->select(false));
//     // } catch (\Exception $e) {
//     //     echo $e->getMessage();
//     // }
// } catch (PedroPiuma\MyException $e) {
//     echo $e->getMessage();
// }

$people = new PedroPiuma\People\Person;
$people->setName('Pedro');
$people->setAge(23);
$people->setWeight(80);

$people->esseMetodoNaoExisteNaClass('teste-joanjsdojdasonadonaosni', 1233, 12332, [4434]); // Para o _call

echo $people;
