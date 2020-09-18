<?php
$palabra = "unión";
$palabras = array("teléfono", "camión", "genéro");
$carros = TildesHtml($palabras);

function TildesHtml($palabras) 
{ 
    return str_replace(array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"),array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Ntilde;"), print_r($palabras));    
}
?>