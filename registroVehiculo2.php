<?php
    include_once "Clases/VehiculoService.php";


    if(isset($_POST["patente"])){
        $patente = $_POST["patente"];
        echo($patente);
        $marca = $_POST["sMarcas"];
        echo($marca);
        $modelo = $_POST["sModelos"];
        echo($modelo);
        $color = $_POST["color"];
        echo($color);
        $estado = $_POST["estado"];
        echo($estado);
        VehiculoService::agregar($_POST["patente"],$_POST["sMarcas"],$_POST["sModelos"],$_POST["color"],0);
        // header("location: vehiculosListar.php");
    }else{
        echo("error");
    }
?>