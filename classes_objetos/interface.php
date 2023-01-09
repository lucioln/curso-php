<div class="titulo">Interface</div>

<?php

interface Animal
{
    function respirar(); // A interface obriga a implementação de metodos em classes que utilizam tal interface
}

interface Canino
{
    function latir(): string;
}

class Cachorro implements Animal, Canino
{
    function respirar() // caso não há o método respirar(), ocorrerá erro na criação da classe
    {
        echo 'irei usar ar!<br>';
    }

    function latir(): string
    {
        return 'au au <br>';
    }
}

$animal1 = new Cachorro();
$animal1->respirar();

echo var_dump($animal1 instanceof Cachorro), '<br>';
echo 'fim';

?>