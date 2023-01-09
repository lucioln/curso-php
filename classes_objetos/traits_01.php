<div class="titulo">traits #1</div>

<?php

trait validacao
{
    public function validarString($str)
    {
        return  isset($str) && $str !== '';
    }
}

trait validacaoMelhor
{
    private $c = 'Oi eu sou C!';

    public function validarStringMelhor($str)
    {
        return isset($str) && trim($str);
    }
}

class Usuario
{
    use validacao, validacaoMelhor;
    public function exibeValorDeC()
    {
        echo "o valor de C é: '{$this->c}'";
    }
}

//var_dump(validacao->validarString('')); NÃO É PÓSSIVEL ACESSAR OS METODOS DIRETAMENTE PELA TRAIT

$usuario = new Usuario();
var_dump($usuario->validarString(''));
var_dump($usuario->validarString('Olá'));
$usuario->exibeValorDeC();


?>