<?php
    include_once "Clases/Usuario.php";
    session_start();
    if (isset($_SESSION["usuario"])) {
        $user=$_SESSION["usuario"];
        if ($user->getTipoUsuario()!=0) {
            header("location: indexVentas.php");
        }
    }else{
        header("location: login.php?usr=false");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="js/script/vehiculos.js"></script>
    <title>Registro Vehiculo</title>
</head>
<body onload="load()">
    <div class="container ">
        <form action="registroVehiculo2.php" onsubmit="return validarRegistroVehiculo()" method="post">
            <div class="form-group">
                <label for="patente">Patente</label>
                <input type="text" class="form-control" id="patente" name="patente">
                <div id="patenteError"></div>
            </div>
            <div class="form-group">
                <label for="dMarcas">Marca</label>
                <div id="dMarcas"></div>
                <div id="marcasError"></div>
            </div>
            <div class="form-group">
                <label for="sModelos">Modelo</label>
                <div id="dModelos"></div>
                <div id="modelosError"></div>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color">
                <div id="colorError"></div>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="Disponible" readonly>
                <div id="estadoError"></div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>