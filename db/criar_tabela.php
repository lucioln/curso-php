<div class="titulo">Criar Tabela</div>

<?php 

require_once("conexao.php");
ini_set('display_errors',1);

$conexao = novaConexao('curso_php');

// DDL - DATA  DEFINITION Lang
$resultado = $conexao->query('CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)');

if($resultado){
    echo 'Tabela criada';
}



$conexao->close();