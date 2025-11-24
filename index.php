<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caio Store</title>
        <link rel="stylesheet" href="styles.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

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
        <a href="#recomendacoes">Categorias</a>
        <a href="suporte.php">Suporte</a>

        <!-- Carrinho -->
        <a href="carrinho.php" class="cart-link">
            🛒
            <span class="cart-count">2</span>
        </a>

        <?php if (isset($_SESSION["user_id"])): ?>
                <span class="user-nome">Olá, <?= $_SESSION['user_nome']; ?>!</span>
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
            <section>
                <div class="slider-wrapper">
                    <div class="slider">
                        <img id="slide-1" src="imagens/Ps5 slide.png" alt="Imagem de um ps5">
                        <img id="slide-2" src="imagens/Xbox Slide.png" alt="Imagem de um Xbox X">
                        <img id="slide-3" src="imagens/Nintendo Slide.png" alt="Imagem de um Nintendo Switch">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                    </div>
                </div>
            </section>

            <p class="apresentacao">
                Caio Store é um serviço que organiza para você os melhores e mais novos produtos com os preços mais acessíveis do mercado.
            </p>
        </main>

        <section class="recomendacoes" id="recomendacoes">
            <div class="reco-header">
                <h2>PRINCIPAIS RECOMENDAÇÕES</h2>
                <a href="#" class="reco-ver-tudo">Ver tudo</a>
            </div>

            <div class="reco-container">

                <a href="#" class="reco-card card-consoles">
                    <img class="reco-img" src="imagens/ps5-product-thumbnail-01-en-14sep21.webp" alt="Consoles">
                    <span>Consoles</span>
                </a>

                <a href="#" class="reco-card card-jogos">
                    <img class="reco-img" src="imagens/artboard-1-c-pia-ktg4qatn3j.webp" alt="Jogos">
                    <span>Jogos</span>
                </a>

                <a href="#" class="reco-card card-pcgamer">
                    <img class="reco-img" src="imagens/pc-ou-computador-de-jogos-moderno-isolado-em-um-fundo-transparente_84443-14295.avif" alt="PC Gamer">
                    <span>PC Gamer</span>
                </a>

                <a href="#" class="reco-card card-acessorios">
                    <img class="reco-img" src="imagens/Perifericos.png" alt="Acessórios">
                    <span>Acessórios</span>
                </a>

                <a href="#" class="reco-card card-keys">
                    <img class="reco-img" src="imagens/Steamkey.png" alt="Keys">
                    <span>Keys</span>
                </a>

            </div>
        </section>

        <section class="ofertas">
            <div class="ofertas-header">
                <h2>OFERTAS DO DIA</h2>
                <a href="#" class="ofertas-ver-tudo">Ver tudo</a>
            </div>

            <div class="ofertas-container">

                <div class="oferta-card">
                    <span class="badge-desconto">-25%</span>
                    <img src="imagens/ps5-product-thumbnail-01-en-14sep21.webp" alt="PS5">
                    <h3>PlayStation 5</h3>

                    <div class="precos">
                        <span class="preco-antigo">R$ 4.599,90</span>
                        <span class="preco-atual">R$ 3.449,90</span>
                    </div>

                    <button class="btn-comprar">Comprar</button>
                </div>

                <div class="oferta-card">
                    <span class="badge-desconto">-30%</span>
                    <img src="imagens/artboard-1-c-pia-ktg4qatn3j.webp" alt="Spider-Man PS5">
                    <h3>Spider-Man PS5</h3>

                    <div class="precos">
                        <span class="preco-antigo">R$ 349,90</span>
                        <span class="preco-atual">R$ 239,90</span>
                    </div>

                    <button class="btn-comprar">Comprar</button>
                </div>

                <div class="oferta-card">
                    <span class="badge-desconto">-15%</span>
                    <img src="imagens/pc-ou-computador-de-jogos-moderno-isolado-em-um-fundo-transparente_84443-14295.avif" alt="PC Gamer">
                    <h3>PC Gamer RGB</h3>

                    <div class="precos">
                        <span class="preco-antigo">R$ 7.999,90</span>
                        <span class="preco-atual">R$ 6.799,90</span>
                    </div>

                    <button class="btn-comprar">Comprar</button>
                </div>

                <div class="oferta-card">
                    <span class="badge-desconto">-40%</span>
                    <img src="imagens/Perifericos.png" alt="Kit Gamer">
                    <h3>Kit Teclado + Mouse</h3>

                    <div class="precos">
                        <span class="preco-antigo">R$ 399,90</span>
                        <span class="preco-atual">R$ 239,90</span>
                    </div>

                    <button class="btn-comprar">Comprar</button>
                </div>

            </div>
        </section>

        <script>
            let slider = document.querySelector('.slider');
            let images = slider.querySelectorAll('img');
            let index = 0;

            setInterval(() => {
                index = (index + 1) % images.length;
                slider.scrollTo({
                    left: images[index].offsetLeft,
                    behavior: 'smooth'
                });
            }, 4000); // troca a cada 4 segundos
        </script>

        <footer class="footer">
            <div class="footer-container">

                <div class="footer-col">
                    <h4>Caio Store</h4>
                    <p>A loja feita para gamers que buscam preço baixo e qualidade verdadeira.</p>
                </div>

                <div class="footer-col">
                    <h4>Links Rápidos</h4>
                    <a href="index.php">Home</a>
                    <a href="#recomendacoes">Categorias</a>
                    <a href="suporte.php">Suporte</a>
                    <a href="login.php">Login</a>
                </div>

                <div class="footer-col">
                    <h4>Ajuda</h4>
                    <a href="#">Minha conta</a>
                    <a href="suporte.php">Suporte</a>
                    <a href="#">Pedidos</a>
                    <a href="#">Trocas e devoluções</a>
                </div>

                <div class="footer-col">
                    <h4>Redes sociais</h4>
                    <div class="social-links">
                        <a href="#"><img src="imagens/icon-facebook.png" alt="Facebook"></a>
                        <a href="#"><img src="imagens/icon-instagram.png" alt="Instagram"></a>
                        <a href="#"><img src="imagens/icon-twitter.png" alt="Twitter"></a>
                        <a href="#"><img src="imagens/icon-youtube.png" alt="Youtube"></a>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                © 2025 Caio Store — Todos os direitos reservados.
            </div>
        </footer>

        <script>
            const toggleBtn = document.getElementById("theme-toggle");

            // Carregar tema salvo
            if (localStorage.getItem("theme") === "dark") {
                document.body.classList.add("dark");
                toggleBtn.textContent = "☀️";
            }

            toggleBtn.addEventListener("click", () => {
                document.body.classList.toggle("dark");

                if (document.body.classList.contains("dark")) {
                    toggleBtn.textContent = "☀️"; 
                    localStorage.setItem("theme", "dark");
                } else {
                    toggleBtn.textContent = "🌙";
                    localStorage.setItem("theme", "light");
                }
            });
        </script>

    </body>
</html>
