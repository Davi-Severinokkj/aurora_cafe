<?php


$conexao = new mysqli("localhost", "root", "", "aurora_cafe");

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

