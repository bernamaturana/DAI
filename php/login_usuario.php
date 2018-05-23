<?php
    

    error_reporting(0);
	
	include_once '/Clases/UsuarioService.php';

	$username=$_POST["txtUsername"];
	$passwod=$_POST["txtPassword"];
	$mensaje="";
	$user= new UsuarioService();
	if(isset($username)){
		$usuario=$user->verificar($username,$passwod);
		if ($usuario!=null) {
		session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["typeAdmin"]=$usuario->getType();
        $_SESSION["nombre"]= $usuario->getRealname();
        if($_SESSION["typeAdmin"]!=2){
        	$mensaje="la contraseña o usuario no corresponden";
        }else{
        	 header("location: arriendo.php");
        }
       
		}else{
			$mensaje="la contraseña o usuario no corresponden";
		}
			
	}
?>