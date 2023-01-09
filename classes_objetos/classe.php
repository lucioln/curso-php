<div class="titulo">Classe - Objetos</div>

<?php

class Cliente
{
    //atributos
    public $nome = 'Anônimo';
    public int $idade = 18;

    //métodos
    function apresentar()
    {
        echo "Meu nome é {$this->nome} e tenho {$this->idade} anos <br>";
    }
}

$cliente1 = new Cliente();
$cliente1->nome = 'Ana Silva';
$cliente1->idade = 28.7;
$cliente1->apresentar();

$cliente2 = new Cliente();
$cliente2->nome = 'Gabriel Neves';
$cliente2->idade = 46;
$cliente2->apresentar();

?>