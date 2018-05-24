<?php
    include_once "Clases/VehiculoService.php";
    include_once "Clases/Usuario.php";
    session_start();

    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
        if ($usuario->getTipoUsuario() != 0) {
            header("location: indexVentas.php");
        }
    } else {
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Listado de vehiculos</title>
</head>
<body>
    <div class="container">
        <div>
            <?php
                if (isset($_GET["succes"])) {
                    $suc = $_GET["succes"];
                    if ($suc) {
            ?>
                        <div class="alert alert-success">
                            <strong>Vehiculo eliminado correctamente.</strong>
                        </div>
            <?php
                    }else{
            ?>            
                        <div class="alert alert-danger">
                            <strong>Vehiculo no fue eliminado.</strong>
                        </div>
            <?php
                    }
                }
            ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "vehiculosListar2.php"; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>