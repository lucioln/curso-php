<div class="titulo">Argumentos e retornos</div>

<?php

function obterMsg()
{
    return "Seja bem vindo!";
}

// echo obterMsg();

function sayHelloToUser($name)
{
    return "Hello, $name!";
}
$array = ['1', '2', '3'];
echo sayHelloToUser($array[2]);
?>