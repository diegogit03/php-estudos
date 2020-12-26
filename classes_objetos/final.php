<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo 'Não vou mudar!<br/>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando o método 1 <br/>';
    }

    // public function metodo2() {
    //     echo 'Executando o método 2 <br/>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $att = 'valor';
}

$unica = new Unica();
echo $unica->att;
