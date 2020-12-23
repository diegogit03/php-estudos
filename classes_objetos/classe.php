<div class="title">Primeira Classe</div>

<?php

class Cliente {
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    // Metodo
    public function apresentar() {
        echo "Nome: {$this->nome}, Idade: {$this->idade} <br />";
    }
}

$c1 = new Cliente();
$c1->nome = 'Diego';
$c1->idade = 13;

$c2 = new Cliente();
$c2->nome = 'Gabriel';
$c2->idade = 43;

$c1->apresentar();
$c2->apresentar();
