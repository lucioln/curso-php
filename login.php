<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($_POST['email']){
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com",
            "password" => "123456",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@cod3r.com",
            "password" => "654321",
        ]
    ];
    
    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $password === $usuario['password'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário/Senha Inválido'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-vindo</h2>
    </header>

    <main class="principal">
        
        <div class="conteudo">
            <h3>Identifique-se</h3>
            
            <?php if($_SESSION['erros']):?>
                <div class="erros">
                    <?php  foreach($_SESSION['erros'] as $erro):?>
                        <p><?=$erro?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            
            <form action="#" method="post">
                
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password">
                </div>

                <button>Entrar</button>

            </form>
        </div>

    </main>
    
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>

