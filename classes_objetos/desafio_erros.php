<div class="titulo">Desafio Erros</div>

<?php

use Concreta as GlobalConcreta;

interface Template
{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    abstract function metodo1();
    abstract function metodo2($parametro);
    public function metodo3()
    {
        echo 'estou funcionando';
    }
}

class Concreta extends ClasseAbstrata
{
    public function metodo1()
    {
        echo 'metodo 1 <br>';
    }
    public function metodo2($parametro)
    {
        echo "eu recebi {$parametro} como parametro<br>";
    }
    function __construct($parametro)
    {
        echo "fui criado como $parametro<br>";
    }
}

$exemplo = new Concreta('Nome');
$exemplo->metodo3();
$exemplo->metodo2('Ola');
$exemplo->metodo1();


?>