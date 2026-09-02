<?php
session_start();
include "header.php";

// Dados de exemplo das caronas
$caronas = [];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    
    <div class="container">

        <div class="search-box">

            <div class="section">

                <div class="title-area">
                    <div>
                        <h1>Cadastrar Carona</h1>
                        <p>Cadastre uma carona para outros estudantes</p>
                    </div>
                </div>

                <form 
                    action="actioncarona.php?categoria=oferecendo" 
                    method="POST" 
                    enctype="multipart/form-data"
                >
                    
                    <!-- DADOS DO USUÁRIO -->
                    <div class="section">

                        <h2 class="section-title">Dados do usuário</h2>

                        <div class="locations">

                            <div>
                                <label for="Nomeusuario">
                                    Nome Completo
                                </label>

                                <input
                                    type="text"
                                    id="Nomeusuario"
                                    name="Nomeusuario"
                                    placeholder="Digite seu nome completo"
                                    required
                                >
                            </div>

                        </div>

                    </div>


                    <!-- LOCALIZAÇÃO -->
                    <div class="section">

                        <h2 class="section-title">Localização</h2>

                        <div class="locations">

                            <div>
                                <label for="Enderecosaida">
                                    Endereço de saída
                                </label>

                                <input
                                    type="text"
                                    id="Enderecosaida"
                                    name="Enderecosaida"
                                    placeholder="Onde você vai sair?"
                                    required
                                >
                            </div>


                            <div>
                                <label for="Enderecodestino">
                                    Endereço de destino
                                </label>

                                <input
                                    type="text"
                                    id="Enderecodestino"
                                    name="Enderecodestino"
                                    placeholder="Para onde você vai?"
                                    required
                                >
                            </div>

                        </div>

                    </div>


                    <!-- DATA E HORÁRIO -->
                    <div class="section">

                        <h2 class="section-title">Data e horário</h2>

                        <div class="custom-date">

                            <div>
                                <label for="Caronadate">
                                    Data
                                </label>

                                <input
                                    type="date"
                                    id="Caronadate"
                                    name="Data"
                                    required
                                >
                            </div>


                            <div>
                                <label for="Caronatime">
                                    Hora
                                </label>

                                <input
                                    type="time"
                                    id="Caronatime"
                                    name="Hora"
                                    required
                                >
                            </div>

                        </div>

                    </div>


                    <!-- PASSAGEIROS -->
                    <div class="section">

                        <h2 class="section-title">
                            Vagas disponíveis
                        </h2>

                        <div class="locations">

                            <div>

                                <label for="Numerocarona">
                                    Número de caronas disponíveis
                                </label>

                                <input
                                    type="number"
                                    id="Numerocarona"
                                    name="Numeropassageiros"
                                    min="1"
                                    max="4"
                                    placeholder="Escolha de 1 a 4"
                                    required
                                >

                            </div>
                        </div>
                        
                    </div>

                    <!-- BOTÃO -->
                    <button
                        type="submit"
                        class="search-button"
                    >
                        Cadastrar Carona
                    </button>

                </form>

            </div>

        </div>

    </div>

</body>
</html>