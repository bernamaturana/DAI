<?php
    include_once '../Clases/UsuarioService.php';
    $usuario=null;
    $id=0;
    $mensaje="| ";

    if(isset($_GET["id"])){
        $mensaje=$mensaje." isset get";
        $id = $_GET["id"];
        $usuario = UsuarioService::usuarioPorId($id);
    }

    if ($usuario == null) {
        $mensaje=$mensaje." usuario null";
        $usuario = new Usuario("null","null","null","null","null");
    }

    if (isset($_POST["username"])) {
        $mensaje=$mensaje." isset post";
        UsuarioService::actualizar($_POST["id"], $_POST["username"], $_POST["password"], $_POST["nombre"],$_POST["tipoUsuario"]);
        header("location: pruebas2.php");
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

    <span><?=$mensaje?></span>
    
    <form action="editar.php" method="post">
        <input id="id" name="id" type="hidden" value="<?=$id?>">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" placeholder="<?=$usuario->getRealName();?>">
        <br>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="<?=$usuario->getUserName();?>">
        <br>
        <label for="password">Password</label>
        <input id="password" name="password" type="text" placeholder="<?=$usuario->getPassword();?>">
        <br>
        <label for="tipoUsuario">Tipo</label>
        <input id="tipoUsuario" name="tipoUsuario" type="text" placeholder="<?=$usuario->getTipoUsuario();?>">
        <br>
        <button>Guardar</button>
    </form>

</body>
</html>