<?php
    include_once '../Clases/UsuarioService.php';

    $mensaje="";
    if (isset($_POST["username"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $password=$_POST["password"];
        $username=$_POST["username"];
        $tipoUsuario=$_POST["tipoUsuario"];
        $realname=$nombre." ".$apellido;

        if (UsuarioService::agregar($username,$password,$realname,$tipoUsuario)) {
            $mensaje="usuario registrado";
        }else{
            $mensaje="usuario no registrado!";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a href="pruebas.php">1</a><br>
    <a href="pruebas2.php">2</a><br>

    <form action="pruebas.php" method="post">
        nombre <input id="nombre" name="nombre" type="text"><br>
        apellido <input id="apellido" name="apellido" type="text"><br>
        username <input id="username" name="username" type="text"><br>
        password <input id="password" name="password" type="text"><br>
        tipoUsuario <input id="tipoUsuario" name="tipoUsuario" type="text"><br>
        <button >ingresar</button><br>
    </form>
    <span><?=$mensaje;?></span>
    <hr>


</body>
</html>