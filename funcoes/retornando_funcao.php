<div class="titulo">Retornando Função</div>

<?php

function soma($a)
{
    return function ($b) use ($a) {
        return $a + $b;
    };
}

echo soma(3)(2);





?>