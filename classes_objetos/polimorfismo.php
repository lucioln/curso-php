<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{
}

class ArrozAGrega extends Arroz
{
}

class Fejao extends Comida
{
}

class Sorvete extends Comida
{
}

class Pessoa
{
    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer(Arroz $comida)
    {
        return $this->peso += $comida->peso;
    }
}

$p = new Pessoa(83.45);

$c1 = new Arroz;
$c1->peso = 0.200;

$c2 = new ArrozAGrega;
$c2->peso = 0.200;

$c3 = new Fejao;
$c3->peso = 0.100;

$p->comer($c1);
$p->comer($c2);
//$p->comer($c3);//ERRO POIS O METHODO COMER ESTÁ SETADO PARA COMER ARROZ

echo $p->peso;
?>