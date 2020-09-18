<?php
  $id = $_GET['id'];
  $chat = $_GET['chat_estado'];
  $estudio = $_GET['estudio_estado'];

  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE chat SET estado=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($chat,$id));

  $sql_editar2 = 'UPDATE estudios_estado SET estado=? WHERE id=?';
  $sentencia_editar2 = $pdo->prepare($sql_editar2);
  $sentencia_editar2->execute(array($estudio,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar2 = null;
  header('location:complementos.php');
 ?>