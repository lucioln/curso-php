<div class="titulo">Anônimas</div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado";
}

executar(2, 2, '*', $multiplicacao);
