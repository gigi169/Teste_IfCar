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
        <a href="style.ccs" ></a>
        <title>Rydify - Caronas estudantis</title>

        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                background: #f7f9fa;
                color: #172033;
            }

            /* ================= HEADER ================= */

            header {
                height: 64px;
                background: white;
                border-bottom: 1px solid #ddd;

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
            }

            nav {
                display: flex;
                gap: 30px;
            }

            nav a {
                text-decoration: none;
                color: #4c5360;
                font-size: 14px;
                padding: 20px 5px;
            }

            nav a:hover {
                color: #079b87;
            }

            .active {
                color: #079b87;
                border-bottom: 2px solid #079b87;
            }

            /* ================= CONTAINER ================= */

            .container {
                width: 80%;
                max-width: 1100px;
                margin: 28px auto;
            }

            /* ================= AVISO ================= */

            .verification {
                background: #eef6ff;
                border: 1px solid #c7def5;
                border-radius: 7px;

                padding: 15px 20px;
                margin-bottom: 22px;

                display: flex;
                gap: 20px;
            }

            .verification-icon {
                font-size: 18px;
            }

            .verification strong {
                color: #164d9c;
                display: block;
                margin-bottom: 6px;
            }

            .verification p {
                color: #28518c;
                font-size: 14px;
                margin-bottom: 6px;
            }

            .verification a {
                color: #28518c;
                font-weight: bold;
                font-size: 14px;
            }

            /* ================= CARD PRINCIPAL ================= */

            .search-box {
                background: white;
                border: 1px solid #dedede;
                border-radius: 8px;

                padding: 20px 40px 40px;

                box-shadow: 0 1px 3px rgba(0,0,0,.04);
            }

            /* ================= ABAS ================= */

            .tabs {
                display: flex;
                background: #f1f1f3;
                border-radius: 12px;
                padding: 3px;
                margin-bottom: 25px;
            }

            .tab {
                width: 50%;
                border: none;
                padding: 9px;
                border-radius: 10px;

                background: transparent;
                font-size: 14px;
                cursor: pointer;
            }

            .tab.active-tab {
                background: #0c9b8b;
                color: white;
            }

            /* ================= TITULOS ================= */

            .section {
                margin-top: 25px;
            }

            .section-title {
                font-size: 18px;
                margin-bottom: 14px;
            }


           
            /* ================= INPUTS ================= */

            .locations {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 14px;
            }

            label {
                display: block;
                font-size: 13px;
                font-weight: bold;
                margin-bottom: 7px;
            }

            input {
                width: 100%;
                height: 42px;

                border: 1px solid #d8dce0;
                border-radius: 7px;

                padding: 0 14px;
                font-size: 14px;

                outline: none;
            }

            input:focus {
                border-color: #0c9b8b;
            }

            /* ================= DATAS ================= */

            .date-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 12px;
            }

            .date-buttons {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                gap: 9px;
            }

            .date-button {
                background: white;
                border: 1px solid #ddd;

                border-radius: 7px;

                padding: 10px 5px;

                cursor: pointer;
                text-align: center;
            }

            .date-button:hover {
                border-color: #0c9b8b;
            }

            .date-button.selected {
                background: #0c9b8b;
                color: white;
                border-color: #0c9b8b;
            }

            .date-button small {
                display: block;
                margin-bottom: 6px;
            }

            .date-button strong {
                font-size: 13px;
            }

            /* ================= DATA PERSONALIZADA ================= */

            .custom-date {
                margin-top: 18px;

                background: #f8fafb;
                border: 1px solid #e0e3e5;

                border-radius: 9px;

                padding: 15px;

                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 14px;
            }

            /* ================= FILTROS ================= */

            .filters {
                margin-top: 30px;
            }

            .filter-button {
                background: white;

                border: 1px solid #d5d9dc;
                border-radius: 8px;

                padding: 10px 15px;

                font-weight: bold;
                cursor: pointer;
            }

            /* ================= BOTÃO BUSCAR ================= */

            .search-button {
                width: 100%;
                height: 55px;

                margin-top: 40px;

                border: none;
                border-radius: 7px;

                background: #079b87;
                color: white;

                font-size: 17px;
                font-weight: bold;

                cursor: pointer;

                transition: .2s;
            }

            .search-button:hover {
                background: #078675;
            }

            /* ================= RESULTADOS ================= */

            .view-options {
                margin: 25px 0;

                display: flex;
                gap: 5px;
            }

            .view-options button {
                padding: 8px 12px;

                border: 1px solid #ddd;
                background: white;

                cursor: pointer;
            }

            .view-options button:first-child {
                background: #172033;
                color: white;
                border-radius: 7px;
            }

            .no-rides {
                min-height: 230px;

                background: white;

                border: 3px solid #079b87;
                border-radius: 9px;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                text-align: center;
            }

            .car-icon {
                font-size: 45px;
                margin-bottom: 15px;
            }

            .no-rides h2 {
                margin-bottom: 10px;
            }

            .no-rides p {
                color: #606772;
                margin-bottom: 20px;
            }

            .offer-button {
                background: #079b87;
                color: white;

                border: none;
                border-radius: 7px;

                padding: 11px 25px;

                font-weight: bold;
                cursor: pointer;
            }

            /* ================= RESPONSIVO ================= */

            @media (max-width: 800px) {

                header {
                    padding: 0 20px;
                }

                nav {
                    gap: 10px;
                }

                .container {
                    width: 94%;
                }

                .search-box {
                    padding: 15px;
                }

                .university-options {
                    grid-template-columns: 1fr;
                }

                .locations {
                    grid-template-columns: 1fr;
                }

                .date-buttons {
                    grid-template-columns: repeat(4, 1fr);
                }

                .custom-date {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 500px) {

                header {
                    height: auto;
                    padding: 15px;
                }

                nav a {
                    font-size: 12px;
                }

                .date-buttons {
                    grid-template-columns: repeat(2, 1fr);
                }

                .verification {
                    font-size: 12px;
                }
            }

        </style>
    </head>

    <body>
        <div class="container">

            <div class="search-box">

                <div class="section">

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
                            <input type="date" id="Caronadate" name="Caronadate">
                        </div>

                        <div>
                            <label for="caronatime">Hora</label>
                            <input type="time" id="Caronatime" name="Caronatime">
                        </div>

                        <div>
                          <label for="quantity"> Numero de caronas disponiveis(De 1 a 5):</label>
                          <input type="number" id="Numerocarona" name="Numerocarona" min="1" max="5">
                   
                        </div>

                    </div>

                    <button class="search-button" onclick="buscarCaronas()">

                        🔍 Find Rides

                    </button>

                </div>
            </div>
        </div>
    </body>
</html>
