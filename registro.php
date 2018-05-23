<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenido a Lion Rent a Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="js/script/usuarios.js"></script>
</head>
<body>
    <div class="container">

        <div class="row">
            <h1>Lion Rent a Car</h1>
        </div>

        <?php include_once "template/header.php"; ?>

        <form action="login.php" onsubmit="return validarRegistro(this)">
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
            <div class="form-group">
                <label for="repetir">Repetir</label>
                <input type="password" class="form-control" id="repetir" name="repetir">
                <div id="repetirError"></div>
            </div>
            <div class="form-group">
                <label for="realname">Nombre</label>
                <input type="text" class="form-control" id="realname" name="realname">
                <div id="realnameError"></div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>

        <?php include_once "template/footer.php" ?>
        
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>