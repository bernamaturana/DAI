<?php
    include_once "Clases/Usuario.php";
    include_once "Clases/ArriendoService.php";
    include_once "Clases/Arriendo.php";
    session_start();

    if (isset($_SESSION["usuario"])) {
        $user=$_SESSION["usuario"];
        if (isset($_POST["vehiculo"])) {
            echo($_POST["rut"]);
            if (ArriendoService::usuarioTieneArriendo($_POST["rut"])) {
                header("location: registroArriendo.php?arriendo=true");
            } else {
                ArriendoService::agregar($_POST["vehiculo"],$_POST["rut"],$_POST["nombre"],$_POST["apellido"],$_POST["arriendo"],$_POST["devolucion"],null);
                echo("OK");                
            }
        }
    } else {
        header("location: login.php?usr=false");
    }


?>