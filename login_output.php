<?php
session_start();

// 1. Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

// 2. Receber os dados do formulário
$email = trim($_POST['email_cliente'] ?? '');
$senha = $_POST['senha_cliente'] ?? '';

if ($email === '' || $senha === '') {
    exit("Preencha o e-mail e a senha.");
} else {
    // 3. Conectar ao banco de dados
    $conexao = new mysqli("localhost", "root", "", "aurora_cafe");
    $conexao->set_charset("utf8mb4");

    // 4. Buscar o cliente pelo e-mail, incluindo o hash da senha
    $sql = "SELECT id_cadastro, nome, email, telefone, cpf , senha
        FROM cadastro_cliente
        WHERE email = ?
        LIMIT 1";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $cliente = $resultado->fetch_assoc();


    // 5. Verificar o cliente e a senha
    if ($cliente && password_verify($senha, $cliente['senha'])) {

        // Renovar o identificador da sessão
        session_regenerate_id(true);

        // Guardar o ID correto do cliente
        $_SESSION['cliente_id'] = $cliente['id_cadastro'];
        $_SESSION['nome_cliente'] = $cliente['nome'];
        $_SESSION['email_cliente'] = $cliente['email'];
        $_SESSION['tel_cliente'] = $cliente['telefone'];

        // Redirecionar para a conta
        header("Location: minha_conta.php");
        exit;
    } else {
        echo "E-mail ou senha incorretos.";
        echo '<p><a href="login.php">Tentar novamente</a></p>';
    }

    $stmt->close();
    $conexao->close();
}
