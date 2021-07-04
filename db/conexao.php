<?php

function novaConexao($banco = 'estudos_php') {
    // se a porta for diferente de 3306 também coloquea depois do ip
    // ex: 127.0.0.1:3307
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli(
        $servidor,
        $usuario,
        $senha,
        $banco
    );

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}
