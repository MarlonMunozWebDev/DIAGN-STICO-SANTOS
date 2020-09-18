<?php

//CONECTAMOS CON LA BD Y SI EL ARCHIVO ESTA EN OTRA CARPETA UTILIZAMOS ../carpetaotra
include_once '../dashboard/conexion.php';

//PONEMOS CUAL VA SER LA CONTRASEÑA MANUALMENTE - EJEMPLO
//echo password_hash("carloskey", PASSWORD_DEFAULT)."\n";

//RECIBIMOS LOS DATOS POR POST Y LO GUARDAMOS EN UNA VARIABLE PARA MANDARLO A LA BD
$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena_coincidencia = $_POST['contrasena_coincidencia'];

//RECORRIDO PARA CHECAR SI EXITE EL NOMBRE DE USUARIO
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();
//var_dump($resultado);

//SI RESULTADO ES VERDADERO MANDA ERROR NOMBRE OCUPADO
if($resultado) {
  echo 'Ya Existe este Usuario';

  //NO SIGUE CON EL CODIGO
  die();
}


$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

//echo '<pre>';
//var_dump($usuario_nuevo);
//var_dump($contrasena); // SALDRA YA CIFRADA
//var_dump($contrasena_coincidencia);
//echo '<pre>';

//VERIFICAMOS SI LA CONTRASEÑAS COINCIDEN
if (password_verify($contrasena_coincidencia, $contrasena)) {
  echo 'La contraseña es valida <br>';
  echo '<a href="registro.php" class="text-white md-0 h3">Cerrar Sesion</a>';

  //AGREGAR - SENTENCIA PREPARADA
  //GUARDAMOS EN UNA VARIABLE LA SENTENCIA SQL CON SEGURIDAD - SIN (:producto, :descripcion)
  $sql_agregar = 'INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);


  //SI ESTO RETORNA TRUE MOSTRAR EL MENSAJE DE AGREGADO
  if ( $sentencia_agregar->execute(array($usuario_nuevo,$contrasena)) ) {
    echo '<br> Agregado';
    header('Location: iniciar_sesion.php');
  } else {
    echo 'Error <br>';
  }




  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $sentencia_agregar = null;
  $pdo = null;
  //AL TERMINAR LO ANTERIOR MANDAME A ESTE ARCHIVO
  //header('location:index.php');

} else {
  echo 'Las contraseñas no coinciden';
}
