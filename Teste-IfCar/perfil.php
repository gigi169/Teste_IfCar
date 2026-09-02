<?php

session_start();

include "header.php";

$usuario = [

    'nome' => $_SESSION['Nomeusuario'] ?? 'Maria da Silva',

    'email' => $_SESSION['Emailusuario'] ?? 'maria@email.com',

    'Telefoneusuario' => $_SESSION['Telefoneusuario'] ?? '(42) 99999-9999',
];

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <link
        rel="stylesheet"
        href="assets/style.css"
    >

    <title>Meu Perfil - IFCAR</title>

</head>

<body>

<div class="container">

    <div class="main-card">


        <!-- =================================
             CABEÇALHO DO PERFIL
        ================================== -->

        <div class="profile-header">

            <div class="profile-avatar">

                <?php

                echo strtoupper(
                    substr(
                        $usuario['nome'],
                        0,
                        1
                    )
                );

                ?>

            </div>


            <div class="profile-title">

                <h1>
                    Meu Perfil
                </h1>

                <p>
                    Gerencie suas informações no IFCAR.
                </p>

            </div>

        </div>


        <!-- =================================
             INFORMAÇÕES DA CONTA
        ================================== -->

        <div class="section">

            <h2 class="section-title">
                Informações da conta
            </h2>


            <form
                action="actionperfil.php"
                method="POST"
            >

                <div class="locations">


                    <!-- NOME -->

                    <div>

                        <label for="Nomeusuario">
                            Nome Completo
                        </label>

                        <input
                            type="text"
                            id="Nomeusuario"
                            name="Nomeusuario"
                            value="<?php
                                echo htmlspecialchars(
                                    $usuario['nome']
                                );
                            ?>"
                            required
                        >

                    </div>


                    <!-- EMAIL -->

                    <div>

                        <label for="Emailusuario">
                            Email
                        </label>

                        <input
                            type="email"
                            id="Emailusuario"
                            name="Emailusuario"
                            value="<?php
                                echo htmlspecialchars(
                                    $usuario['email']
                                );
                            ?>"
                            required
                        >

                    </div>


                    <!-- TELEFONE -->

                    <div>

                        <label for="Telefoneusuario">
                            Telefone
                        </label>

                        <input
                            type="tel"
                            id="Telefoneusuario"
                            name="Telefoneusuario"
                            value="<?php
                                echo htmlspecialchars(
                                    $usuario['Telefoneusuario']
                                );
                            ?>"
                            required
                        >

                    </div>

                </div>


                <!-- BOTÃO -->

                <button
                    type="submit"
                    class="search-button"
                >
                    Salvar alterações
                </button>

            </form>

        </div>


        <!-- =================================
             RESUMO DO USUÁRIO
        ================================== -->

        <div class="section">

            <h2 class="section-title">
                Resumo da minha conta
            </h2>


            <div class="profile-stats">


                <div class="profile-stat">

                    <strong>
                        0
                    </strong>

                    <span>
                        Caronas oferecidas
                    </span>

                </div>


                <div class="profile-stat">

                    <strong>
                        0
                    </strong>

                    <span>
                        Caronas solicitadas
                    </span>

                </div>


                <div class="profile-stat">

                    <strong>
                        0
                    </strong>

                    <span>
                        Caronas realizadas
                    </span>

                </div>

            </div>

        </div>

        <!-- =================================
             SAIR
        ================================== -->

        <div class="profile-logout">

            <a href="logout.php">
                Sair da minha conta
            </a>

        </div>


    </div>

</div>

</body>

</html>