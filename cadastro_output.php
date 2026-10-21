<?php

session_start();

try{
    $conexao = new mysqli("localhost" , "root" , "" , "aurora_cafe");
    $conexao->set_charset("utf8mb4");
} catch (Exception $e){
    die("Erro ao conectar-se com o banco de dados" . $e);
}


$nome = $_POST['nome_cliente'];
$email= $_POST['email_cliente'];
$tel = $_POST['tel_cliente'];
$cpf = $_POST['cpf_cliente'];
$senha = $_POST['senha_cliente'];


$senha_hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO cadastro_cliente(nome, email, telefone, cpf, senha) values(?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssss", $nome, $email, $tel, $cpf, $senha_hash);
$stmt->execute();

header('Location: minha_conta.php');

?>