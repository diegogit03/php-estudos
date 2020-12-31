<?php

namespace Aritimetica;

class NaoInteiroExeption extends \Exception {
    public function __construct() {

    }
}

function intdiv(int $a, int $b) {
    if($b == 0) {
        throw new \DivisionByZeroError("Uma divisão por 0 dará infinito!");
    }

    if($a % $b > 0) {
        throw new NaoInteiroExeption("Um dos parametros não é inteiro");
    }

    return $a / $b;
}

