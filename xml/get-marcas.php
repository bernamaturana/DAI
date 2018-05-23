<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("marcas-modelos.xml");

$x=$xmlDoc->getElementsByTagName('NombreMarca');

$salida = "<select name=\"\" id=\"dMarcas\" onchange=\"mostrarModelosPorMarca(this.value)\"><option value=\"\">-</option>";

for ($i=0; $i<$x->length; $i++) {
  if ($x->item($i)->nodeType==1) {
    $salida = $salida."<option name=\"".$x->item($i)->nodeValue."\">".$x->item($i)->nodeValue."</option>";
  }
}

$salida = $salida."</select>";

echo($salida);
?>