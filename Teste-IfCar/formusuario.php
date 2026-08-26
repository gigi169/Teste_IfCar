<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Criar conta - Carona+</title>
    <a href="assets/style.css"></a>
</head>

<body>

    <div class="auth-container">

    <div class="auth-card">

    <h1>Criar sua conta</h1>

    <form action="actionusuario.php" method="POST" class="was-validated" enctype="multipart/form-data">

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="Nomeusuario">Nome Completo</label>
            <input type="text" id="Nomeusuario" name="Nomeusuario" class="form-control form-control-lg" />
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>
                                    

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="Emailusuario">Email</label>
            <input type="text" id="Emailusuario" name="Emailusuario" class="form-control form-control-lg"/>       
           <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>

       <div data-mdb-input-init class="form-outline mb-4"> 
            <label class="form-label" for="Telefoneusuario">Telefone</label>
            <input type="tel" id="Telefoneusuario" name="Telefoneusuario" class="form-control form-control-lg" />                
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>

       <div data-mdb-input-init class="form-outline mb-4"> 
            <label class="form-label" for="Senhausuario">Senha</label>
            <input type="password" id="Senhausuario" name="Senhausuario" class="form-control form-control-lg" />                         
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
          <label for="Confirmarsenhausuario">Confirme a Senha</label>
            <input type="password" name="Confirmarsenhausuario" id="Confirmarsenhausuario" placeholder="Confirme a Senhausuario" class="form-control" minlength="3" maxlength="8" />                              
            <div class="valid-feedback"></div>
           <div class="invalid-feedback"></div>
        </div>

        <div class="d-flex justify-content-end pt-3">

             <button type="submit">
                Cadastrar
            </button>
           
            
        </div>
    </form>

    <p>
        Já possui uma conta?
        <a href="formlogin.php">Entrar</a>
    </p>



</body>
</html>