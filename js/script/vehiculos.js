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

    xmlhttp.open("GET", "../xml/get-marcas-modelos.php?marca=" + marca, true);
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

    xmlhttp.open("GET", "../xml/get-marcas.php?nada=nada", true);
    xmlhttp.send();
}