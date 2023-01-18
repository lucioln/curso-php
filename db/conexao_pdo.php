<?php 

function novaConexaoPDO($banco = 'curso_php'){
    $servidor = '127.0.0.1:3306';
    $user = 'root';
    $password = 'root';

    try{
        $conexao = new PDO("mysql:host=$servidor; dbname=$banco",$user, $password);
        return $conexao;
    }catch(PDOException $e){
        die('Erro: '. $e->getMessage());
    }
}

function deleteByID($id){
    $conexao = novaConexaoPDO();

    $sql = "DELETE FROM cadastro WHERE ID = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if($stmt->execute()){
        echo "o registro id: $id foi excluido com sucesso.";
    }else{ 
        echo "error: ";
    }
    $stmt = null;
    $conexao = null;
}

function alterarById(array $array){
        $dados = $array;
        $conexao = novaConexaoPDO();
        $sql = 'UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?';
        $stmt = $conexao->prepare($sql);
        $resultado = $stmt->execute([
            $dados['nome'],
            $dados['nascimento'],
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
            $dados['id']
        ]);
        if($resultado){
            echo "<br>Alterado!<br>";
        }
        $conexao= null;
        $stmt = null;
}


?>