<?php
  //CAMBIANDO DATOS MANUALMENTE
  //echo 'editar.php?id=1&producto=nuevo&descripcion=Soy nuevo';
  //echo '<br>';

  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $id = $_GET['id'];
  $nombre_laboratorio = $_GET['nombre_laboratorio'];
  $nombre_corto = $_GET['nombre_corto'];
  $direccion = $_GET['direccion'];
  $telefono = $_GET['telefono'];
  $correo_electronico = $_GET['correo_electronico'];
  $aviso_privacidad = $_GET['aviso_privacidad'];
  $politica_calidad = $_GET['politica_calidad'];
  $mision = $_GET['mision'];
  $vision = $_GET['vision'];

  //echo $id;
  //echo '<br>';
  //echo $producto;
  //echo '<br>';
  //echo $descripcion;

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE generales SET nombre_laboratorio=? ,nombre_corto=?, direccion=?, telefono=?, correo_electronico=?, aviso_privacidad=?, politica_calidad=?, mision=?, vision=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nombre_laboratorio, $nombre_corto,$direccion,$telefono,$correo_electronico,$aviso_privacidad,$politica_calidad,$mision,$vision,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar = null;
  header('location:generales.php');
 ?>