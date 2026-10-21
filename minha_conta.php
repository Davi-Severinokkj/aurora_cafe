<?php
session_start();

// 1. Verificar se existe um cliente autenticado
if (!isset($_SESSION['cliente_id'])) {
    header("Location: login.php");
    exit;
}

// 2. Conectar ao banco de dados
$conexao = new mysqli("localhost", "root", "", "aurora_cafe");
$conexao->set_charset("utf8mb4");

// 3. Preparar a consulta
$sql = "SELECT * FROM cadastro_cliente WHERE id_cadastro = ?";

$stmt = $conexao->prepare($sql);

// 4. Associar o ID da sessão ao parâmetro
$stmt->bind_param("i", $_SESSION['cliente_id']);

// 5. Executar a consulta
$stmt->execute();

// 6. Recuperar os dados do cliente
$resultado = $stmt->get_result();
$cliente = $resultado->fetch_assoc();

if (!isset($cliente)) {
    session_unset();
    session_destroy();

    header("Location: login.php");
    exit;
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<?php include_once("includes/head.php"); ?>
<title>Minha Conta | Aurora Café & Co</title>

<body>

    <header>


        <div class="header_container">

            <div class="logo">
                <a href="index.php">
                    <img src="../imgs/logo_aurora_cafe.png" alt="">
                </a>
            </div>

            <div class="nav">
                <nav>

                    <li>
                        <ul><a href="index.php">INÍCIO</a></ul>
                        <ul><a href="cardapio.php">CARDÁPIO</a></ul>
                        <ul><a href="index.php#sobre">NOSSA HISTÓRIA</a></ul>
                        <ul><a href="">PEDIDOS</a></ul>
                        <ul><a href="">CONTATO</a></ul>
                    </li>

                </nav>
            </div>

            <div class="cta-pedidos">
                <a href="#">
                    Olá, <?= htmlspecialchars($cliente['NOME']) ?>
                </a>
                <a href="logout.php">Sair</a>
            </div>

        </div>

        </div>


    </header>


    <main>
        <div class="conta_container">


            <div class="conta">
                <h1>Olá, <?= htmlspecialchars($cliente['NOME']) ?>!</h1>
            </div>

            <div class="informacoes_conta">
                <p>
                    E-mail: <?= htmlspecialchars($cliente['EMAIL']) ?>
                </p>

                <p>
                    Telefone: <?= htmlspecialchars($cliente['TELEFONE']) ?>
                </p>

                <a href="editar_infos.php">EDITAR</a>
            </div>


        </div>
    </main>


    <?php include_once("includes/footer.php"); ?>


</body>

</html>