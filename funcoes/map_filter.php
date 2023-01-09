<div class="titulo">Map & Filter</div>

<?php
$notas = array(5.8, 7.3, 9.8, 6.7);

function roundNotas(array $array): array
{
    return $notasFinais = array_map('round', $array);
}

function aprovados($nota)
{
    return $nota >= 7;
}

function printAprovados(array $array)
{
    echo "**********ALUNOS APROVADOS********** <br><br>";
    foreach ($array as $aluno => $nota) {
        echo "Aluno $aluno - $nota <br>";
    }
}

echo '<br>';
$apenasOsAprovados = array_filter(roundNotas($notas), 'aprovados');



printAprovados($apenasOsAprovados)
?>