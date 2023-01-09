<div class="titulo">Datas #1</div>

<?php

echo time(). '<br>';
echo date('D, d \d\e M \d\e Y \à\s H \h\o\r\a\s'). '<br>';
setlocale(LC_TIME, 'pt-BR','pt_BR.utf-8');
$amanha = time()+(60*60*24);
echo strftime('%A, %d de %B de %Y', time()). '<br>';

?>
