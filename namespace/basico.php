<?php

namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__, '<br>';
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);


echo constante1, '<br>';
echo \contexto\constante2, '<br>';
echo constant(__NAMESPACE__ . '\constante3'), '<br>';


function strpos($str, $text)
{
    echo "Buscando o texto {$text} em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca'), '<br>'; //acessa a function definida no namespace atual!
echo \strpos('Texto genérico para busca', 'busca'), '<br>'; //acessa a function definida na API DO PHP
