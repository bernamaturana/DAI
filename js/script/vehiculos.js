function load(){
    document.onload = mostrarMarcas(), mostrarModelosPorMarca("");
}

function mostrarModelosPorMarca(marca) {
    // if (marca == "") {
    //     document.getElementById("dModelos").innerHTML = "";
    //     return;
    // }

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("dModelos").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "http://localhost/dai/xml/get-marcas-modelos.php?marca=" + marca, true);
    xmlhttp.send();
}

function mostrarMarcas(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("dMarcas").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "http://localhost/dai/xml/get-marcas.php?nada=nada", true);
    xmlhttp.send();
}

function validarRegistroVehiculo(){
    ok = true;

    document.getElementById("patenteError").innerHTML = "";
    document.getElementById("patenteError").className = "";
    document.getElementById("marcasError").innerHTML = "";
    document.getElementById("marcasError").className = "";
    document.getElementById("modelosError").innerHTML = "";
    document.getElementById("modelosError").className = "";
    document.getElementById("colorError").innerHTML = "";
    document.getElementById("colorError").className = "";
    document.getElementById("estadoError").innerHTML = "";
    document.getElementById("estadoError").className = "";

    if (document.getElementById("patente").value == "") {
        ok = false;
        document.getElementById("patenteError").innerHTML = "<strong>Debe ingresar una patente.</strong>";
        document.getElementById("patenteError").className = "alert alert-danger";
    }

    if (document.getElementById("sMarcas").value == "") {
        ok = false;
        document.getElementById("marcasError").innerHTML = "<strong>Debe seleccionar una marca.</strong>";
        document.getElementById("marcasError").className = "alert alert-danger";
    }

    if (document.getElementById("sModelos").value == "") {
        ok = false;
        document.getElementById("modelosError").innerHTML = "<strong>Debe seleccionar un modelo.</strong>";
        document.getElementById("modelosError").className = "alert alert-danger";
    }

    if (document.getElementById("color").value == "") {
        ok = false;
        document.getElementById("colorError").innerHTML = "<strong>Debe ingresar un color.</strong>";
        document.getElementById("colorError").className = "alert alert-danger";
    }

    return ok;
}