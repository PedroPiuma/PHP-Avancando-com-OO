<?php

namespace PedroPiuma\People;

class Person
{
    private $data = [];

    public function setName(string $name)
    {
        // if (!is_string($name)) {
        //     die('não é string');
        // }
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
}
