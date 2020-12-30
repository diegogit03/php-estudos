<?php namespace contexto; ?>
<div class="titulo">Exemplo Basico</div>

<?php
ini_set('display_errors', 0);

echo __NAMESPACE__. '<br/>';
const constante1 = 123;
define('contexto\constante2', 342);
define('constante2', 1234);
define(__NAMESPACE__. '\constante3', 1234);
define('outrocontexto\constante4', 456);

echo constante1. '<br />';
echo \constante2. '<br />';
echo constante2. '<br />';
// Aqui em baixo daria erro poís sem o namespace absoluto ficaria: contexto\contexto\constante3
// echo contexto\constante3; '<br/>';
echo \contexto\constante3. '<br/>';
echo constant(__NAMESPACE__. '\constante3'). '<br/>';
echo \outrocontexto\constante4.  '<br />';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2). '<br />';
echo soma(1, 2). '<br />';

function strpos($str, $text) {
    return 1;
}

echo strpos('Texto generico para busca', 'busca');
