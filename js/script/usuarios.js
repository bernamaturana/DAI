function validarLogin(formulario) {
    var ok = true;
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("usernameError").className = "";
    document.getElementById("passwordError").className = "";

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

function validarRegistro(formulario) {
    var ok = true;
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("usernameError").className = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("passwordError").className = "";
    document.getElementById("realnameError").innerHTML = "";
    document.getElementById("realnameError").className = "";
    document.getElementById("repetirError").innerHTML = "";
    document.getElementById("repetirError").className = "";

    if (formulario.elements["repetir"].value == "") {
        document.getElementById("repetirError").className = "alert alert-danger";
        document.getElementById("repetirError").innerHTML = "<strong>Debe repetir su contraseña</strong>";
        ok = false;
    }

    if (formulario.elements["username"].value == "") {
        document.getElementById("usernameError").className = "alert alert-danger";
        document.getElementById("usernameError").innerHTML = "<strong>Debe ingresar un usuario</strong>";
        ok = false;
    }

    if (formulario.elements["realname"].value == "") {
        document.getElementById("realnameError").className = "alert alert-danger";
        document.getElementById("realnameError").innerHTML = "<strong>Debe ingresar su nombre.</strong>";
        ok = false;
    }

    if (formulario.elements["password"].value == "") {
        document.getElementById("passwordError").className = "alert alert-danger";
        document.getElementById("passwordError").innerHTML = "<strong>Debe ingresar una contraseña.</strong>";
        ok = false;
    }

    if (ok) {
        if (formulario.elements["repetir"].value != formulario.elements["password"].value) {
            document.getElementById("repetirError").className = "alert alert-danger";
            document.getElementById("repetirError").innerHTML = "<strong>Las contraseñas no coinciden</strong>";
            ok = false;
        }
    }

    return ok;
}