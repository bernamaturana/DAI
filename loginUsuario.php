<?php
    include_once "Clases/UsuarioService.php";
    include_once "Clases/Usuario.php";

    if (isset($_POST["username"])) {
        $password=$_POST["password"];
        $username=$_POST["username"];

        $user = UsuarioService::verificar($username,$password);

        if ($user==null) {
            echo("user null");
            header("location: login.php?usr=false");
        } else {
            session_start();
            $_SESSION["usuario"] = $user;
            echo($user->getRealName());
            $usuario = $_SESSION["usuario"];
            echo($usuario->getRealName());
            header("location: redirect.php");
        }
    } else {
        echo("else 1");
        header("location: login.php?usr=false");
    }
?>