<div class="titulo">Classe abstrata</div>

<?php

abstract class Abstrata {
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhoAbstrata extends Abstrata {
    public function  metodo1() {
        echo 'Executando o metodo1<br/>';
    }

    abstract function metodo3();
}

class Concreta extends FilhoAbstrata {
    public function metodo1() {
        echo 'Executando método 1 extendido<br/>';
        parent::metodo1();

    }

    protected function metodo2($parametro) {
        echo "Executando método 2, com parametro $parametro<br/>";
    }

    public function metodo3() {
        echo 'Executando método 3<br/>';
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

var_dump($c);
echo '<br/>';
var_dump($c instanceof Concreta);
echo '<br/>';

echo 'Fim!';
