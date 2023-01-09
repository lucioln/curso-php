<?php namespace App; ?>

<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__, '<br>';
const constante = 123;

function somar ($a,$b){
    return $a+$b;
};

namespace App\Principal;
echo __NAMESPACE__, '<br>';
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__, '<br>';
const constante = 345;
echo \App\constante, '<br>';
echo \App\somar(4,5), '<br>';
echo \App\Principal\constante, '<br>';
echo constante;
