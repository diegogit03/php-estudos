<div class="titulo">Gerenciando sessão</div>

<?php
// session_id('974jklsviomcdgm8ll1rug5ouo');
session_start();
echo session_id() .'<br />';

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $contador;

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}
