<?php
session_start();
require '../../startApp.php';
$titulo = "Mi String Box";

if(isset($_SESSION["usuario"])) {
    
    $id_usuario = $_SESSION["usuario"]["id"];
    $template_seccion = "../../templates/mistringbox.php";
} else {
    $error = "Debes iniciar sesion!";
    $template_seccion = "../../templates/login.php";
}

include "../../templates/main.php";

include "../../endApp.php";
?>