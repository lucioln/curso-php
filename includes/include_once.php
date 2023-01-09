<div class="titulo">Include Once & Require Once</div>

<?php
ini_set('display_errors', 1);
include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo '<br>', $variavel;
$variavel = 'Variavel Alterada<br>';
echo '<br>', $variavel;
include('include_once_arquivo.php');
echo '<br>', $variavel;


include_once('include_once_arquivo.php');
echo '<br>', $variavel;
