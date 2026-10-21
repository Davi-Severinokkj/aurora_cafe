
<footer class="footer">
    <div class="footer-container">

        <!-- Identidade da empresa -->
        <div class="footer-brand">
            <a href="index.php" class="footer-logo">
                Aurora <span>Café & Co.</span>
            </a>

            <p>
                Mais do que café, momentos para apreciar.
                Sabores artesanais preparados com carinho
                para tornar seus dias especiais.
            </p>

            <div class="footer-social">
                <a href="https://instagram.com/" target="_blank"
                   rel="noopener noreferrer" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://facebook.com/" target="_blank"
                   rel="noopener noreferrer" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="https://wa.me/5500000000000"
                   target="_blank" rel="noopener noreferrer"
                   aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <!-- Navegação -->
        <div class="footer-column">
            <h3>Navegação</h3>

            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="historia.php">Nossa História</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </div>

        <!-- Atendimento -->
        <div class="footer-column">
            <h3>Atendimento</h3>

            <ul>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    Seg. a Sáb.: 08h às 18h
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    Belo Horizonte, MG
                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <a href="mailto:contato@auroracafe.com.br">
                        Entre em contato
                    </a>
                </li>
            </ul>
        </div>

        <!-- Chamada para ação -->
        <div class="footer-cta">
            <h3>Seu próximo café favorito está aqui.</h3>

            <p>
                Conheça nosso cardápio e descubra
                novos sabores.
            </p>

            <a href="cardapio.php" class="footer-button">
                Explorar cardápio
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            &copy; <span id="footer-year"></span>
            Aurora Café & Co. Todos os direitos reservados.
        </p>

        <a href="privacidade.php">Política de Privacidade</a>
    </div>
</footer>

<script>
    document.getElementById("footer-year").textContent =
        new Date().getFullYear();
</script>
