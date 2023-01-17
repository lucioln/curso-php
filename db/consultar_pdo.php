<div class="titulo">Consultar PDO</div>

<?php 
    require_once 'conexao_pdo.php';
    $conexao = novaConexaoPDO();

    $sql = "SELECT * FROM cadastro";

    $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);
    echo '<hr>';

    $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':qtde', 2 , PDO::PARAM_INT);
    $stmt->bindValue(':inicio', 1 , PDO::PARAM_INT);

    if($stmt->execute()){
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($resultado);
    }else {
        echo 'Error: '. $stmt->errorCode() . '<br>';
        print_r($stmt->errorInfo());
    }

    echo '<hr>';

    foreach($resultado as $users){
        echo $users['nome'].'<br>';
    }
    $stmt = null;
    $conexao = null;
?>