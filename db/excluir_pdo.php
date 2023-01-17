<div class="titulo">Excluindo com PDO</div>



<?php 
    require_once('conexao_pdo.php');
    
    
    
    if($_POST['id']){
        deleteByID($_POST['id']);
    }
?>

<form action="#" method="post">
    <label for="id">ID de Usuario:</label>       
    <input type="number" name="id" id="id">
    <button>Deletar</button>
</form>