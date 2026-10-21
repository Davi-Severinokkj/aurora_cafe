<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
} else {
    try {
        $conexao = mysqli_connect("localhost", "root", "", "aurora_cafe");
        $conexao->set_charset("utf8mb4");
    } catch (Exception $e) {
        echo "Falha ao conectar-se ao banco de dados: " . $e->getMessage();
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo_email = trim($_POST['novo_email'] ?? '');
    $novo_tel = trim($_POST['novo_tel'] ?? '');

    $sql = "UPDATE cadastro_cliente
            SET email = ?, telefone = ?
            WHERE id_cadastro = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "ssi",
        $novo_email,
        $novo_tel,
        $_SESSION['cliente_id']
    );

    if ($stmt->execute()) {
        header("Location: minha_conta.php");
        exit;
    } else {
        echo "Erro ao atualizar as informações.";
    }

    $stmt->close();
}




?>


<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php"); ?>
<title>Editar Informações | Aurora Café & Co</title>

<body>

    <?php include("includes/header.php"); ?>

    <main>
        <div class="editar_container">
            <form action="" method="post">
                <h2>Editar Informações</h2>

                <div class="input_grupo">
                    <label for="novo_email">Novo e-mail:</label>
                    <input type="email" name="novo_email" id="novo_email" placeholder="Digite seu novo e-mail">
                </div>

                <div class="input_grupo">
                    <label for="novo_tel">Novo telefone:</label>
                    <input type="tel" name="novo_tel" id="novo_tel" placeholder="Digite seu novo telefone">
                </div>

                <button type="submit" class="btn_salvar">Salvar Alterações</button>
            </form>
        </div>
    </main>

    <?php include("includes/foter.php");?>

</body>

</html>