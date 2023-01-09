<?php

require(__DIR__ . '/pessoa.php');

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
