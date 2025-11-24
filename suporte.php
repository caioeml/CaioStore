<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suporte - Store</title>
        <link rel="stylesheet" href="styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- HEADER -->
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
                    <a href="index.html#recomendacoes">Categorias</a>
                    <a href="suporte.html">Suporte</a>

                    <a href="carrinho.html" class="cart-link">
                        🛒
                        <span class="cart-count">2</span>
                    </a>

                    <a href="login.html">Login</a>
                </div>
            </nav>
        </header>

        <!-- MAIN -->
        <main class="container">

            <h1 class="sup-title">Suporte ao Cliente</h1>
            <p class="sup-subtitle">Estamos aqui para ajudar. Veja abaixo as dúvidas mais comuns ou envie uma mensagem.</p>

            <!-- Cards de categorias de suporte -->
            <section class="sup-cards">
                <a href="#" class="sup-card">
                    <h3>📦 Acompanhar Pedido</h3>
                    <p>Veja o status da sua compra.</p>
                </a>

                <a href="#" class="sup-card">
                    <h3>↩️ Trocas e Devoluções</h3>
                    <p>Solicite troca ou devolução do produto.</p>
                </a>

                <a href="#" class="sup-card">
                    <h3>💳 Pagamentos</h3>
                    <p>Informações sobre boletos e cartão.</p>
                </a>

                <a href="#" class="sup-card">
                    <h3>🔧 Problemas técnicos</h3>
                    <p>Ajuda para consoles, jogos e acessórios.</p>
                </a>
            </section>

            <!-- FAQ -->
            <section class="faq">
                <h2>Dúvidas Frequentes</h2>

                <details>
                    <summary>Como faço para rastrear meu pedido?</summary>
                    <p>Você pode acompanhar seus pedidos pelo menu superior ou pela página "Minha Conta".</p>
                </details>

                <details>
                    <summary>Quais são as formas de pagamento?</summary>
                    <p>Cartão de crédito, PIX, boleto e carteira digital.</p>
                </details>

                <details>
                    <summary>Como funcionam as trocas?</summary>
                    <p>Você pode solicitar troca em até 7 dias após o recebimento.</p>
                </details>
            </section>

            <!-- FORMULÁRIO -->
            <section class="sup-form">
                <h2>Fale Conosco</h2>

                <form>
                    <label>Nome</label>
                    <input type="text" placeholder="Seu nome" required>

                    <label>E-mail</label>
                    <input type="email" placeholder="seuemail@exemplo.com" required>

                    <label>Mensagem</label>
                    <textarea rows="5" placeholder="Descreva seu problema"></textarea>

                    <button type="submit" class="btn-enviar">Enviar mensagem</button>
                </form>
            </section>

        </main>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer-container">

                <div class="footer-col">
                    <h4>Caio Store</h4>
                    <p>A loja feita para gamers que buscam preço baixo e qualidade verdadeira.</p>
                </div>

                <div class="footer-col">
                    <h4>Links Rápidos</h4>
                    <a href="index.html">Home</a>
                    <a href="index.html#recomendacoes">Categorias</a>
                    <a href="suporte.html">Suporte</a>
                    <a href="login.html">Login</a>
                </div>

                <div class="footer-col">
                    <h4>Ajuda</h4>
                    <a href="#">Minha conta</a>
                    <a href="#">Suporte</a>
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

    </body>
</html>
