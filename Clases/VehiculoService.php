<?php
    include_once 'Conexion.php';
    include_once 'Vehiculo.php';

    class VehiculoService
    {
        public static function agregar($patente,$marca,$modelo,$color,$estado){
            $sql = "INSERT INTO vehiculo (patente, marca, modelo, color, estado) VALUES ('$patente', '$marca', '$modelo', '$color', $estado);";
            return Conexion::query($sql);
        }
        
        public static function vehiculoPorPatente($patente){
            $sql = "SELECT * FROM vehiculo WHERE patente = '$patente';";
            $result = Conexion::query($sql);

            if (mysqli_num_rows($result) < 0) {
                $fila = mysqli_fetch_array($result);
                return new Vehiculo($fila["patente"],$fila["marca"],$fila["modelo"],$fila["color"],$fila["estado"]);
            } else {
                return null;
            }
        }

        public static function listar(){
            $vehiculos = array();

            $sql = "SELECT * FROM vehiculo;";
            $result = Conexion::query($sql);

            if (mysqli_num_rows($result) > 0) {
                while ($fila = mysqli_fetch_array($result)) {
                    $vehiculo = new Vehiculo($fila["patente"],$fila["marca"],$fila["modelo"],$fila["color"],$fila["estado"]);
                    array_push($vehiculos, $vehiculo);
                }
            }

            return $vehiculos;
        }

        public static function eliminar($patente){
            $sql = "DELETE FROM vehiculo WHERE patente = '$patente'";
            return Conexion::query($sql);
        }

        public static function actualizar($patente, $marca, $modelo, $color, $estado){
            $sql = "UPDATE vehiculo SET marca = '$marca', modelo = '$modelo', color = '$color', estado = $estado WHERE patente = '$patente';";
            return Conexion::query($sql);
        }

        public static function actualizarEstado($patente, $estado){
            $sql = "UPDATE vehiculo SET estado = $estado WHERE patente = '$patente';";
            Conexion::query($sql);
        }

        public static function vehiculosDisponibles(){
            $vehiculos = array();

            $sql = "SELECT * FROM vehiculo WHERE estado = 0;";
            $result = Conexion::query($sql);

            if (mysqli_num_rows($result) > 0) {
                while ($fila = mysqli_fetch_array($result)) {
                    array_push($vehiculos,new Vehiculo($fila["patente"],$fila["marca"],$fila["modelo"],$fila["color"],$fila["estado"]));
                }
            }

            return $vehiculos;
        }
    }
?>