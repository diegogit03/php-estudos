<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $novaIdade) {
       $this->nome = $novoNome;
       $this->idade = $novaIdade;
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br/>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br/>';
    }

    function __destruct() {
        echo 'Usuario diz: Tchau! <br/>';
        parent::__destruct();
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Diego Henrique', 13, 'die_hen');
$usuario->apresentar();
unset($usuario);
