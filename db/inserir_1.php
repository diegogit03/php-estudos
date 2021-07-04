<div class="titulo">Inserir #01</div>

<?php

require_once 'conexao.php';

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Maria',
        '1989-10-29',
        'maria@email.com.br',
        'https://www.maria.com.br',
        2,
        13000.87
    )
";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso :D';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
