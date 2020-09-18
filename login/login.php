<?php
//PARA UTILIZAR LA SESSION
session_start();

include_once '../dashboard/conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];

$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

if(!$resultado) {
  echo '<h1> No existe el usuario <h1>';
  die();
}

if( password_verify($contrasena_login, $resultado['contrasena']) ) {
  $_SESSION['usuario'] = $usuario_login;
  header('Location: ../dashboard/generales.php');

} else {
  echo '<h1> Contraseña Incorrecta </h1>';
  die();
}
 ?>
