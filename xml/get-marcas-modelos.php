<?php
$marca="";

$salida = "<select name=\"\" id=\"dlModelos\"> <option value=\"\">-</option>";

if (isset($_GET["marca"])) {
  $marca=$_GET["marca"];

  if ($marca != "") {
    
  $xmlDoc = new DOMDocument();
  $xmlDoc->load("marcas-modelos.xml");//cargo los datos de todo el contenido del xml

  $x=$xmlDoc->getElementsByTagName('NombreMarca'); //recibo todos los nodos que tienen ese tag

  for ($i=0; $i<$x->length; $i++) {
    //Process only element nodes
    if ($x->item($i)->nodeType==1) {
      if ($x->item($i)->childNodes->item(0)->nodeValue == $marca) {
        $y=($x->item($i)->parentNode);
      }
    }
  }

  $modelo=($y->childNodes);
  
  for ($i=0;$i<$modelo->length;$i++) { 
    //Process only element nodes
    if ($modelo->item($i)->nodeType==1 && $modelo->item($i)->nodeName == "ModeloAuto") {
      $salida = $salida."<option name=\"".$modelo->item($i)->nodeValue."\">".$modelo->item($i)->nodeValue."</option>";
    }

  }
  }
}







$salida = $salida."</select>";

echo($salida);
?>