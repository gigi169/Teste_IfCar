<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style.css" rel="stylesheet" />
        <title>IfCar - Caronas estudantis</title>

    </head>

    <body>
        <header class="header">

            <div class="logo">
             <img src="assets/img/logo.png">
            </div>

            <nav>
                <a href="index.php">Início</a>
                <a href="pedir-carona.php">Pedir carona</a>
                <a href="formcarona.php">Cadastrar carona</a>
                <?php if(isset($_SESSION['Idusuario'])): ?>
                    <a href="perfil.php">Meu perfil</a>
                <?php else: ?>
                    <a href="formlogin.php">Entrar</a>
                <?php endif; ?>
            </nav>

        </header>
    </body>    
</html>
