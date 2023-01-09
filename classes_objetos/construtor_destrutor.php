<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa
{
    public string $nome;
    public int $idade;

    function __construct(string $nome, int $idade = 18)
    {
        echo "Criando pessoa.. <br>";
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada!<br>Nome: $this->nome<br>Idade: $this->idade <br>";
    }

    function __destruct()
    {
        echo 'destruído!';
    }
}

$pessoa1 = new Pessoa('Lucio', 23);
unset($pessoa1); // ou $pessoa = NULL; -> resultarar na chamada da function __destruct();

?>