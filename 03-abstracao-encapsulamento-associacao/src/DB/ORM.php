<?php

namespace PedroPiuma\Db;

class ORM
{
    private $db;
    public function setDb(Db $db)
    {
        $this->db = $db;
    }
}

// Abstração e encapsulamento são dois conceitos importantes da programação orientada a objetos em PHP:

// Abstração: é o processo de definir uma classe ou interface genérica que encapsula as características 
// essenciais de um objeto ou conjunto de objetos. Em outras palavras, é o ato de abstrair as características 
// importantes de um objeto e criar uma classe que possa ser usada como uma representação simplificada desse objeto.

// Encapsulamento: é a técnica de ocultar a complexidade interna de um objeto e expor apenas as operações 
// que podem ser realizadas nele. Em outras palavras, é o processo de proteger as propriedades e métodos 
// de uma classe para que não possam ser acessados diretamente de fora da classe.

// No PHP, a abstração pode ser alcançada através da criação de classes abstratas ou interfaces, que definem 
// um conjunto de métodos que devem ser implementados pelas classes concretas que herdam ou implementam a abstração.

// Já o encapsulamento pode ser alcançado através do uso de modificadores de acesso, como public, private 
// e protected, que controlam o acesso às propriedades e métodos de uma classe. Com isso, é possível 
// proteger os dados e a lógica de uma classe e permitir que apenas as operações desejadas sejam realizadas em um objeto.
