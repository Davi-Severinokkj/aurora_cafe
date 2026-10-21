<!DOCTYPE html>
<html lang="pt-br">

<?php include("includes/head.php"); ?>
<title>Aurora Café & Co</title>

<?php
require("conexao_db/conexao.php");
require_once("functions/function_select_produtos.php");
?>

<body>

    <?php include("includes/header.php"); ?>

    <main>

        <section id="hero">
            <div class="hero_container">
                <div class="hero_content">
                    <h1>Aurora Café</h1>
                    <p>
                        Um cantinho para desacelerar e saborear. Cafeteria, produtos artesanais e experiências feitas com café, afeto e cuidado — do primeiro gole ao último detalhe.
                    </p>
                </div>

            </div>
        </section>



        <section id="sobre" class="sobre">

            <div class="sobre_titulo">
                <span>CONHEÇA A AURORA</span>
                <h2>Sobre nós</h2>
            </div>

            <div class="sobre_container">

                <div class="content_sobre">

                    <span class="sobre_destaque">
                        Nossa história
                    </span>

                    <h3>
                        É no compasso do silêncio que nasce a origem.
                    </h3>

                    <p>
                        A Aurora Café & Co. nasceu de um desejo antigo de sua
                        fundadora, Beatriz: criar um refúgio acolhedor onde o dia
                        desacelera e o café é servido sem pressa.
                    </p>

                    <p>
                        Vinda do interior, ela sempre sentiu falta de um espaço
                        na cidade que unisse o aconchego das receitas de família
                        à liberdade de pedir um brunch caprichado ou um bolo
                        quentinho a qualquer hora, sem a limitação dos horários
                        tradicionais.
                    </p>

                    <p>
                        Com paixão pela gastronomia e um olhar atento aos detalhes,
                        Beatriz abriu sua primeira casa no coração do bairro.
                        Nos primeiros meses, ela garantia que tudo saísse perfeito:
                        preparava as fornadas matinais, escolhia os grãos locais
                        e recebia cada cliente pelo nome.
                    </p>

                    <p>
                        A nossa primeira unidade guarda a essência de tudo o que
                        somos: o lugar onde os primeiros métodos de extração foram
                        testados, onde aperfeiçoamos nossas receitas afetivas e
                        onde a ideia de recarregar as energias em um ambiente leve
                        virou realidade — sempre com aroma de café fresco, afeto
                        e a boa energia de sempre.
                    </p>

                </div>

                <div class="sobre_imagem">
                    <img
                        src="imgs/coffee-beans-background.jpg"
                        alt="Grãos de café torrados da Aurora Café & Co.">

                    <div class="sobre_selo">
                        <span>Desde</span>
                        <strong>2026</strong>
                    </div>
                </div>

            </div>

        </section>

        <section id="contato" class="contato">
            <div class="sobre_titulo">
                <span>FALE CONOSCO</span>
                <h2>Contato</h2>
            </div>
            <div class="contato_container">


                <div class="contato_intro">

                    <h2>
                        Um café, uma conversa<br>
                        <em>e bons encontros.</em>
                    </h2>

                    <p>
                        Quer conhecer a Aurora, fazer uma reserva ou simplesmente
                        conversar com a gente? Estamos esperando por você.
                    </p>

                    <div class="contato_info">

                        <div class="info_item">
                            <div class="info_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <span>Onde estamos</span>
                                <p>Rua das Flores, 120 — Belo Horizonte, MG</p>
                            </div>
                        </div>

                        <div class="info_item">
                            <div class="info_icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>

                            <div>
                                <span>Horário</span>
                                <p>Terça a domingo · 08h às 20h</p>
                            </div>
                        </div>

                        <div class="info_item">
                            <div class="info_icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>

                            <div>
                                <span>WhatsApp</span>
                                <p>(31) 99999-9999</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="contato_formulario">

                    <div class="form_header">
                        <span>ENTRE EM CONTATO</span>
                        <h3>Vamos conversar?</h3>
                    </div>

                    <form action="#" method="post">

                        <div class="form_group">
                            <label for="nome">Seu nome</label>
                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                placeholder="Como podemos te chamar?"
                                required>
                        </div>

                        <div class="form_group">
                            <label for="email">Seu e-mail</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="seuemail@email.com"
                                required>
                        </div>

                        <div class="form_group">
                            <label for="assunto">Assunto</label>
                            <select id="assunto" name="assunto">
                                <option value="">Selecione uma opção</option>
                                <option value="reserva">Reserva</option>
                                <option value="duvida">Dúvida</option>
                                <option value="evento">Eventos</option>
                                <option value="parceria">Parcerias</option>
                                <option value="outro">Outro assunto</option>
                            </select>
                        </div>

                        <div class="form_group">
                            <label for="mensagem">Mensagem</label>
                            <textarea
                                id="mensagem"
                                name="mensagem"
                                placeholder="Conte um pouco sobre o que você precisa..."
                                rows="5"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn_contato">
                            Enviar mensagem
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>

                    </form>

                </div>

            </div>
        </section>


    </main>


    <?php include("includes/footer.php"); ?>
</body>

</html>