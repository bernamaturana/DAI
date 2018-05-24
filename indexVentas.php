<?php
    include_once "Clases/Usuario.php";
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("location: login.php?usr=false");
    } 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <title>Lion Vehiculos Index</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Lion Rent a Car</h1>
            </div>

            <header class="row justify-content-between center align-items-center">
                <div class="columna-nav-3 ">
                    <h4><img src="img/logo-lion2.png" alt="Logo" style="width:80px;" ></h4>
                </div>
                <div class="nav-item ">
                    <h4> Inicio</h4>
                </div>
                <div class="nav-item ">
                    <h4>Arrendar Auto</h4>
                </div>

                <div class="nav-item ">
                    <h4>Cobrar Arriendo</h4>
                </div>

                <div class="nav-item ">
                    <h4>Mi Perfil</h4>
                </div>

                <div class="nav-item ">
                    <h4>Cerrar Sesion</h4>
                </div>
            </header>

            <section class="container">
                <main>
                    <a href="consigna.pdf" target="_blank">CONSIGNA</a>
                    <a href="registroArriendo.php">registro</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quaerat nemo voluptas nisi recusandae hic tempora voluptates tempore sequi pariatur enim, est distinctio quod vel, quidem odit mollitia consectetur. Voluptas.</p>
                </main>
            </section>

            <?php include_once "template/footer.php";?>
        </div>
        

        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
    </body>
</html>