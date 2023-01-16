<div class="titulo">Criar banco</div>

<?php 

require_once("conexao.php");

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE curso_php';

ini_set('display_errors',1);
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Banco criado com sucesso.';
}

$conexao->close();