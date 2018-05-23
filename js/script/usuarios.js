function validarLogin(formulario) {
    var ok = true;
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("usernameError").className = "";
    document.getElementById("usernameError").className = "";

    if (formulario.elements["username"].value == "") {
        document.getElementById("usernameError").className = "alert alert-danger";
        document.getElementById("usernameError").innerHTML = "<strong>Debe ingresar un usuario</strong>";
        ok = false;
    }

    if (formulario.elements["password"].value == "") {
        document.getElementById("passwordError").className = "alert alert-danger";
        document.getElementById("passwordError").innerHTML = "<strong>Debe ingresar una contraseña</strong>";
        ok = false;
    }

    return ok;
}

function validarUser(user) {
    var ok = true;
    document.getElementById("usrError").innerHTML = "";
    document.getElementById("usrError").className = "";
    alert("estamos en la funcion");

    if (!user) {
        alert("entramos en el if");
        document.getElementById("usrError").className = "alert alert-danger";
        document.getElementById("usrError").innerHTML = "<strong>Debe iniciar sesión</strong>";
        ok = false;
    }

    return ok;
}