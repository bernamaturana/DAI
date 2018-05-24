function validar() {
    ok = true;

    document.getElementById("patenteError").innerHTML = "";
    document.getElementById("patenteError").className = "";
    document.getElementById("rutError").innerHTML = "";
    document.getElementById("rutError").className = "";
    document.getElementById("nombreError").innerHTML = "";
    document.getElementById("nombreError").className = "";
    document.getElementById("apellidoError").innerHTML = "";
    document.getElementById("apellidoError").className = "";
    document.getElementById("arriendoError").innerHTML = "";
    document.getElementById("arriendoError").className = "";
    document.getElementById("devolucionError").innerHTML = "";
    document.getElementById("devolucionError").className = "";

    if (document.getElementById("vehiculo").value == "") {
        ok = false;
        document.getElementById("patenteError").innerHTML = "<strong>Debe seleccionar un vehiculo.</strong>";
        document.getElementById("patenteError").className = "alert alert-danger";
    }

    if (rutTieneArriendo) {
        ok = false;
        document.getElementById("rutError").innerHTML = "<strong>Rut ya tiene arriendo en curso.</strong>";
        document.getElementById("rutError").className = "alert alert-danger";
    }

    if (document.getElementById("rut").value == "") {
        ok = false;
        document.getElementById("rutError").innerHTML = "<strong>Debe ingresar un rut.</strong>";
        document.getElementById("rutError").className = "alert alert-danger";
    }

    if (document.getElementById("nombre").value == "") {
        ok = false;
        document.getElementById("nombreError").innerHTML = "<strong>Debe ingresar un nombre.</strong>";
        document.getElementById("nombreError").className = "alert alert-danger";
    }

    if (document.getElementById("apellido").value == "") {
        ok = false;
        document.getElementById("apellidoError").innerHTML = "<strong>Debe ingresar un apellido.</strong>";
        document.getElementById("apellidoError").className = "alert alert-danger";
    }

    if (document.getElementById("devolucion").value == "") {
        ok = false;
        document.getElementById("devolucionError").innerHTML = "<strong>Debe seleccion una fecha de devolución.</strong>";
        document.getElementById("devolucionError").className = "alert alert-danger";
    }

    if (ok) {
        mensaje = "";
        var rut = document.getElementById("rut").value.replace('.', '');
        rut = rut.replace('-', '');

        cuerpo = rut.slice(0, -1);
        dv = rut.slice(-1).toUpperCase();

        document.getElementById("rut").value = cuerpo + '-' + dv;

        if (cuerpo.length < 7) {
            mensaje += "Rut demasiado corto.";
            ok = false;
        }

        suma = 0;
        multiplo = 2;

        for (i = 1; i <= cuerpo.length; i++) {
            index = multiplo * rut.charAt(cuerpo.length - i);
            suma += index;
            
            if (multiplo < 7) {
                multiplo = multiplo + 1;
            } else {
                multiplo = 2;
            }
        }

        dvEsperado = 11 - (suma % 11);

        dv = (dv == 'K') ? 10 : dv;
        dv = (dv == 0) ? 11 : dv;

        if (dvEsperado != dv) {
            mensaje += " Rut inválido.";
            ok = false;
        }

        if (ok == false) {
            document.getElementById("rutError").innerHTML = "<strong>"+mensaje+"</strong>";
            document.getElementById("rutError").className = "alert alert-danger";
        }
    }
    alert("ok:"+ok+" mensaje:"+mensaje+" rut"+rut+" cuerpo:"+cuerpo+" dv:"+dv+" dvesperado"+dvEsperado);

    return ok;
}

function validarRutArriendo(rutTieneArriendo){
    document.getElementById("rutArriendoError").innerHTML = "";
    document.getElementById("rutArriendoError").className = "";

    if (rutTieneArriendo) {
        ok = false;
        document.getElementById("rutArriendoError").innerHTML = "<strong>Rut ya tiene arriendo en curso.</strong>";
        document.getElementById("rutArriendoError").className = "alert alert-danger";
    }
}