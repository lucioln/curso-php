<?php
$dados = ['download', '1103710.jpg', '0b192221dc17b9c9c67a409609e0cbf7.png','0b192221dc17b9c9c67a409609e0cbf7.jpg'];

foreach($dados as $dado){
    if(str_contains($dado, '.jpg')){
        echo 'true';
    }else{
        continue;
    }
}

?>
