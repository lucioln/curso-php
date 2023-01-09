<div class="titulo">Try / Catch</div>

<?php 
// echo 7 / 0 ; 

try{
  echo intdiv(7,0);   
}catch(Error $e){
    echo 'Houve um erro aqui!'. '<br>';
}

try{
    throw new Exception('Um erro muito estranho aconteceu');
    echo intdiv(7,0);
}catch(DivisionByZeroError $e){
    echo 'Divisão por 0 é inválida!';
}catch(Throwable $e){
    echo 'Erro Encontrado: ' . $e->getMessage() . '<br>';
}
?>