<?php

try {
    $conexao = new mysqli("localhost", "root", "", "aurora_cafe");
    $conexao->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Erro na conexão com banco de dados.");
}



$item_busca = $_GET['item_busca'] ?? '';
$categoria = $_GET['categoria'] ?? '';

// 1. Começa buscando todos os produtos
$sql = "SELECT * FROM produtos";

$condicoes = [];
$parametros = [];
$tipos = "";

// 2. Filtro pelo nome do produto

if ($item_busca !== '') {
    $condicoes[] = "nome LIKE ?";
    $parametros[] = "%" . $item_busca . "%";
    $tipos .= "s";
}

// 3. Filtro pela categoria
if ($categoria !== '') {
    $condicoes[] = "categoria = ?";
    $parametros[] = $categoria;
    $tipos .= "i";
}

// 4. Adiciona as condições à consulta
if (!empty($condicoes)) {
    $sql .= " WHERE " . implode(" AND ", $condicoes);
}

// 5. Prepara a consulta uma única vez
$stmt = $conexao->prepare($sql);

// 6. Associa os parâmetros, se existirem
if (!empty($parametros)) {
    $stmt->bind_param($tipos, ...$parametros);
}

// 7. Executa a consulta
$stmt->execute();

// 8. Recupera os produtos
$resultado = $stmt->get_result();
$produtos = $resultado->fetch_all(MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="pt-br">
<?php include("includes/head.php") ?>

<body>
    <?php include("includes/header.php"); ?>

    <section id="cardapio">
        <div class="sobre_titulo">
            <span>NOSSOS PRODUTOS</span>
            <h2>Cardápio</h2>
        </div>


        <div class="search_container">

            <form action="cardapio.php" method="get">

                <div class="campo_pesquisa">
                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input
                        class="input_pesquisa"
                        type="text"
                        name="item_busca"
                        id="item_busca"
                        placeholder="Pesquisar produto..."
                        value="<?= htmlspecialchars($item_busca ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <button class="off_search" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>


                <div class="campo_categoria">
                    <i class="fa-solid fa-filter"></i>

                    <select name="categoria" id="categoria">
                        <option value="">Todas as categorias</option>
                        <option value="1">Doces e acompanhamentos</option>
                        <option value="2">Brunch e almoço</option>
                        <option value="3">Produtos da loja</option>
                        <option value="4">Cafés</option>
                    </select>
                </div>

                <button type="submit" class="botao_pesquisar">
                    Pesquisar
                </button>


            </form>
        </div>



        <div class="cardapio_container">
            <div class="resultado_null">
                <p>
                    <?php if ($resultado->num_rows === 0):
                        echo "Nenhum resultado encontrado."; ?>


                </p>

                <a href="cardapio.php">VER CARDÁPIO</a>

            <?php endif ?>
            </div>
            <?php if (!empty($resultado)): ?>
                <?php foreach ($produtos as $produto): ?>

                    <div class="cards_produtos">
                        <img src="<?= htmlspecialchars($produto['imagem']); ?>" alt="<?= htmlspecialchars($produto['nome']); ?>">
                        <h3><?= htmlspecialchars($produto['nome']); ?></h3>
                        <p><?= htmlspecialchars($produto['preco']); ?></p>
                        <span><?= htmlspecialchars($produto['descricao']); ?></span>
                        <div class="cta-pedidos">
                            <a href="">COMPRAR JÁ!</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="color: #fff; text-align: center;">Nenhum produto encontrado.</p>
            <?php endif; ?>
        </div>
    </section>





    <?php include("includes/footer.php") ?>

    <script src="assets/scripts/limpar_campo.js"></script>
</body>


</html>