<div class="titulo">Desafio intdiv</div>

<?php
include_once 'desafio_intdiv.php';

use function \Aritimetica\intdiv;

try {
    echo intdiv(8, 3). '<br />';
} catch(\Aritimetica\NaoInteiroExeption $e) {
    echo 'O resultado não é um numero inteiro<br />';
}

try {
    echo intdiv(8, 0). '<br />';
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br />';
}

echo intdiv(8, 2). '<br />';
echo \intdiv(8, 2). '<br />';
