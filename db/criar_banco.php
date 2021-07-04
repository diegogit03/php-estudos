<div class="titulo">Criar banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);

$sql = 'CREATE DATABASE IF NOT EXISTS estudos_php';

$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso :D';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
