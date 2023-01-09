<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Fui criado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'Fui destruído!<br>';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos <br>";
    }

    public function apresentar()
    {
        echo $this . '<br>';
    }

    public function __get($atrib)
    {
        echo "Lendo um atributo não declarado: {$atrib} <br>";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
        echo "Alterando atributo não declarado -> $name com valor: $value <br>";
    }

    public function __call($method, $arguments)
    {
        echo '<br>tentando executar método :', $method, '()';
        echo '<br>com parametros: ', var_dump($arguments), '<br>';
    }
}

$p1 = new Pessoa('Lucio', 23);
$p1->apresentar();
// echo $p1;

$p1->nomeCompleto; //chama o método get, pois o atributo nomeCompleto não está definido
$p1->NomeCompleto2 = 'Lucio Noleto';
echo $p1->NomeCompleto2;
echo $p1->NomeCompleto2('lucio', 'noleto');
?>