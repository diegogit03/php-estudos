<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    public function metodo1();
    public function metodo2($parametro);
}

abstract class classeAbstrata implements Template {
    public function metodo3() {
        echo 'Estou funcionando!';
    }
}

class Classe extends classeAbstrata {
    function __construct($parametro) {}

    public function metodo1() {
        echo 'Metodo1';
    }

    public function metodo2($parametro) {
        echo 'Metodo2';
    }
}

$exemplo = new Classe('Parametro');
$exemplo->metodo3();
