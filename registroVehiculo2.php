<?php
    include_once "Clases/VehiculoService.php";
    include_once "Clases/Usuario.php";
    session_start();

    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
        if ($usuario->getTipoUsuario() == 0) {
            if(isset($_POST["patente"])){
                VehiculoService::agregar($_POST["patente"],$_POST["sMarcas"],$_POST["sModelos"],$_POST["color"],0);
                header("location: vehiculosListar.php");
            }
        } else {
            header("location: indexVentas.php");
        }
    } else {
        header("location: login.php?usr=false");
    }
?>