<div class="titulo">Inserir Registro</div>

<?php
require_once("conexao.php");

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES(
        'Marienta',
        '1989-10-29',
        'marieta@gmail.com.br',
        'https://marieta123.com.br',
        2,
        3200.99
    )";

$conexao = novaConexao('curso_php');
$resultado = $conexao->query($sql);

if($resultado){
    echo 'Inserido com sucesso!';
}else{
    echo $conexao->error;
}

$conexao->close();