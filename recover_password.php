<?php
session_start();

try {
    $conexao = new mysqli("localhost", "root", "", "aurora_cafe");
    $conexao->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Falha ao conectar-se com o banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nova_senha = $_POST['nova_senha'] ?? '';

    $_nova_senha_hash = password_hash(
        $nova_senha,
        PASSWORD_DEFAULT
    );

    $sql = "UPDATE cadastro_cliente SET senha = ? WHERE id_cadastro = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "si",
        $_nova_senha_hash,
        $_SESSION['cliente_id']
    );

    if ($stmt->execute()) {
        $stmt->close();
        $conexao->close();
        header("Location: minha_conta.php");
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php"); ?>
<title>Recuperar Senha | Aurora Café & Co</title>

<body>

    <?php include("includes/header.php"); ?>

    <section id="cadastro">

        <div class="cadastro_container">

            <h1>ALTERAR SENHA</h1>

            <div class="registrar_container">
                <form action="#" method="POST">


                    <input type="password" name="nova_senha" id="" placeholder="Nova Senha">

                    <button type="submit">
                        ENVIAR
                    </button>

                </form>


            </div>

        </div>

    </section>

    <?php include("includes/footer.php"); ?>
</body>

</html>