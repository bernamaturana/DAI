<?php
    include_once "Clases/UsuarioService.php";

    if (isset($_POST["username"])) {
        UsuarioService::agregar($_POST["username"],$_POST["password"],$_POST["name"]." ".$_POST["apellido"],1);
        header("location: login.php");
    } else {
        $mensaje="Ha ocurrido un error. Intente nuevamente.";
        header("location: registro.php?mensaje=$mensaje");
    }

?>