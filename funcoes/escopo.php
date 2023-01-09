<div class="titulo">Escopo</div>

<?php

function imprimeMsg()
{
    echo 'Olá! Sou uma mensagem da função!';
}


$variavel = 1;

function trocaValor()
{
    $variavel = 2;
    echo "Valor da Variavel dentro da função: $variavel <br>";
}
echo "Valor da Variavel antes da função: $variavel <br>";
trocaValor();
echo "Valor da Variavel depois da função: $variavel <br>";


?>