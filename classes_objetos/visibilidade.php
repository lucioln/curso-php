<div class="titulo">Visibilidade</div>

<?php

class A
{
    public $publico = 'Público'; //poderá ser exibido em qualquer local
    protected $protegido = 'Protegido'; //apenas na chamada de uma funcao da propria classe/heranca 
    private $privado = 'Privado'; //apenas na chamada da propria classe

    public function mostrarA()
    {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar()
    {
        echo 'Não vou imprimir';
    }
}

class B extends A
{
    public function mostrarB()
    {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
    }
}

$a = new A;
$a->mostrarA();


$b = new B;
$b->mostrarB();

?>