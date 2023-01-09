<div class="titulo">Escrevendo Arquivo</div>

<?php 

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w'); //vai resetar o arquivo
$str = "Novo Conteúdo";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); //modo append
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "adicionados em um segundo momento\n");
fclose($arquivo);

ini_set('display_errors',1);
$arquivo = fopen('teste.txt', 'x'); //vai gerar um erro pq o X só permite arquivos novos ( que ainda nao foram criados);
?>
