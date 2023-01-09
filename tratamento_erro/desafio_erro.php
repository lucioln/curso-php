<?php namespace Desafio;

use Exception;

?>
<div class="titulo">Desafio Erro</div>
<?php 

    class intDivException extends Exception{
        public function __construct($message, $code=0, $previous=null)
        {
            parent::__construct($message, $code, $previous);
        } 
    }


    function intdiv($a,$b){
        if($b===0){
            throw new intDivException('Você não pode Dividir por Zero');
        }    
        $div = ($a/$b);
            
        if(is_float($div)){
            throw new intDivException('Resultado não inteiro');
        }
        return $div;
    }

    $dados=[2,3,0];

    foreach($dados as $divisor){
        try{
            echo intdiv(8, $divisor), '<br>';
        }catch(intDivException $msg){
            echo $msg->getMessage(), '<br>';
        }
    }

    echo \intdiv(8,3),'<br>';
    echo 'fim!';
?>