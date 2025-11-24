<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - Caio Store</title>
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

                    <a href="carrinho.php" class="cart-link">
                        🛒
                        <span class="cart-count">2</span>
                    </a>

                    <a href="login.php">Login</a>
                    <button id="theme-toggle" class="theme-btn">🌙</button>
                </div>
            </nav>
        </header>

        <main class="container">
            <section class="login-wrapper">
                <div class="login-box">
                    <h1>Entrar</h1>
                    <p class="login-subtitle">Acesse sua conta para acompanhar pedidos e ofertas.</p>

                    <form action="login_action.php" method="POST" class="login-form">

                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>

                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

                        <div class="login-options">
                            <label class="remember-me">
                                <input type="checkbox">
                                <span>Lembrar de mim</span>
                            </label>
                            <a href="#" class="forgot-link">Esqueci minha senha</a>
                        </div>

                        <button type="submit" class="btn-login">Entrar</button>

                        <p class="login-register">
                            Ainda não tem conta?
                            <a href="registro.php">Criar conta</a>
                        </p>

                    </form>
                </div>
            </section>
        </main>

        <?php include "footer.php"; ?>

    </body>
</html>
