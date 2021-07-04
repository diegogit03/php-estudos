<div class="titulo">Excluir registro #01</div>

<?php

require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 2";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso: :D';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
