<?php namespace Outro\Nome; ?>

<div class="titulo">Use As</div>

<?php

require('use_as_arquivo.php');

function soma($a, $b){
    return $a . $b; // eu sei que ta concatenando
}

class Classe{
    public $var;
    
    function func(){
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__;
    }
}
echo \Nome\Bem\Grande\constante , '<br>';


use const Nome\Bem\Grande\constante;
echo constante, '<br>';

use \Nome\Bem\Grande as ctx;
// echo ctx\soma(1,2), '<br>';
echo soma(1,2),'<br>';

use function \Nome\Bem\Grande\soma as SomaReal;
echo SomaReal(1,2), '<br>';

$c1 = new ctx\Classe();
$c1->func();


?>
