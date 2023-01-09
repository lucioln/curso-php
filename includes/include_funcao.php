<div class="titulo">Include de Função</div>

<?php

echo 'include_funcao.php carregado!<br>';

function carregaArquivo()
{
    include('include_arquivo.php');
    echo $variavel, '<br>';
    echo soma(5, 5), '<br>';
}

echo 'Novamente em include_funcao.php';
carregaArquivo();
echo soma(5, 6);
