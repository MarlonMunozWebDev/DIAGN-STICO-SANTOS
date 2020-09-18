<?php
  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $precio = $_GET['precio'];
  $descripcion = $_GET['descripcion'];
  $vigencia = $_GET['vigencia'];
  $fecha_ini = $_GET['fecha_ini'];
  $fecha_fin = $_GET['fecha_fin'];

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE promociones SET nombre=?, precio=?, descripcion=?, vigencia=?, fecha_ini=?, fecha_fin=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nombre,$precio,$descripcion,$vigencia,$fecha_ini,$fecha_fin,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar = null;
  header('location:promociones.php');
 ?>