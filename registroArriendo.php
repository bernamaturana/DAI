<?php
    include_once "Clases/Usuario.php";
    include_once "Clases/VehiculoService.php";
    include_once "Clases/Vehiculo.php";
    session_start();

    if (isset($_SESSION["usuario"])) {
        $user=$_SESSION["usuario"];
    }else{
        header("location: login.php?usr=false");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="js/script/arriendo.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Registrar Arriendo</title>
</head>
<body onload="validarRutArriendo(<?php if (isset($_GET["arriendo"])) { echo($_GET["arriendo"]); } else { echo("false"); } ?>)">
    <div class="container ">
        <div id="rutArriendoError"></div>
        <form action="registroArriendo2.php" method="post" onsubmit="return validar(<?php if (isset($_GET["arriendo"])) { echo($_GET["arriendo"]); } else { echo("false"); } ?>)">
            <div class="form-group">
                <label for="dVehiculo">Vehiculos disponibles</label>
                <div id="dVehiculo">
                    <select class="form-control" name="vehiculo" id="vehiculo">
                        <option value="">-</option>
                        <?php
                            $disponibles = array();
                            $disponibles = VehiculoService::vehiculosDisponibles();
                            while ($veh = array_shift($disponibles)) {
                        ?>
                        <option value="<?=$veh->getPatente();?>"><?=$veh->getMarca()." ".$veh->getModelo()." - ".$veh->getColor();?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div id="patenteError"></div>
            </div>
            <div class="form-group">
                <label for="rut">Rut cliente</label>
                <input type="text" class="form-control" id="rut" name="rut">
                <div id="rutError"></div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre cliente</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                <div id="nombreError"></div>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido cliente</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
                <div id="apellidoError"></div>
            </div>
            <div class="form-group">
                <label for="arriendo">Fecha de arriendo</label>
                <div class='input-group date' id='arriendo'>
                    <input type='date' class="form-control" id="arriendo" name="arriendo" value="<?=date("Y-m-d");?>" placeholder="<?=date("Y-m-d");?>" readonly/>
                </div>
                <div id="arriendoError"></div>
            </div>
            <div class="form-group">
                <label for="devolucion">Fecha de devolucion</label>
                <?php
                    $date = date("Y-m-d");
                    $date = date('Y-m-d', strtotime($date . ' +1 day'))
                ?>
                <input type="date" class="form-control" id="devolucion" name="devolucion" value="" min="<?=$date;?>">
                <div id="devolucionError"></div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
    
</body>
</html>