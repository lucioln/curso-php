<div class="titulo">Usando Tipos</div>

<?php

function somar(int ...$numbers): float
{
    $soma = 0;
    foreach ($numbers as $num) {
        $soma += $num;
    }
    return $soma;
}

var_dump(somar(2, '2.6', 4));

?>