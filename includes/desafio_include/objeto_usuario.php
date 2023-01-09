<div class="titulo">Desafio includes</div>

<?php

require(__DIR__ . '/usuario.php');

$usuario1 = new Usuario('Noleto', 25, 'noleto98');
$usuario2 = new Usuario('Samantha', 24, 'sam');

var_dump($usuario1);
echo '<br>';
var_dump($usuario2);
echo '<br>', $usuario1->apresentar();
