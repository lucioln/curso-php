<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registro</div>

<?php
    require_once('conexao.php');

    $sql = "DELETE FROM cadastro WHERE ID = 2";

    $conexao = novaConexao('curso_php');

    $resultado = $conexao->query($sql);
   
    if($resultado) {
        echo 'Excluido com sucesso.';
    }
    
    $conexao->close();
?>