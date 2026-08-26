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

            <!-- ================= VERIFICAÇÃO ================= -->

            <div class="verification">

                <div class="verification-icon">
                    ⚠
                </div>

                <div>
                    <strong>Student Verification:</strong>

                    <p>
                        Verifique seu e-mail estudantes.ifpr para entrar em contato
                        com motoristas e publicar caronas
                    </p>

                    <a href="login.php">
                        Verificar agora →
                    </a>
                </div>

            </div>


            <!-- ================= BUSCA ================= -->

            <div class="search-box">

                <div class="tabs">

                    <button class="tab active-tab">
                        <a hrsef= "pages/oferecer-carona.php"> Oferecer carona </a>
                    </button>

                    <button class="tab ">
                        <a hrsef= "pages/encontrar-carona.php"> Encontrar carona</a>
                        
                    </button>

                </div>

            

                <!-- LOCALIZAÇÃO -->

                <div class="section">

                    <h2 class="section-title">
                        📍 Where are you going?
                    </h2>

                    <div class="locations">

                        <div>

                            <label>From</label>

                            <input
                                type="text"
                                placeholder="⌕ Pickup location (optional)"
                            >

                        </div>

                        <div>

                            <label>To</label>

                            <input
                                type="text"
                                placeholder="⌕ Destination (optional)"
                            >

                        </div>

                    </div>

                </div>


                <!-- DATA -->

                <div class="section">



                    <!-- DATA PERSONALIZADA -->

                    <div class="custom-date">

                        <div>

                            <label>
                                📅 Custom Date
                            </label>

                            <input
                                type="date"
                                value="2026-08-25"
                            >

                        </div>


                        <div>

                            <label>
                                ◷ Departure Time
                            </label>

                            <input
                                type="time"
                                value="07:30"
                            >

                        </div>

                    </div>

                </div>


                <!-- FILTROS -->

                <div class="filters">

                    <button class="filter-button">
                        ⚱ More Filters ▼
                    </button>

                </div>


                <!-- BUSCAR -->

                <button class="search-button" onclick="buscarCaronas()">

                    🔍 Find Rides

                    <small style="display:block;">
                        25 Ago
                    </small>

                </button>

            </div>


            <!-- ================= RESULTADOS ================= -->

            <div class="view-options">

                <button>
                    ☷ List View
                </button>

                <button>
                    🗺 Map View
                </button>

            </div>


            <?php if (empty($caronas)): ?>

                <div class="no-rides">

                    <div class="car-icon">
                        🚙
                    </div>

                    <h2>
                        No Rides Available
                    </h2>

                    <p>
                        Search for rides to get started!
                    </p>

                    <button class="offer-button">
                        🚗 Offer a Ride
                    </button>

                </div>

            <?php else: ?>

                <?php foreach ($caronas as $carona): ?>

                    <div class="ride-card">

                        <?php echo $carona['motorista']; ?>

                    </div>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>


        <script>



            // Selecionar data
            const datas =
                document.querySelectorAll(".date-button");

            datas.forEach(function(data) {

                data.addEventListener("click", function() {

                    datas.forEach(function(item) {
                        item.classList.remove("selected");
                    });

                    this.classList.add("selected");

                });

            });


            // Botão de busca
            function buscarCaronas() {

                alert("Buscando caronas...");

            }

        </script>

    </body>
</html>
