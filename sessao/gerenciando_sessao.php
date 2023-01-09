<div class="titulo">Gerenciando Sessão</div>
<?php
//session_id('sbq183s8dtg44tmc903m3rp8nr')
session_start();
echo session_id(), '<br>';

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $_SESSION['contador'];

if($contador%5===0){
    session_regenerate_id();
}

if($_SESSION['contador']>=15){
    session_destroy();
}

?>