<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php"); ?>

<title>Cadastro | Aurora Cafe & Co</title>
<body>

<?php include_once ("includes/header.php");?>




<main>

    <section id="cadastro">

        <div class="cadastro_container">

            <h1>CADASTRAR</h1>

            <div class="registrar_container">
                <form action="cadastro_output.php" method="post">

                    
                    <input type="text" name="nome_cliente" id="" placeholder="Nome completo">
                    <input type="text" name="email_cliente" id="" placeholder="E-mail">
                    <input type="text" name="tel_cliente" id="" placeholder="Telefone">
                    <input type="text" name="cpf_cliente" id="" placeholder="CPF">
                    <input type="password" name="senha_cliente" id="" placeholder="Senha">

                    <button type="submit">
                        ENVIAR
                    </button>

                </form>
            </div>

            <div class="login_message">
                <p>Já possui uma conta?</p>
                <a href="login.php">ENTRAR</a>
            </div>

        </div>

    </section>

</main>




<?php include_once("includes/footer.php"); ?>
    
</body>
</html>