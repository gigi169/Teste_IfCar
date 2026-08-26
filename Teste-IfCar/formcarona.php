<?php 
session_start();
?>
<?php include "header.php" ?>
<?php
// Dados de exemplo das caronas
$caronas = [];
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <a href="assets/style.ccs" ></a>
        <title>Rydify - Caronas estudantis</title>

    </head>

    <body>
        <div class="container">

            <div class="search-box">

                <div class="section">
                  <form action="actioncarona.php" method="POST" class="was-validated" enctype="multipart/form-data">
                        <div class="locations">

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="Nomeusuario">Nome Completo</label>
                                <input type="text" id="Nomeusuario" name="Nomeusuario" class="form-control form-control-lg" />
                            </div>

                            <div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="Enderecosaida">Endereco de saida</label>
                                <input type="text" id="Enderecosaida" name="Enderecosaida" class="form-control form-control-lg" />
                            </div>

                            <div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="Enderecodestino">Endereco de destino</label>
                                <input type="text" id="Enderecodestino" name="Enderecodestino" class="form-control form-control-lg" />
                            </div>

                            <div>
                                <label for="caronadate">Data</label>
                                <input type="date" id="Caronadate" name="Data">
                            </div>

                            <div>
                                <label for="caronatime">Hora</label>
                                <input type="time" id="Caronatime" name="Hora">
                            </div>

                            <div>
                            <label for="quantity"> Numero de caronas disponiveis(De 1 a 4):</label>
                            <input type="number" id="Numerocarona" name="Numeropassageiros" min="1" max="4">
                    
                            </div>

                        </div>

                        <div class="d-flex justify-content-end pt-3">
                            <button type="submit">
                                Cadastrar carona
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
