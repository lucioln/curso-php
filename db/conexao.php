<?php

function novaConexao($database=null){
    $host = '127.0.0.1:3306';
    $user = 'root';
    $password = 'root';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_error){
        die('Erro:'. $conexao->connect_error); //Não utilizar em projetos reais 
    }

    return $conexao;
}

function cadastro(array $dados, $conexao){
    
    $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES(";
    
    for($cont=0; $cont<6; $cont++){
        if($cont<4){
            $sql.="'".$dados[$cont]."',";
        }else if($cont==4){
            $sql.= $dados[$cont].",";
        }else{
            $sql.=$dados[$cont];
        }
    }
    $sql .= ")";
    echo $sql;
    $resultado = $conexao->query($sql);
    if($resultado){
    echo 'Cadastro efetuado';
    }
}
?>