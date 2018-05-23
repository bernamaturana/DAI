<?php
    include_once '../Clases/UsuarioService.php';

    $usuarios = array();
    $mensaje="inicie sesión";

    if (isset($_POST["username"])) {
        $password=$_POST["password"];
        $username=$_POST["username"];

        $user = UsuarioService::verificar($username,$password);

        if ($user==null) {
            $mensaje="nombre de usuario o contraseña incorrecta";
        }else{
            session_start();
            $_SESSION["usuario"] = $user;
            $mensaje="Hola ".$user->getRealName();

            $usuarios = UsuarioService::listar();
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

    <form action="pruebas2.php" method="post">
        username <input id="username" name="username" type="text"><br>
        password <input id="password" name="password" type="text"><br>
        <button >Iniciar sesión</button><br>
    </form>
    <span><?=$mensaje;?></span>
    <hr>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Tipo de usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $con = 1;
                while ($usuario = array_shift($usuarios)) {
            ?>
            <tr>
                <td><?=$con;?></td>
                <td><?=$usuario->getIdUsuario();?></td>
                <td><?=$usuario->getRealName();?></td>
                <td><?=$usuario->getUserName();?></td>
                <td><?=$usuario->getTipoUsuario();?></td>
                <td>
                    <?php if ($usuario->getIdUsuario() != 1) {?>
                    <a href="eliminar.php?id=<?=$usuario->getIdUsuario();?>">Eliminar</a><br>
                    <a href="editar.php?id=<?=$usuario->getIdUsuario();?>">Editar</a>
                    <?php } ?>
                </td>
            </tr>
            <?php
                $con = $con +1;
                }
            ?>
        </tbody>
    </table>


</body>
</html>