<?php
    include_once 'Arriendo.php';
    include_once 'Conexion.php';

    class ArriendoService
    {
        public static function agregar($idArriendo, $patente, $rutCliente, $nombreCliente, $apellidoCliente, $fechaArriendo, $fechaDevolucion, $fechaRealDevolucion){
            $sql = "INSERT INTO arriendo (idArriendo, patente, rutCliente, nombreCliente, apellidoCliente, fechaArriendo, fechaDevolucion, fechaRealDevolucion) VALUES $idArriendo, '$patente', '$rutCliente', '$nombreCliente', '$apellidoCliente', '$fechaArriendo', '$fechaDevolucion', '$fechaRealDevolucion';";
            return $result = Conexion::query($sql);
        }

        public static function vehiculoPatenteRut($buscado){
            $resultado = array();

            $sql = "SELECT * FROM arriendo WHERE patente = '$buscado' OR rutCliente = '$buscado';";
            $result = Conexion::query($sql);

            if (mysqli_num_rows($result) > 0) {
                while ($fila = mysqli_fetch_array($result)) {
                    array_push($resultado, new Arriendo($fila["idArriendo"], $fila["patente"], $fila["rutCliente"], $fila["nombreCliente"], $fila["apellidoCliente"], $fila["fechaArriendo"], $fila["fechaDevolucion"], $fila["fechaRealDevolucion"]));
                }
            }

            return $resultado;
        }
    }
    
?>