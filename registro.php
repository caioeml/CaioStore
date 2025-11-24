<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar - Caio Store</title>
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

                    <button id="theme-toggle" class="theme-btn">🌙</button>

                    <a href="login.php">Login</a>
                </div>
            </nav>
        </header>

        <main class="container">
            <section class="login-wrapper">
                <div class="login-box">
                    <h1>Criar Conta</h1>
                    <p class="login-subtitle">Preencha os dados abaixo para se registrar.</p>

                    <form action="registro_action.php" method="POST" class="login-form">

                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>

                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>

                        <label for="confirmar">Confirmar senha</label>
                        <input type="password" id="confirmar" name="confirmar" placeholder="Repita sua senha" required>

                        <label class="remember-me">
                            <input type="checkbox" required>
                            <span>Li e aceito os <a href="#">termos de uso</a></span>
                        </label>

                        <button type="submit" class="btn-login">Registrar</button>

                        <p class="login-register">
                            Já possui conta?
                            <a href="login.php">Entrar</a>
                        </p>

                    </form>
                </div>
            </section>
        </main>

        <?php include "footer.php"; ?>

    </body>
</html>
