<?php

session_start();

include "conexaoBD.php";


/* ==========================================
   VERIFICAR SE O USUÁRIO ESTÁ LOGADO
========================================== */

if (
    !isset($_SESSION['logado']) ||
    $_SESSION['logado'] !== true
) {

    header("Location: formlogin.php");

    exit;

}


/* ==========================================
   VERIFICAR SE RECEBEU O ID DA CARONA
========================================== */

if (!isset($_GET['id'])) {

    header("Location: caronas.php");

    exit;

}


/* ==========================================
   PEGAR O ID DA CARONA
========================================== */

$IDcarona = intval($_GET['id']);


/* ==========================================
   PEGAR O ID DO USUÁRIO LOGADO
========================================== */

$IDusuario = $_SESSION['Idusuario'];


/* ==========================================
   VERIFICAR SE A CARONA EXISTE
========================================== */

$sqlCarona = "
    SELECT *
    FROM carona
    WHERE ID = ?
    LIMIT 1
";


$stmtCarona = mysqli_prepare(
    $conn,
    $sqlCarona
);


mysqli_stmt_bind_param(
    $stmtCarona,
    "i",
    $IDcarona
);


mysqli_stmt_execute($stmtCarona);


$resultadoCarona = mysqli_stmt_get_result(
    $stmtCarona
);


if (mysqli_num_rows($resultadoCarona) == 0) {

    echo "
        <script>
            alert('Carona não encontrada!');
            window.location.href = 'caronas.php';
        </script>
    ";

    exit;

}


$carona = mysqli_fetch_assoc(
    $resultadoCarona
);


/* ==========================================
   VERIFICAR SE O USUÁRIO É O MOTORISTA

   Impede alguém de solicitar
   a própria carona
========================================== */

if ($carona['IDusuario'] == $IDusuario) {

    echo "
        <script>
            alert('Você não pode solicitar sua própria carona!');
            window.location.href = 'caronas.php';
        </script>
    ";

    exit;

}


/* ==========================================
   VERIFICAR SE JÁ EXISTE UMA SOLICITAÇÃO
========================================== */

$sqlVerificar = "
    SELECT ID
    FROM solicitacoes

    WHERE IDcarona = ?
    AND IDusuario = ?

    LIMIT 1
";


$stmtVerificar = mysqli_prepare(
    $conn,
    $sqlVerificar
);


mysqli_stmt_bind_param(
    $stmtVerificar,
    "ii",
    $IDcarona,
    $IDusuario
);


mysqli_stmt_execute($stmtVerificar);


$resultadoVerificar = mysqli_stmt_get_result(
    $stmtVerificar
);


/* ==========================================
   SE JÁ SOLICITOU
========================================== */

if (mysqli_num_rows($resultadoVerificar) > 0) {

    echo "
        <script>
            alert('Você já solicitou esta carona!');
            window.location.href = 'caronas.php';
        </script>
    ";

    exit;

}


/* ==========================================
   SALVAR A SOLICITAÇÃO
========================================== */

$sqlInserir = "
    INSERT INTO solicitacoes
    (
        IDcarona,
        IDusuario,
        Status
    )

    VALUES
    (
        ?,
        ?,
        'pendente'
    )
";


$stmtInserir = mysqli_prepare(
    $conn,
    $sqlInserir
);


mysqli_stmt_bind_param(
    $stmtInserir,
    "ii",
    $IDcarona,
    $IDusuario
);


if (mysqli_stmt_execute($stmtInserir)) {


    echo "
        <script>
            alert('Solicitação enviada com sucesso!');
            window.location.href = 'caronas.php';
        </script>
    ";


} else {


    echo "
        <script>
            alert('Erro ao enviar solicitação!');
            window.location.href = 'caronas.php';
        </script>
    ";


}

?>