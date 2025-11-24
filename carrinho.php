<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrinho - Caio Store</title>
        <link rel="stylesheet" href="styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="topo">
                <div class="logo-container">
                    <img src="https://github.com/caioeml.png" alt="">
                    <span class="store-name">Caio store</span>
                </div>
                <form action="search"> 
                    <input type="text" id="search-bar" placeholder="Faça sua busca...">
                    <button type="submit">Pesquisar</button>
                </form>
                <span class="spacer"></span>
            </div>

            <nav>
                <div>
                    <a href="index.php">Home</a>
                    <a href="index.php#recomendacoes">Categorias</a>
                    <a href="suporte.php">Suporte</a>

                    <!-- Carrinho -->
                    <a href="carrinho.php" class="cart-link">
                        🛒
                        <span class="cart-count">2</span>
                    </a>

                    <?php if (isset($_SESSION["user_id"])): ?>
                        <span class="user-nome">Olá, <?= htmlspecialchars($_SESSION['user_nome']); ?>!</span>
                        <a href="logout.php" class="logout-link">Sair</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                        <a href="registro.php" class="register-link">Registrar</a>
                    <?php endif; ?>

                    <button id="theme-toggle" class="theme-btn">🌙</button>
                </div>
            </nav>
        </header>

        <main class="container">

            <h1 class="cart-title">Meu carrinho</h1>

            <!-- MENSAGEM QUANDO O CARRINHO ESTIVER VAZIO (por enquanto só visual) -->
            <!--
            <p class="cart-empty">Seu carrinho está vazio. Que tal adicionar alguns produtos? 🎮</p>
            -->

            <section class="cart-section">

                <div class="cart-items">

                    <!-- ITEM 1 -->
                    <div class="cart-item">
                        <img src="imagens/ps5-product-thumbnail-01-en-14sep21.webp" alt="PS5">

                        <div class="cart-item-info">
                            <h2>PlayStation 5</h2>
                            <p class="cart-item-category">Console</p>
                            <p class="cart-item-price">R$ 3.449,90</p>
                        </div>

                        <div class="cart-item-actions">
                            <label>
                                Qtd:
                                <input type="number" value="1" min="1">
                            </label>
                            <button class="btn-remove">Remover</button>
                        </div>
                    </div>

                    <!-- ITEM 2 -->
                    <div class="cart-item">
                        <img src="imagens/artboard-1-c-pia-ktg4qatn3j.webp" alt="Spider-Man PS5">

                        <div class="cart-item-info">
                            <h2>Spider-Man PS5</h2>
                            <p class="cart-item-category">Jogo</p>
                            <p class="cart-item-price">R$ 239,90</p>
                        </div>

                        <div class="cart-item-actions">
                            <label>
                                Qtd:
                                <input type="number" value="1" min="1">
                            </label>
                            <button class="btn-remove">Remover</button>
                        </div>
                    </div>

                </div>

                <aside class="cart-summary">
                    <h2>Resumo da compra</h2>

                    <div class="cart-summary-row">
                        <span>Subtotal</span>
                        <span>R$ 3.689,80</span>
                    </div>

                    <div class="cart-summary-row">
                        <span>Frete</span>
                        <span>A calcular</span>
                    </div>

                    <div class="cart-summary-row total">
                        <span>Total</span>
                        <span>R$ 3.689,80</span>
                    </div>

                    <button class="btn-finalizar">Finalizar compra</button>
                    <a href="index.php" class="btn-voltar">⟵ Continuar comprando</a>
                </aside>

            </section>

        </main>

        <?php include "footer.php"; ?>
    </body>
</html>
