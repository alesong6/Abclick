<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABClick Cadastra</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/login.js"></script>
</head>
<body>
    <div class="background"></div>

    <header>
        <nav class="navbar">
            <a href="#" class="logo-link">
                <div class="logo">
                    <img src="image/abclick.png" alt="ABClick Logo">
                </div>
            </a>
        </nav>
    </header>

    <div class="login-box">
        <h2>Cadastrar</h2>

        <label for="name">Seu nome</label>
        <input type="text" id="name" placeholder="Digite seu nome" required>

        <label for="email">Seu e-mail</label>
        <input type="email" id="email" placeholder="Digite seu e-mail" required>

        <label for="password">Sua senha</label>
        <input type="password" id="password" placeholder="Digite sua senha" required>

        <p id="error-message" class="error-message"></p>

        <a href="#" class="forgot-password">Esqueci minha senha</a>

        <button type="submit" id="login-btn">Cadastrar</button>

        <p class="register-text">Já tem conta? Faça login</p>

        <div class="register-container">
            <button class="register-btn">
                <a href="/login">Logar</a>
            </button>
        </div>
    </div>

    <footer class="footer0">
        <p>Política de privacidade de cookies   |    © ABClick 2025. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
