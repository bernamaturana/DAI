<?php
    include_once "Clases/VehiculoService.php";

    if (isset($_GET["patente"])) {
        $patente = $_GET["patente"];
        VehiculoService::eliminar($patente);
        header("location: vehiculosListar.php?succes=true");
    } else {
        header("location: vehiculosListar.php?succes=false");
    }
    
?>