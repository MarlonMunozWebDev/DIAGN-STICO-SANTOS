<?php
  //CAMBIANDO DATOS MANUALMENTE
  //echo 'editar.php?id=1&producto=nuevo&descripcion=Soy nuevo';
  //echo '<br>';

  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $datos_generales = $_GET['datos_generales'];

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE sucursales SET nombre=?, datos_generales=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nombre,$datos_generales,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar = null;
  header('location:sucursales.php');
 ?>