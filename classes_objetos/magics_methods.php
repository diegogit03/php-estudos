<div class="titulo">Metodos Magicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    function apresentar() {
        echo $this. '<br/>';
    }

    function __get($atrib) {
        echo 'Lendo atributo não declarado: '. $atrib. '<br/>';
        return $atrib;
    }

    function __set($name, $value) {
       echo 'Alterando atributo não declarado: ' . $name. '/'. $value;
    }

    function __call($name, $params) {
        echo 'Tentanto executar o método '. $name;
        echo ', com os parametros: ';
        print_r($params);

    }
}

$pessoa = new Pessoa('Ricardo', 40);

// __toString
// $pessoa->apresentar();
// echo $pessoa. '<br/>';
// $pessoa->nome = 'Reinaldo';
// $pessoa->apresentar();

// __get
// echo $pessoa->nomeCompleto;

// __set
// $pessoa->nomeCompleto = 'Muito legal!!';

// __call
// $pessoa->exec('Parametro1');

// __destruct
// $pessoa = null;
// unset($pessoa);
