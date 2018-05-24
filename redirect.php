<?php
    include_once "Clases/Usuario.php";
    session_start();
    
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
        if ($usuario->getTipoUsuario() == 0) {
            header("location: indexAdministrador.php");
        } else {
            header("location: indexVentas.php");
        }
    }else{
        echo("not set");
    }

?>