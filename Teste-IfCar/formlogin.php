 <?php    
    if(isset($_GET['erroLogin'])){
      $erroLogin = $_GET['erroLogin'];
      if($erroLogin == 'dadosInvalidos'){
        echo "<div class= 'alert alert-warning text-center'>EMAIL ou SENHA inválidos!</div>";
      }
     }

 ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Entrar - Carona+</title>
     <a href="assets/style.ccs" ></a>
</head>

<body>

<div class="auth-container">

    <div class="auth-card">

        <h1>🚗 Carona+</h1>

        <h2>Bem-vindo de volta!</h2>

        <form action="actionlogin.php" method="POST">
        
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="Emailusuario" id="Emailusuario" name="Emailusuario" class="form-control" />
                <label class="form-label" for="Emailusuario">Email</label>
            </div>
                                            
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="Senhausuario" name="Senhausuario" class="form-control" />
                <label class="form-label" for="Senhausuario">Senha</label>
            </div>


            <button type="submit">
                Entrar
            </button>

        </form>

        <p>
            Ainda não possui conta?
            <a href="formusuario.php">Criar conta</a>
        </p>

    </div>

</div>

</body>
</html>