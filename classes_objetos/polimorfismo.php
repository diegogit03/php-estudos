<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz;
$c1->peso = 0.65;

$c2 = new Feijao;
$c2->peso = 0.19;

$c3 = new Sorvete;
$c3->peso = 0.50;

$p = new Pessoa(83.33);
$p->comer($c1);

echo $p->peso;
