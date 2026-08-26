<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Criar conta - Carona+</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="auth-container">

    <div class="auth-card">

    <h1>Criar sua conta</h1>

    <form action="cadastrar.php" method="POST">

        <label>Nome completo</label>

        <input
            type="text"
            name="nome"
            required
        >

        <label>E-mail</label>

        <input
            type="email"
            name="email"
            required
        >

        <label>Telefone</label>

        <input
            type="tel"
            name="telefone"
        >

        <label>Instituição</label>

        <input
            type="text"
            name="instituicao"
        >

        <label>Senha</label>

        <input
            type="password"
            name="senha"
            required
        >

        <button type="submit">
            Criar conta
        </button>

    </form>

    <p>
        Já possui uma conta?
        <a href="login.php">Entrar</a>
    </p>



</body>
</html>