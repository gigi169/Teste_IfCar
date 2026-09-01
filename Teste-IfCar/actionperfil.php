<?php

session_start();

require_once "conexaoBD.php";


/* =========================================
   VERIFICA SE O USUÁRIO ESTÁ LOGADO
========================================= */

if (!isset($_SESSION['Idusuario'])) {

    header("Location: formlogin.php");
    exit;

}


/* =========================================
   VERIFICA SE O FORMULÁRIO FOI ENVIADO
========================================= */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    header("Location: perfil.php");
    exit;

}


/* =========================================
   RECEBE OS DADOS
========================================= */

$Idusuario = $_SESSION['Idusuario'];

$Nomeusuario = trim($_POST['Nomeusuario'] ?? '');

$Emailusuario = trim($_POST['Emailusuario'] ?? '');

$Telefoneusuario = trim($_POST['Telefoneusuario'] ?? '');


/* =========================================
   VALIDAÇÃO
========================================= */

if (
    empty($Nomeusuario) ||
    empty($Emailusuario) ||
    empty($Telefoneusuario) ||
)
{

    header("Location: perfil.php?erro=camposObrigatorios");
    exit;

}


/* =========================================
   VALIDA EMAIL
========================================= */

if (!filter_var($Emailusuario, FILTER_VALIDATE_EMAIL)) {

    header("Location: perfil.php?erro=emailInvalido");
    exit;

}


/* =========================================
   ATUALIZA O USUÁRIO
========================================= */

$sql = "UPDATE usuario
        SET
            Nomeusuario = ?,
            Emailusuario = ?,
            Telefoneusuario = ?,
        WHERE Idusuario = ?";


$stmt = mysqli_prepare($conn, $sql);


if (!$stmt) {

    header("Location: perfil.php?erro=erroBanco");
    exit;

}


mysqli_stmt_bind_param(
    $stmt,
    "ssssi",
    $Nomeusuario,
    $Emailusuario,
    $Telefoneusuario,
    $Idusuario
);


if (mysqli_stmt_execute($stmt)) {

    /* =====================================
       ATUALIZA A SESSÃO
    ===================================== */

    $_SESSION['Nomeusuario'] = $Nomeusuario;

    $_SESSION['Emailusuario'] = $Emailusuario;

    $_SESSION['Telefoneusuario'] = $Telefoneusuario;

    mysqli_stmt_close($stmt);


    header("Location: perfil.php?sucesso=alterado");
    exit;

} else {

    mysqli_stmt_close($stmt);

    header("Location: perfil.php?erro=erroBanco");
    exit;

}

?>