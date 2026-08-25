<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style.css" rel="stylesheet" />
    </head>

    <body>
        <header class="header">

            <div class="logo">
                🚗 Carona+
            </div>

            <nav>
                <a href="index.php">Início</a>
                <a href="encontrar-carona.php">Encontrar carona</a>
                <a href="oferecer-carona.php">Oferecer carona</a>

                <?php if(isset($_SESSION['usuario_id'])): ?>
                    <a href="perfil.php">Meu perfil</a>
                <?php else: ?>
                    <a href="login.php">Entrar</a>
                <?php endif; ?>
            </nav>
                    

        </header>
    </body>    
</html>
