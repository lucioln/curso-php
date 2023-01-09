<div class="titulo">Download</div>

<?php 
    session_start();

    $arquivos = $_SESSION['arquivos'] ?? [];
    $pastaUpload = __DIR__ . '/../files/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo 'Arquivo válido e enviado com sucesso<br>';
        $arquivos[]= $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    }else{
        echo 'ERROR: falha ao enviar arquivo<br>';
    }
?>

<form action="#" method="post" enctype="multipart/form-data">

    <input type="file" name="arquivo">
    
    <button>Enviar</button>

</form>
<ul>
    <?php foreach($arquivos as $arquivo){ ?>
    <li>
        <a href="/curso-php/files/<?=$arquivo?>">
            <?=$arquivo?>
        </a>
    </li>
    <?php } ?>
</ul>

<style>
    input, button{
        font-size: 1.2rem;
    }

</style>