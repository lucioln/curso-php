<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata
{
    abstract public function metodo1();
    abstract protected function metodo2($paramentro);
}

abstract class FilhaAbstrata extends Abstrata
{
    public function metodo1()
    {
        echo 'executando metodo1 <br>';
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata
{
    public function metodo3()
    {
        $this->metodo2('metodo 2 (interno -> método protected sendo executado dentro do método 3)');
        echo 'executando metodo 3<br>';
    }
    protected function metodo2($nomeDoMetodo)
    {
        echo "executando {$nomeDoMetodo}<br>";
    }
}

$instanceOne = new Concreta;

$instanceOne->metodo1();
$instanceOne->metodo3();
?>