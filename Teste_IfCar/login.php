<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Entrar - Carona+</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="auth-container">

    <div class="auth-card">

        <h1>🚗 Carona+</h1>

        <h2>Bem-vindo de volta!</h2>

        <form action="actions/entrar.php" method="POST">

            <label>E-mail</label>

            <input
                type="email"
                name="email"
                required
            >

            <label>Senha</label>

            <input
                type="password"
                name="senha"
                required
            >

            <button type="submit">
                Entrar
            </button>

        </form>

        <p>
            Ainda não possui conta?
            <a href="cadastro.php">Criar conta</a>
        </p>

    </div>

</div>

</body>
</html>