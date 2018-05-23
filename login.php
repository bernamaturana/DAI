<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="js/script/usuarios.js"></script>
        <title>Login</title>
    </head>
    <body onload="validarUser(<?=$usr?>)">
        <div class="container">

            <div class="row">
                <h1>Lion Rent a Car</h1>
            </div>

            <?php include_once "template/header.php" ?>

            <div id="usrError"></div>

            <form action="index2.php" onsubmit="return validarLogin(this)">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="username" class="form-control" id="username" name="username">
                    <div id="usernameError"></div>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div id="passwordError"></div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Recuérdame
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Loguear</button>
            </form>

            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            
            <?php include_once "template/footer.php" ?>
        </div>
    </body>
</html>