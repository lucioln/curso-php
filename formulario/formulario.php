<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<?php 
    if(count($_POST)>0){

        $erros = [];
        
        if(!filter_input(INPUT_POST, 'nome')){
            $erros['nome'] = "Nome é obrigatório";
        }

        if(filter_input(INPUT_POST, "nascimento")){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data){
                $erros['nascimento'] = 'Data inválida';
            }
        }

       
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] =  "Email invalido";
        }

        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $erros['site'] = "URL invalido";
        }

        $filhosConfig = ["options" => ["min_range"=>0,"max_range"=>20]];
        if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0){
            $erros['filhos'] = 'quantidade de filhos invalida'; 
        }
        
        $salarioConfig = ["options" => ['decimal' => ',', "min_range"=>0 ]];
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
            $erros['salario'] ="Salário inválido";
        }

    }
?>

<h2>Cadastro</h2>

<form action="#" method="post">
    
    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?=$_POST['nome']?>">
            
            <?php if($erros['nome']): ?>
                <div class=" erros" role="alert">
                <?=$erros['nome'];?>
                </div>
            <?php endif ?>

        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento:</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="dd/mm/aaaa" value="<?=$_POST['nascimento']?>">
            
            <?php if($erros['nascimento']): ?>
                <div class=" erros" role="alert">
                <?=$erros['nascimento'];?>
                </div>
            <?php endif ?>

        </div>
    
    </div>

    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="<?=$_POST['email']?>">
            
            <?php if($erros['email']): ?>
                <div class=" erros" role="alert">
                <?=$erros['email'];?>
                </div>
            <?php endif ?>

        </div>
    </div>

    <div class="form-row">
        
        <div class="form-group col-md-6">
            
            <label for="filhos">Filhos:</label>
            <input type="number" class="form-control" id="filhos" name="filhos" placeholder="quantidade de filhos" value="<?=$_POST['filhos']?>">

            <?php if($erros['filhos']): ?>
                <div class=" erros" role="alert">
                    <?=$erros['filhos'];?>
                </div>
            <?php endif ?>

        </div>
        
        

        <div class="form-group col-md-6">
            
            <label for="salario">Salário:</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário" value="<?=$_POST['salario']?>">

            <?php if($erros['salario']): ?>
             <div class="erros" role="alert">
                <?=$erros['salario'];?>
             </div>
            <?php endif ?>

        </div>

       
    
    </div>

    <button class="btn-primary btn-lg">Enviar</button>

</form>

<style>
    .erros{
        font-size: 18px;
        color: red;
    }
</style>
