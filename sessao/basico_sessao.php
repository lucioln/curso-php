<div class="titulo">Sessão Básico</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabrielzin@email.com';
}


?> 


<p><a href="/curso-php/sessao/basico_sessao_alterar.php">Alterar Sessão</a></p>