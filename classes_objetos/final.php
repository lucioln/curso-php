<div class="titulo">Modificador Final</div>


<?php

abstract class Abstrata
{
    abstract public function metodo1();

    public final function metodo2()
    {
        echo 'Eu não vou mudar!<br>';
    }
}

class ClasseConcreta extends Abstrata
{
    public function metodo1()
    {
        echo 'lalala <br>';
    }
}

$instancia = new ClasseConcreta();
$instancia->metodo2();
?>