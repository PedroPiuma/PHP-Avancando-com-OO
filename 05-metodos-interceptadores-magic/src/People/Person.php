<?php

namespace PedroPiuma\People;

class Person
{
    private $data = [];

    public function __construct()
    {
        echo "classe instanciada" . PHP_EOL;
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

    public function __call($method, $proprieties)
    {
        var_dump($method, $proprieties);
    }

    // O método __call é um método mágico do PHP que 
    // é invocado quando um método não existente é 
    // chamado em um objeto.

    // Quando o método __call é chamado, o primeiro
    // parâmetro $method é o nome do método que não 
    // foi encontrado na classe, e o segundo 
    // parâmetro $properties é um array que contém 
    // os argumentos passados para o método.

    // No exemplo fornecido na pergunta, o método 
    // __call simplesmente faz um var_dump dos 
    // parâmetros recebidos, exibindo o nome do 
    // método que não foi encontrado e os argumentos 
    // passados para ele.

    // O método __call pode ser utilizado para 
    // adicionar comportamentos dinâmicos a uma 
    // classe, permitindo que métodos sejam 
    // adicionados em tempo de execução. Isso pode 
    // ser útil em situações em que a classe precisa 
    // lidar com diferentes tipos de entradas de dados 
    // ou executar ações diferentes com base 
    // nas informações recebidas.

    // No entanto, é importante ter cuidado ao utilizar 
    // o método __call, já que ele pode tornar o código 
    // mais difícil de depurar e manter se não for 
    // usado corretamente.

    public function __toString(): string
    {
        return "Classe impressa: " . implode('; ', $this->data);
        //O método mágico __toString é um método especial no PHP 
        //que é invocado automaticamente quando um objeto é convertido
        //para uma string.

        // Quando o método __toString é definido em uma classe, ele 
        // permite que o programador especifique como o objeto deve ser 
        // representado como uma string quando for convertido. Isso pode 
        // ser útil, por exemplo, para exibir informações sobre um objeto 
        // em um log ou para retornar uma mensagem de erro personalizada.

        // A implementação do método __toString é simples: basta definir 
        // uma função pública com o nome __toString que retorne uma string. 
        // Essa string será a representação do objeto quando ele for 
        // convertido para uma string.
    }
}
