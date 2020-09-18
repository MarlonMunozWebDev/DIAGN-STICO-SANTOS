<?php

include('conexion.php');


function TildesHtml($contactData) 
{ 
    return str_replace(array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"),
                                     array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;",
												"&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Ntilde;"), $contactData);  
}
/*$sql_eliminar = 'DELETE FROM estudios';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute();*/

//PROPIEDADES DEL ARCHIVO
$fileContacts = $_FILES['fileContacts']; 
//UTILIZAMOS LA RUTA TEMPORAL DEL ARCHIVO Y EXTRAEMOS LO QUE TIENE EL ARCHIVO
$fileContacts = file_get_contents($fileContacts['tmp_name']); 
//TRASNFORMAMOS EL CONTENIDO A EN UN ARRAY, SERANDOLOS POR EL SALTO DE LINEA
$fileContacts = explode("\n", $fileContacts);

//QUITAMOS LA ULTIMA POSICION QUE ES VACIA
$fileContacts = array_filter($fileContacts); 

// preparar contactos (convertirlos en array)
foreach ($fileContacts as $contact) 
{
	//ARRAY DE ARRAYS, SEPARANDO LOS DATOS POR LA ,
	$contactList[] = explode(",", $contact);
}

$pdo->query('DELETE FROM estudios');
// insertar contactos
foreach ($contactList as $contactData) 
{
	$pdo->query("INSERT INTO estudios 
						(nombre,
						 dias_de_proceso,
						 precio,
						 condiciones_pre_analiticas,
						 descuento)
						 VALUES

						 ('{$contactData[0]}',
						  '{$contactData[1]}', 
						  '{$contactData[2]}',
						  '{$contactData[3]}',
						  {$contactData[4]}
						   )

						 "); 
}
?>