<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php

require_once('conexao.php');
require_once('listUsers.php');
$conexao = novaConexao('curso_php');

$registros = listUsers($conexao);
$conexao->close();
?>


<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro):?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td><?=
                    date('d/m/Y', strtotime($registro['nascimento']));
                ?></td>
                <td><?=$registro['email']?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table{
        font-size: 1.2rem;
    }
</style>