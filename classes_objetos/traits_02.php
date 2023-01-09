<div class="titulo">traits #1</div>

<?php

use Usuario as GlobalUsuario;
use validacao as GlobalValidacao;
use validacaoMelhor as GlobalValidacaoMelhor;

trait validacao
{
    public function validarString($str)
    {
        return  isset($str) && $str !== '';
    }
}

trait validacaoMelhor
{
    public function validarString($str)
    {
        return isset($str) && trim($str);
    }
}

//Duas traits com mesmo nome de método, como resolver o conflito: 

class Usuario
{
    use validacao, ValidacaoMelhor {
        ValidacaoMelhor::validarString insteadof validacao;

        //usando o alias
        validacao::validarString as validacaoSimples;
    }
}

$user = new Usuario();
var_dump($user->validarString('Ola'));
echo '<br>';
var_dump($user->validacaoSimples('Ola'));

?>