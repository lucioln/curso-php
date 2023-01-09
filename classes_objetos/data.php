<div class="titulo">Classe Data</div>

<?php

class Data
{
    public int $dia = 1;
    public int $mes = 1;
    public int $ano = 1970;

    protected function formatDia()
    {
        if (($this->dia < 10) && ($this->dia > 0))
            return "0{$this->dia}/";
        elseif (($this->dia >= 10) && ($this->dia <= 31))
            return "{$this->dia}/";
        else return false;
    }

    protected function formatMes()
    {
        if (($this->mes < 10) && ($this->mes > 0))
            return "0{$this->mes}/";
        elseif (($this->mes >= 10) && ($this->mes <= 12))
            return "{$this->mes}/";
        else return false;
    }

    protected function formatAno()
    {
        if ($this->ano >= 1970)
            return "{$this->ano}<br>";
        else return false;
    }

    public function exibeData()
    {
        if (($this->formatDia() !== false) && ($this->formatMes() !== false) && $this->formatAno() !== false)
            echo $this->formatDia(), $this->formatMes(), $this->formatAno();
        else
            echo 'Error: Invalid Data';
    }
}

$anoUm = new Data();
$anoUm->exibeData();

$dataAtual = new Data();
$dataAtual->dia = 27;
$dataAtual->mes = 12;
$dataAtual->ano = 2022;
$dataAtual->exibeData();

$dataErrada = new Data();
$dataErrada->dia = 32;
$dataErrada->mes = 12;
$dataErrada->ano = 2022;
$dataErrada->exibeData();



?>