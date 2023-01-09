<div class="titulo">Desafio Recursão</div>

<?php
/*
array = [1,2,[3,4,5],6[7,[8,9]]]
*/
$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function imprimirArrayComNiveis($array, $nivel = '>')
{
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArrayComNiveis($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento <br>";
        }
    }
}

imprimirArrayComNiveis($array);
?>