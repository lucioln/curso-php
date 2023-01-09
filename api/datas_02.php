<div class="titulo">Datas #2</div>

<?php 
$formatoData01 = 'D, d \d\e M \d\e Y';
$formatoData02 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

echo $agora->format($formatoData01);
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
?>