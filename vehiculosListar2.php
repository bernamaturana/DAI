<?php
    include_once "Clases/VehiculoService.php";
    include_once "Clases/Vehiculo.php";
    $vehiculos = array();
    $vehiculos = VehiculoService::listar();

    // echo("------------- ".count($vehiculos)." --------------");

    $con = 1;
    while ($veh = array_shift($vehiculos)) {
    // foreach ($vehiculos as $veh) {
    // echo($veh->getPatente());
?>
<tr>
    <td><?=$con;?></td>
    <td><?=$veh->getPatente();?></td>
    <td><?=$veh->getMarca();?></td>
    <td><?=$veh->getModelo();?></td>
    <td><?=$veh->getColor();?></td>
    <td>
        <?php if ($veh->getEstado()==0) {
            echo("Disponible");
        } else {
            echo("No disponible");
        }
        ?>
    </td>
    <td>
        <a href="eliminarVehiculo.php?patente=<?=$veh->getPatente();?>">
            <span class="glyphicon glyphicon-remove" title="Eliminar"></span>
        </a>
    </td>
</tr>
<?php
    $con = $con +1;
    }
?>