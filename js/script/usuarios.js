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

    if (!user) {
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
    document.getElementById("nameError").innerHTML = "";
    document.getElementById("nameError").className = "";
    document.getElementById("repetirError").innerHTML = "";
    document.getElementById("repetirError").className = "";
    document.getElementById("apellidoError").innerHTML = "";
    document.getElementById("apellidoError").className = "";

    if (formulario.elements["repetir"].value == "") {
        document.getElementById("repetirError").className = "alert alert-danger";
        document.getElementById("repetirError").innerHTML = "<strong>Debe repetir su contraseña.</strong>";
        ok = false;
    }

    if (formulario.elements["username"].value == "") {
        document.getElementById("usernameError").className = "alert alert-danger";
        document.getElementById("usernameError").innerHTML = "<strong>Debe ingresar un usuario.</strong>";
        ok = false;
    }

    if (formulario.elements["name"].value == "") {
        document.getElementById("nameError").className = "alert alert-danger";
        document.getElementById("nameError").innerHTML = "<strong>Debe ingresar su nombre.</strong>";
        ok = false;
    }

    if (formulario.elements["password"].value == "") {
        document.getElementById("passwordError").className = "alert alert-danger";
        document.getElementById("passwordError").innerHTML = "<strong>Debe ingresar una contraseña.</strong>";
        ok = false;
    }

    if (formulario.elements["apellido"].value == "") {
        document.getElementById("apellidoError").className = "alert alert-danger";
        document.getElementById("apellidoError").innerHTML = "<strong>Debe ingresar su apellido.</strong>";
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

function validarInsert(mensaje){
    document.getElementById("insertErr").className = "";
    document.getElementById("usrError").innerHTML = "";

    if (mensaje != "") {
        document.getElementById("insertErr").className = "alert alert-danger";
        document.getElementById("usrError").innerHTML = "<strong>"+mensaje+"</strong>";
    }
}