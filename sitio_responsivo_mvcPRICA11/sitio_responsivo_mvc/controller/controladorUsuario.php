<?php

session_start();
if (!isset($_SESSION['id_documento']) || $_SESSION['id_documento']->role !== 'user') {
    header('Location: ../vista/principal.php');
    exit;
}

$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'seccion1';
include("../vista/USUARIO/plantillaUser.php");

?>