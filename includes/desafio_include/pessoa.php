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
