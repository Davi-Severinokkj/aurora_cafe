<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php"); ?>

<title>Login | Aurora Cafe & Co</title>

<body>

    <?php include_once("includes/header.php"); ?>




    <main>

        <section id="cadastro">

            <div class="cadastro_container">

                <h1>LOGAR</h1>

                <div class="registrar_container">
                    <form action="login_output.php" method="post">

                        <input type="text" name="email_cliente" id="" placeholder="E-mail">
                        <input type="password" name="senha_cliente" id="" placeholder="Senha">



                        <button type="submit">
                            ENVIAR
                        </button>

                    </form>


                </div>

                <div class="login_message">
                    <p>Não possui uma conta?</p>
                    <a href="cadastro.php">CRIAR CONTA</a>
                </div>
                <div class="login_message">

                    <a href="forget_password.php">
                        Esqueceu a senha?
                    </a>
                </div>

            </div>

        </section>

    </main>




    <?php include_once("includes/footer.php"); ?>

</body>

</html>