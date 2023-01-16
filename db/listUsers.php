<?php
function listUsers($conexao){
    $resultado = $conexao->query("SELECT id, nome, nascimento, email FROM cadastro");

    $registros = [];

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $registros[] = $row;
        }
    } elseif($conexao->error){
        echo $conexao->error;
    }

    return $registros;
}
?>
