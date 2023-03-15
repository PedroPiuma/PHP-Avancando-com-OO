<?php

require __DIR__ . '/autoload.php';

$person = new PedroPiuma\People\Person;
$person->setName('Pedro');
$person->setAge(32);
$person->setWeight(80);

// var_dump($person);
var_dump((new PedroPiuma\DB\Postgres)->connect());
var_dump((new PedroPiuma\DB\MySql)->connect());

// Associação é um conceito da programação orientada a objetos 
// que descreve a relação entre duas ou mais classes. Na associação, 
// uma classe utiliza os recursos de outra classe para realizar 
// uma tarefa específica.

// Em PHP, a associação pode ser implementada de várias maneiras, 
// como por exemplo:

// Composição: quando uma classe é composta por outras classes e 
// depende delas para funcionar. Nesse caso, a classe composta 
// não pode existir sem a classe que a compõe.

// Agregação: quando uma classe é agregada a outra classe para 
// fornecer funcionalidade adicional. Nesse caso, a classe agregada 
// pode existir independentemente da classe que a agregou.

// Dependência: quando uma classe depende de outra classe para 
// realizar uma tarefa, mas não é diretamente associada a ela.

// Em geral, a associação é utilizada para dividir as responsabilidades 
// de um sistema em diferentes classes, tornando o código mais modular
// e fácil de manter. Cada classe pode ser responsável por uma parte 
// específica do sistema, e as relações de associação entre elas 
// permitem que elas trabalhem juntas para alcançar um objetivo comum.