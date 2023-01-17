<div class="titulo">PDO INSERIR</div>

<?php
require_once('conexao_pdo.php');
$conexao = novaConexaoPDO();

$sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario)
        VALUES ('Guilherme Soares', 'guisoares@gmail.com', '2001-10-14', 'https://google.com', 0, 1000)";

//print_r(get_class_methods($conexao));
if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "novo cadastro com ID: $id.";
}else{
    $conexao->errorCode();
    print_r($conexao->errorInfo());
}


?>
