<div class="titulo">Membros Estáticos</div>

<?php

class A
{
    public $naoStatic = "Variável de instância";
    public static $static = "Variável de classe (estática)";

    public function mostraA()
    {
        echo "Não estático = {$this->naoStatic} <br>";
        //tentativa 1 
        //echo "Não estático = {$this->naoStatic} <br>";
        //tentativa 2
        //echo "Estático = {self::$static} <br>";
        echo "Estático = ", self::$static, '<br>';
        self::mostrarStatic();
    }

    static public function mostrarStatic()
    {
        echo '(funcao estática) $ static = ', "'", self::$static, "' <br>";
    }
}

$objetoA = new A();
$objetoA->mostraA();

A::$static = "Alterado membro de classe (estático)";
A::mostrarStatic();


?>