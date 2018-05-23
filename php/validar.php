<?php
    include_once "../Clases/UsuarioService.php";
    // session_start();
    echo("------------------------------------------------------------------------------ ");
    $username = "admin";
    $password = "admin";
    echo("------------------------------------------------------------------------------ ");
    $usuario = UsuarioService::verificar($username,$password);
    echo("------------------------------------------------------------------------------ ");
    if($usuario == null){
        echo("if null");
        header("location: http://localhost/Encargo1-DAI/login.php?usr=false");
    } else {
        session_start();
        $_SESSION["usuario"] = $usuario;
    }
    
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $usuario = UsuarioService::verificar($username, $password);
        echo("isset post");

        if($usuario == null){
            echo("if null");
            header("location: http://localhost/Encargo1-DAI/login.php?usr=false");
        } else {
            session_start();
            $_SESSION["usuario"] = $usuario;
        }
    }

    if(isset($_SESSION["usuario"])){
        echo("isset session");
        header("location: http://localhost/Encargo1-DAI/index2.php");
    } else {
        echo("isset sesssion");
        header("location: http://localhost/Encargo1-DAI/login.php?usr=false");
    }
?>