<div class="titulo">Ler arquivo</div>

<?php 

$arquivo = fopen('teste.txt', 'r');

echo fread($arquivo, 10).'<br>'.fread($arquivo,10);
fclose($arquivo);

echo '<br>';

$arquivo = fopen('teste.txt' , 'r');
// $tamanho = filesize('teste.txt');
//echo fread($arquivo, $tamanho);
echo fread($arquivo, filesize('teste.txt'));
fclose($arquivo);

echo '<hr>';
$arquivo = fopen('teste.txt','r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo), "<br>";
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);
?>