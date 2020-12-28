<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br/>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel. '<br />';
    echo soma(2, 5). '<br />';
}

echo 'Novamente no arquivo include_funcao<br />';
carregarArquivo();
echo soma(1, 8). '<br/>';
// echo 'Variável = '. $variavel. '.';
// var_dump($variavel);
