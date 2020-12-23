<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado! <br/>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br />";
    }
}

// invoca o construtor
$pessoa = new Pessoa('Diego Henrique', 13);
$pessoa->apresentar();
// invoca o destrutor
unset($pessoa);
