<?php
session_start();

include "header.php";

$requests = [

    [
        'nome' => 'Maria Silva',
        'origem' => 'IFPR',
        'destino' => 'Cem Casas',
        'data' => '28 Ago',
        'horario' => '07:30',
        'passageiros' => 1,
        'descricao' => 'Estou procurando uma carona para voltar para casa após a aula.'
    ],

    [
        'nome' => 'João Santos',
        'origem' => 'Bandeirantes',
        'destino' => 'IFPR',
        'data' => '29 Ago',
        'horario' => '06:50',
        'passageiros' => 2,
        'descricao' => 'Preciso de uma carona para chegar ao IFPR pela manhã.'
    ],

    [
        'nome' => 'Ana Oliveira',
        'origem' => 'IFPR',
        'destino' => 'Santa Rita',
        'data' => '30 Ago',
        'horario' => '08:00',
        'passageiros' => 1,
        'descricao' => 'Procuro uma carona para retornar para Santa Rita.'
    ]

];


$rides = [

    [
        'nome' => 'Carlos Mendes',
        'origem' => 'Bandeirantes',
        'destino' => 'IFPR',
        'data' => '28 Ago',
        'horario' => '06:40',
        'vagas' => 3,
        'descricao' => 'Tenho vagas disponíveis e passo pelo centro de Bandeirantes.'
    ],

    [
        'nome' => 'Lucas Ferreira',
        'origem' => 'Santa Rita',
        'destino' => 'IFPR',
        'data' => '29 Ago',
        'horario' => '07:00',
        'vagas' => 2,
        'descricao' => 'Vou para o IFPR pela manhã e tenho duas vagas disponíveis.'
    ],

    [
        'nome' => 'Pedro Almeida',
        'origem' => 'Cem Casas',
        'destino' => 'IFPR',
        'data' => '30 Ago',
        'horario' => '06:50',
        'vagas' => 1,
        'descricao' => 'Saio cedo e posso levar mais um estudante.'
    ]

];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Caronas - Rydify</title>

    <link rel="stylesheet" href="assets/style.css">
     <style>

        /* FORÇA AS DUAS SEÇÕES A FICAREM LADO A LADO */

        .main-card .duas-colunas {
            display: grid !important;
            grid-template-columns: 1fr 1fr !important;
            gap: 90px !important;
            width: 100% !important;
        }

        .main-card .duas-colunas > .coluna {
            display: block !important;
            width: 100% !important;
            max-width: none !important;
            min-width: 0 !important;
            flex: none !important;
        }

        .main-card .request-table {
            display: table !important;
            width: 100% !important;
            max-width: 100% !important;
        }

        .container {
            width: 100%;
            max-width: none;
            margin: 30px 0;
            padding: 0 25px;
        }

        .main-card {
            width: 100%;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="main-card">

        <!-- ==========================================
             DUAS COLUNAS
        =========================================== -->

        <div class="duas-colunas">


            <!-- ==========================================
                 COLUNA 1
                 ALUNOS PRECISANDO DE CARONA
            =========================================== -->

            <div class="coluna">

                <div class="title-area">

                    <div>

                        <h1>
                            Alunos Precisando de Carona
                        </h1>

                        <p>
                            Encontre estudantes que estão procurando uma carona.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="publish-button"
                        onclick="abrirModal()"
                    >
                        + Publicar pedido
                    </button>

                </div>


                <?php foreach ($requests as $request): ?>

                    <table class="request-table">

                        <!-- CABEÇALHO -->

                        <tr>

                            <td colspan="3">

                                <div class="request-header">

                                    <div class="user">

                                        <div class="avatar">

                                            <?= strtoupper(
                                                substr($request['nome'], 0, 1)
                                            ) ?>

                                        </div>

                                        <div class="user-name">

                                            <?= htmlspecialchars(
                                                $request['nome']
                                            ) ?>

                                        </div>

                                    </div>

                                    <span class="student">
                                        ESTUDANTE
                                    </span>

                                </div>

                            </td>

                        </tr>


                        <!-- ORIGEM / DESTINO -->

                        <tr>

                            <td class="location">

                                <small>
                                    ORIGEM
                                </small>

                                <strong>

                                    📍

                                    <?= htmlspecialchars(
                                        $request['origem']
                                    ) ?>

                                </strong>

                            </td>


                            <td class="arrow">
                                →
                            </td>


                            <td class="location">

                                <small>
                                    DESTINO
                                </small>

                                <strong>

                                    📍

                                    <?= htmlspecialchars(
                                        $request['destino']
                                    ) ?>

                                </strong>

                            </td>

                        </tr>


                        <!-- INFORMAÇÕES -->

                        <tr>

                            <td colspan="3">

                                <div class="request-info">

                                    <span>

                                        📅

                                        <?= htmlspecialchars(
                                            $request['data']
                                        ) ?>

                                    </span>


                                    <span>

                                        🕐

                                        <?= htmlspecialchars(
                                            $request['horario']
                                        ) ?>

                                    </span>


                                    <span>

                                        👥

                                        <?= htmlspecialchars(
                                            $request['passageiros']
                                        ) ?>

                                        passageiro(s)

                                    </span>

                                </div>

                            </td>

                        </tr>


                        <!-- DESCRIÇÃO -->

                        <tr>

                            <td colspan="3">

                                <div class="description">

                                    💬

                                    <?= htmlspecialchars(
                                        $request['descricao']
                                    ) ?>

                                </div>

                            </td>

                        </tr>


                        <!-- BOTÕES -->

                        <tr>

                            <td colspan="3">

                                <div class="request-footer">

                                    <button
                                        type="button"
                                        class="details-button"
                                        onclick="verDetalhes(
                                            <?= htmlspecialchars(
                                                json_encode($request['nome']),
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>
                                        )"
                                    >
                                        Ver detalhes
                                    </button>


                                    <button
                                        type="button"
                                        class="offer-button"
                                        onclick="oferecerCarona(
                                            <?= htmlspecialchars(
                                                json_encode($request['nome']),
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>
                                        )"
                                    >
                                        🚗 Oferecer carona
                                    </button>

                                </div>

                            </td>

                        </tr>

                    </table>

                <?php endforeach; ?>

            </div>


            <!-- ==========================================
                 COLUNA 2
                 CARONAS OFERECIDAS
            =========================================== -->

            <div class="coluna">

                <div class="title-area">

                    <div>

                        <h1>
                            Caronas Oferecidas
                        </h1>

                        <p>
                            Encontre estudantes que estão oferecendo carona.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="publish-button"
                        onclick="publicarCarona()"
                    >
                        + Oferecer carona
                    </button>

                </div>


                <?php foreach ($rides as $ride): ?>

                    <table class="request-table">

                        <!-- MOTORISTA -->

                        <tr>

                            <td colspan="3">

                                <div class="request-header">

                                    <div class="user">

                                        <div class="avatar">

                                            <?= strtoupper(
                                                substr($ride['nome'], 0, 1)
                                            ) ?>

                                        </div>


                                        <div class="user-name">

                                            <?= htmlspecialchars(
                                                $ride['nome']
                                            ) ?>

                                        </div>

                                    </div>


                                    <span class="student">
                                        MOTORISTA
                                    </span>

                                </div>

                            </td>

                        </tr>


                        <!-- ORIGEM / DESTINO -->

                        <tr>

                            <td class="location">

                                <small>
                                    ORIGEM
                                </small>

                                <strong>

                                    📍

                                    <?= htmlspecialchars(
                                        $ride['origem']
                                    ) ?>

                                </strong>

                            </td>


                            <td class="arrow">
                                →
                            </td>


                            <td class="location">

                                <small>
                                    DESTINO
                                </small>

                                <strong>

                                    📍

                                    <?= htmlspecialchars(
                                        $ride['destino']
                                    ) ?>

                                </strong>

                            </td>

                        </tr>


                        <!-- INFORMAÇÕES -->

                        <tr>

                            <td colspan="3">

                                <div class="request-info">

                                    <span>

                                        📅

                                        <?= htmlspecialchars(
                                            $ride['data']
                                        ) ?>

                                    </span>


                                    <span>

                                        🕐

                                        <?= htmlspecialchars(
                                            $ride['horario']
                                        ) ?>

                                    </span>


                                    <span>

                                        🚗

                                        <?= htmlspecialchars(
                                            $ride['vagas']
                                        ) ?>

                                        vaga(s)

                                    </span>

                                </div>

                            </td>

                        </tr>


                        <!-- DESCRIÇÃO -->

                        <tr>

                            <td colspan="3">

                                <div class="description">

                                    💬

                                    <?= htmlspecialchars(
                                        $ride['descricao']
                                    ) ?>

                                </div>

                            </td>

                        </tr>


                        <!-- BOTÕES -->

                        <tr>

                            <td colspan="3">

                                <div class="request-footer">

                                    <button
                                        type="button"
                                        class="details-button"
                                        onclick="verDetalhes(
                                            <?= htmlspecialchars(
                                                json_encode($ride['nome']),
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>
                                        )"
                                    >
                                        Ver detalhes
                                    </button>


                                    <button
                                        type="button"
                                        class="offer-button"
                                        onclick="solicitarCarona(
                                            <?= htmlspecialchars(
                                                json_encode($ride['nome']),
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>
                                        )"
                                    >
                                        🙋 Solicitar carona
                                    </button>

                                </div>

                            </td>

                        </tr>

                    </table>

                <?php endforeach; ?>

            </div>


        </div>

    </div>

</div>

</body>

</html>