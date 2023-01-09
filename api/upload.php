<div class="titulo">Upload</div>

<?php 
print_r($_FILES);
echo `ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`;
echo '<br>';
echo __DIR__;
// print_r($_POST);
// print_r($_GET);

if($_FILES && $_FILES['arquivo']){
    
    $pastaUpload = __DIR__ . "/uploads/";
    $nomeDoArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeDoArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    echo $arquivo, '<br>';

    if(move_uploaded_file($tmp, $arquivo)){
        echo 'Arquivo válido';
    } else {
        echo 'Erro no upload do arquivo';
    }
}


?>
<form action="#" method="post" enctype="multipart/form-data">
    
    <input name="arquivo" type="file">
    
    <button>Enviar</button>

</form>


<style>
    input, button{
        font-size: 1.2rem;
    }

</style>