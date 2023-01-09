<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero)
{
    $result = 0;
    if ($numero == 1) {
        return 1;
    }
    for (; $numero >= 1; $numero--) {
        $result += $numero;
    }
    return $result;
}

function calculaFatorial(int $numero)
{
    $result = 1;
    if ($numero == 1) {
        return 1;
    }
    for ($i = 1; $i <= $numero; $i++) {
        $result *= $i;
    }
    return $result;
}

echo calculaFatorial(1);
?>