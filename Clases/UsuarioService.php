<?php
include_once "Conexion.php";
include_once 'Usuario.php';

class UsuarioService
{
  public static function agregar($username, $password, $realname, $tipoUsuario){
    $password=sha1($password);
    $sql = "INSERT INTO usuario (username, password, realname, tipoUsuario) VALUES ('$username','$password','$realname',$tipoUsuario)";
    return Conexion::query($sql);
  }

  public static function verificarUsuario($username){
    $sql = "SELECT * FROM usuario WHERE username = '$username'";
    $result = Conexion::query($sql);
    
    if (mysqli_num_rows($result) > 0) {
      $fila = mysqli_fetch_array($result);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public static function verificar($username, $password) {
    $password=sha1($password);

    $sql = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
    $result = Conexion::query($sql);
    
    if (mysqli_num_rows($result) > 0) {
      $fila = mysqli_fetch_array($result);
      return new Usuario($fila["idusuario"],$fila["password"],$fila["realname"],$fila["username"],$fila["tipoUsuario"]);
    } else {
      return null;
    }
  }

  public static function usuarioPorId($id){ 
    $sql = "SELECT * FROM usuario WHERE idusuario = $id";
    $result = Conexion::query($sql);

    if (mysqli_num_rows($result) > 0) {
      $fila = mysqli_fetch_array($result);
      return new Usuario($fila["idusuario"],$fila["password"],$fila["realname"],$fila["username"],$fila["tipoUsuario"]);
    } else {
      return null;
    }
  }

  public static function listar(){
    $usuarios = array();
    $usuario = null;

    $sql = "SELECT idusuario, username, realname, tipoUsuario FROM usuario";
    $result = Conexion::query($sql);

    if (mysqli_num_rows($result) > 0) {
      while ($fila = mysqli_fetch_array($result)) {
        $usuario = new Usuario($fila["idusuario"],"",$fila["realname"],$fila["username"],$fila["tipoUsuario"]);
        array_push($usuarios,$usuario);
      }
    }

    return $usuarios;
  }

  public static function eliminar($idusuario){
    $sql = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
    return Conexion::query($sql);
  }

  public static function actualizar($idusuario, $username, $password, $realname, $tipoUsuario){
    $password=sha1($password);
    $sql = "UPDATE usuario SET username = '$username', password = '$password',  realname = '$realname', tipoUsuario = $tipoUsuario WHERE idusuario = $idusuario;";
    return Conexion::query($sql);
  }
}
?>
