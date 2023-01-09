<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome'] ?><br>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>

<?php 
    $_SESSION['nome'] = 'Lucio';
    $_SESSION['email'] = 'lucinho@gmail.com'; 
?> 
<p>
    <a href="<?php echo 'http://localhost/curso-php/exercicio.php?dir=sessao&file=basico_sessao';?>">Voltar</a>
</p><p>
    <a href="<?php echo 'http://localhost/curso-php/sessao/basico_sessao_limpar.php';?>">Limpar</a>
</p>