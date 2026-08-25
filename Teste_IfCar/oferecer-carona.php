<?php

$requests = [

    [
        'nome' => 'Maria Silva',
        'universidade' => 'Universidade Estadual',
        'origem' => 'Curitiba',
        'destino' => 'Ponta Grossa',
        'data' => '28 Ago',
        'horario' => '07:30',
        'passageiros' => 1,
        'descricao' => 'Preciso de uma carona para a faculdade.'
    ],

    [
        'nome' => 'João Santos',
        'universidade' => 'UTFPR',
        'origem' => 'Castro',
        'destino' => 'Curitiba',
        'data' => '29 Ago',
        'horario' => '06:50',
        'passageiros' => 2,
        'descricao' => 'Procuro carona para chegar à universidade pela manhã.'
    ],

    [
        'nome' => 'Ana Oliveira',
        'universidade' => 'Universidade Estadual',
        'origem' => 'São José dos Pinhais',
        'destino' => 'Curitiba',
        'data' => '30 Ago',
        'horario' => '08:00',
        'passageiros' => 1,
        'descricao' => 'Gostaria de dividir uma carona com outros estudantes.'
    ]

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

    <title>Requests - Rydify</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f7f9fa;

            color: #172033;

        }


        /* =========================
           HEADER
        ========================= */

        header {

            height: 64px;

            background: white;

            border-bottom:
                1px solid #dedede;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 7%;

        }


        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 21px;

            font-weight: bold;

        }


        .logo-icon {

            width: 30px;

            height: 30px;

            background: #079b87;

            color: white;

            border-radius: 7px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: bold;

        }


        nav {

            display: flex;

            gap: 30px;

        }


        nav a {

            text-decoration: none;

            color: #505864;

            font-size: 14px;

            padding: 22px 5px;

        }


        nav a:hover {

            color: #079b87;

        }


        nav a.active {

            color: #079b87;

            border-bottom:
                2px solid #079b87;

        }


        /* =========================
           CONTAINER
        ========================= */

        .container {

            width: 80%;

            max-width: 1050px;

            margin:
                30px auto;

        }


        /* =========================
           VERIFICAÇÃO
        ========================= */

        .verification {

            background: #eef6ff;

            border:
                1px solid #c9def5;

            border-radius: 8px;

            padding: 15px 20px;

            margin-bottom: 22px;

            display: flex;

            gap: 15px;

        }


        .verification-icon {

            font-size: 20px;

        }


        .verification strong {

            color: #174f9c;

            display: block;

            margin-bottom: 5px;

        }


        .verification p {

            color: #315a91;

            font-size: 13px;

            margin-bottom: 5px;

        }


        .verification a {

            color: #315a91;

            font-size: 13px;

            font-weight: bold;

            text-decoration: none;

        }


        /* =========================
           CARD PRINCIPAL
        ========================= */

        .main-card {

            background: white;

            border:
                1px solid #dedede;

            border-radius: 9px;

            padding: 25px 35px 35px;

        }


        /* =========================
           TABS
        ========================= */

        .tabs {

            display: flex;

            background: #f0f1f3;

            padding: 3px;

            border-radius: 10px;

            margin-bottom: 28px;

        }


        .tab {

            width: 50%;

            padding: 10px;

            border: none;

            background: transparent;

            border-radius: 8px;

            cursor: pointer;

            font-size: 14px;

        }


        .tab.active {

            background: #079b87;

            color: white;

        }


        /* =========================
           TITULO
        ========================= */

        .title-area {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;

        }


        .title-area h1 {

            font-size: 23px;

            margin-bottom: 6px;

        }


        .title-area p {

            color: #68707b;

            font-size: 14px;

        }


        .publish-button {

            background: #079b87;

            color: white;

            border: none;

            border-radius: 7px;

            padding: 11px 17px;

            font-weight: bold;

            cursor: pointer;

        }


        .publish-button:hover {

            background: #067f70;

        }


        /* =========================
           FILTROS
        ========================= */

        .filters {

            display: grid;

            grid-template-columns:
                1fr
                1fr
                160px;

            gap: 12px;

            margin-bottom: 25px;

        }


        .filter {

            height: 42px;

            border:
                1px solid #d7dadd;

            border-radius: 7px;

            padding: 0 12px;

            font-size: 13px;

            outline: none;

        }


        .filter:focus {

            border-color: #079b87;

        }


        /* =========================
           REQUEST CARD
        ========================= */

        .request-card {

            border:
                1px solid #dedede;

            border-radius: 9px;

            padding: 20px;

            margin-bottom: 15px;

            transition: .2s;

            background: white;

        }


        .request-card:hover {

            border-color: #079b87;

            box-shadow:
                0 3px 10px
                rgba(0,0,0,.05);

        }


        .request-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 15px;

        }


        .user {

            display: flex;

            align-items: center;

            gap: 12px;

        }


        .avatar {

            width: 45px;

            height: 45px;

            background: #e4f6f3;

            color: #078575;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            font-weight: bold;

        }


        .user-name {

            font-weight: bold;

            font-size: 15px;

        }


        .university {

            color: #747b85;

            font-size: 12px;

            margin-top: 4px;

        }


        .student {

            background: #edf8f6;

            color: #078575;

            border-radius: 20px;

            padding: 6px 10px;

            font-size: 11px;

            font-weight: bold;

        }


        /* =========================
           ROTA
        ========================= */

        .route {

            display: grid;

            grid-template-columns:
                1fr
                30px
                1fr;

            align-items: center;

            margin: 15px 0;

        }


        .location {

            border:
                1px solid #e1e3e5;

            border-radius: 7px;

            padding: 12px;

        }


        .location small {

            display: block;

            color: #7b818a;

            font-size: 11px;

            margin-bottom: 4px;

        }


        .location strong {

            font-size: 14px;

        }


        .arrow {

            text-align: center;

            color: #079b87;

            font-size: 20px;

        }


        /* =========================
           INFORMAÇÕES
        ========================= */

        .request-info {

            display: flex;

            gap: 20px;

            color: #555d67;

            font-size: 13px;

            padding: 12px 0;

            border-top:
                1px solid #eee;

        }


        /* =========================
           DESCRIÇÃO
        ========================= */

        .description {

            background: #f7f9fa;

            padding: 12px;

            border-radius: 7px;

            color: #555d67;

            font-size: 13px;

            margin-bottom: 15px;

        }


        /* =========================
           FOOTER DO CARD
        ========================= */

        .request-footer {

            display: flex;

            justify-content: flex-end;

            gap: 10px;

        }


        .details-button {

            background: white;

            border:
                1px solid #d3d6d8;

            color: #343b45;

            border-radius: 7px;

            padding: 10px 16px;

            cursor: pointer;

        }


        .offer-button {

            background: #079b87;

            color: white;

            border: none;

            border-radius: 7px;

            padding: 10px 18px;

            font-weight: bold;

            cursor: pointer;

        }


        .offer-button:hover {

            background: #067f70;

        }


        /* =========================
           PAGINAÇÃO
        ========================= */

        .pagination {

            display: flex;

            justify-content: center;

            gap: 7px;

            margin-top: 25px;

        }


        .pagination button {

            width: 35px;

            height: 35px;

            border:
                1px solid #ddd;

            background: white;

            border-radius: 6px;

            cursor: pointer;

        }


        .pagination button.active {

            background: #079b87;

            color: white;

            border-color: #079b87;

        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 750px) {

            header {

                padding: 0 20px;

            }

            nav {

                gap: 10px;

            }

            .container {

                width: 94%;

            }

            .main-card {

                padding: 15px;

            }

            .title-area {

                flex-direction: column;

                align-items: flex-start;

                gap: 15px;

            }

            .filters {

                grid-template-columns: 1fr;

            }

            .route {

                grid-template-columns: 1fr;

                gap: 8px;

            }

            .arrow {

                transform: rotate(90deg);

            }

            .request-header {

                align-items: flex-start;

            }

            .student {

                display: none;

            }

        }

    </style>

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

<div class="container">


    <div class="main-card">



        <!-- TITULO -->

        <div class="title-area">

            <div>

                <h1>
                    Ride Requests
                </h1>

                <p>
                    Encontre estudantes que estão
                    procurando uma carona.
                </p>

            </div>


            <button
                class="publish-button"
                onclick="abrirModal()"
            >
                + Publicar pedido
            </button>

        </div>


        <!-- FILTROS -->

        <div class="filters">

            <input
                type="text"
                class="filter"
                placeholder="📍 Origem"
            >

            <input
                type="text"
                class="filter"
                placeholder="📍 Destino"
            >

            <input
                type="date"
                class="filter"
            >

        </div>


        <!-- =================================
             REQUESTS
        ================================== -->

        <?php foreach ($requests as $request): ?>

            <div class="request-card">


                <!-- USUARIO -->

                <div class="request-header">

                    <div class="user">

                        <div class="avatar">

                            <?php
                                echo strtoupper(
                                    substr(
                                        $request['nome'],
                                        0,
                                        1
                                    )
                                );
                            ?>

                        </div>


                        <div>

                            <div class="user-name">

                                <?php
                                    echo htmlspecialchars(
                                        $request['nome']
                                    );
                                ?>

                            </div>

                            <div class="university">

                                🎓
                                <?php
                                    echo htmlspecialchars(
                                        $request['universidade']
                                    );
                                ?>

                            </div>

                        </div>

                    </div>


                    <span class="student">
                        ESTUDANTE
                    </span>

                </div>


                <!-- ROTA -->

                <div class="route">


                    <div class="location">

                        <small>
                            ORIGEM
                        </small>

                        <strong>

                            📍
                            <?php
                                echo htmlspecialchars(
                                    $request['origem']
                                );
                            ?>

                        </strong>

                    </div>


                    <div class="arrow">
                        →
                    </div>


                    <div class="location">

                        <small>
                            DESTINO
                        </small>

                        <strong>

                            📍
                            <?php
                                echo htmlspecialchars(
                                    $request['destino']
                                );
                            ?>

                        </strong>

                    </div>


                </div>


                <!-- INFORMAÇÕES -->

                <div class="request-info">

                    <span>
                        📅
                        <?php
                            echo htmlspecialchars(
                                $request['data']
                            );
                        ?>
                    </span>


                    <span>
                        🕐
                        <?php
                            echo htmlspecialchars(
                                $request['horario']
                            );
                        ?>
                    </span>


                    <span>
                        👥
                        <?php
                            echo htmlspecialchars(
                                $request['passageiros']
                            );
                        ?>

                        passageiro(s)
                    </span>

                </div>


                <!-- DESCRIÇÃO -->

                <div class="description">

                    💬

                    <?php
                        echo htmlspecialchars(
                            $request['descricao']
                        );
                    ?>

                </div>


                <!-- BOTÕES -->

                <div class="request-footer">

                    <button
                        class="details-button"
                        onclick="verDetalhes(
                            '<?php
                                echo htmlspecialchars(
                                    $request['nome'],
                                    ENT_QUOTES
                                );
                            ?>'
                        )"
                    >
                        Ver detalhes
                    </button>


                    <button
                        class="offer-button"
                        onclick="oferecerCarona(
                            '<?php
                                echo htmlspecialchars(
                                    $request['nome'],
                                    ENT_QUOTES
                                );
                            ?>'
                        )"
                    >
                        🚗 Oferecer carona
                    </button>

                </div>


            </div>

        <?php endforeach; ?>


        <!-- =================================
             PAGINAÇÃO
        ================================== -->

        <div class="pagination">

            <button class="active">
                1
            </button>

            <button>
                2
            </button>

            <button>
                3
            </button>

            <button>
                →
            </button>

        </div>


    </div>

</div>


<script>


    // ======================================
    // OFERECER CARONA
    // ======================================

    function oferecerCarona(nome) {

        alert(
            "Você escolheu oferecer uma carona para "
            + nome
            + "."
        );

    }


    // ======================================
    // DETALHES
    // ======================================

    function verDetalhes(nome) {

        alert(
            "Visualizando detalhes do pedido de "
            + nome
            + "."
        );

    }


    // ======================================
    // PUBLICAR PEDIDO
    // ======================================

    function abrirModal() {

        alert(
            "Aqui será aberto o formulário para publicar uma nova solicitação."
        );

    }

</script>


</body>

</html>