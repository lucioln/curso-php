<div class="titulo">Argumentos Variaveis</div>

<?php

function somaCompleta(...$numeros) //  ... une todos os valores em um array
{
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';

$array = [2, 5, 5];
$array2 = [2, 2, 2, 2];

echo somaCompleta(...$array, ...$array2); // os ... extrai os valores do array

?>