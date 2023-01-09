<div class="titulo">Erros Personalizados</div>

<?php 

class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function CalcTempoDeAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException('Está muito longe ainda...');
    }
    if($idade > 70){
        throw new FaixaEtariaException('Já devia estar aposentado');
    }
    return 70-$idade;
}

$idadesAvaliadas = [15,30,60,80];
foreach($idadesAvaliadas as $idade){
    try{
        $tempoRestante = CalcTempoDeAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes.<br> ";
    }catch(FaixaEtariaException $e){
        echo "Não foi possivel calcular para a $idade anos.<br>";
        echo "ERROR: {$e->getMessage()}<br>";
    }
}
echo '<br>Fim!';
?>