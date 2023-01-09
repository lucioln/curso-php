<div class="titulo">Include x Require</div>

<?php

echo 'usando include com arquivo inexistente...<br>';
ini_set('display_errors', 1);
include('arquivo_inexistente.php');
echo 'continuei sendo executado...<br>';

echo 'usando o require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');
echo 'continuei sendo executado...<br>';


?>