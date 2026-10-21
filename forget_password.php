<?php
session_start();

try {
    $conexao = new mysqli("localhost", "root", "", "aurora_cafe");
    $conexao->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Falha ao conectar-se com o banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_cliente = trim($_POST['nome_cliente'] ?? '');
    $email_cliente = trim($_POST['email_cliente'] ?? '');
    $cpf_cliente = trim($_POST['cpf_cliente'] ?? '');

    $sql = "SELECT * FROM cadastro_cliente WHERE nome = ? AND email = ? AND cpf = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "sss",
        $nome_cliente,
        $email_cliente,
        $cpf_cliente
    );

    $stmt->execute();

    $results = $stmt->get_result();


    if ($results->num_rows === 0) {
        session_destroy();
        session_unset();
        header("Location: forget_password_output.php");
    } else {

        $infos = $results->fetch_assoc();

        $_SESSION['recuperar_senha'] = $infos;
        $_SESSION['cliente_id'] = $infos['id_cadastro'];

        header("Location: recover_password.php");
        exit;
    }

    $stmt->close();
}

$conexao->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php"); ?>
<title>Recuperar Senha | Aurora Café & Co</title>

<body>

    <?php include("includes/header.php"); ?>

    <section id="cadastro">

        <div class="cadastro_container">

            <h1>RECUPERAR CONTA</h1>

            <div class="registrar_container">
                <form action="#" method="POST">


                    <input type="text" name="nome_cliente" id="" placeholder="Nome Completo">
                    <input type="text" name="email_cliente" id="" placeholder="E-mail">
                    <input type="text" name="cpf_cliente" id="" placeholder="CPF">



                    <button type="submit">
                        ENVIAR
                    </button>

                </form>


            </div>

            <div class="login_message">

                <a href="cadastro.php">CRIAR CONTA</a>
            </div>
            <div class="login_message">
                <a href="login.php">ENTRAR</a>
            </div>

        </div>

    </section>

    <?php include("includes/footer.php"); ?>
</body>

</html>