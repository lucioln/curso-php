<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registro 2</div>

<?php

require_once('conexao.php');
require_once('listUsers.php');

$conexao = novaConexao('curso_php');

if($_GET['excluir']){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();   
}

$registros=[];
$registros = listUsers($conexao);


$conexao->close()

?>


<table class="table table-hover table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro):?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td><?=$registro['nome']?></td>
                <td><?=$registro['email']?></td>
                <td><a href="/curso-php/exercicio.php?dir=db&file=excluir_2&&excluir=<?=$registro['id']?>" class="btn btn-danger">Apagar    </a></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>