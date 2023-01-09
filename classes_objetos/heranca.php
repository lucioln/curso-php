<div class="titulo">Herança</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct(string $nome, $idade = 18)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada!<br>';
    }

    function __destruct()
    {
        echo 'Pessoa diz tchau';
    }

    public function aresentar()
    {
        echo "meu nome é {$this->nome} e tenho {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Usuário criado!<br>";
    }

    function __destruct()
    {
        echo "Usuário diz tchau!";
    }

    function apresentar()
    {
        echo "@{$this->login}: ";
        parent::aresentar();
    }
}

$usuario = new Usuario('Gustavo Mendoça', 19, 'gugua');

$usuario->apresentar();

?>