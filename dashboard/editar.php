<?php
  //CAMBIANDO DATOS MANUALMENTE
  //echo 'editar.php?id=1&producto=nuevo&descripcion=Soy nuevo';
  //echo '<br>';

  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $precio = $_GET['precio'];
  $descripcion = $_GET['descripcion'];

  //echo $id;
  //echo '<br>';
  //echo $producto;
  //echo '<br>';
  //echo $descripcion;

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE promociones SET nombre=?, precio=?, descripcion=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nombre,$precio,$descripcion,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar = null;
  header('location:index.php');



  //GENERALES
  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $nombre_corto = $_GET['nombre_corto'];
  $direccion = $_GET['direccion'];
  $telefono = $_GET['telefono'];
  $correo_electronico = $_GET['correo_electronico'];
  $mision = $_GET['mision'];
  $vision = $_GET['vision'];
  $aviso_privacidad = $_GET['aviso_privacidad'];

  //echo $id;
  //echo '<br>';
  //echo $producto;
  //echo '<br>';
  //echo $descripcion;

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $editar_generales = 'UPDATE generales SET nombre_corto=?, direccion=?, telefono=?, correo_electronico=?, mision=?, vision=?, aviso_privacidad=? WHERE id=?';
  $editar_general = $pdo->prepare($sql_editar);
  $editar_general->execute(array($nombre,$direccion,$telefono,$correo_electronico,$mision,$vision,$aviso_privacidad,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $editar_general = null;
  header('location:index.php');
 ?>
