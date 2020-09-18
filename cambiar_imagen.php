<?php
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $color = $_GET['color'];

  include_once 'dashboard/conexion.php';

  $sql_editar = 'UPDATE imagenes SET nombre=?, color=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nombre,$color,$id));
  $pdo = null;
  $sentencia_editar = null;
  header('location:index.php');
 ?>