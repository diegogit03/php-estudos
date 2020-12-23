<div class="titulo">Desafio data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano} <br/>";
    }
}

$aniversario = new Data;
$aniversario->dia = 7;
$aniversario->mes = 2;
$aniversario->ano = 2007;
$aniversario->apresentar();

$estreia = new Data;
$estreia->dia = 8;
$estreia->mes = 4;
$estreia->ano = 2017;
$estreia->apresentar();
