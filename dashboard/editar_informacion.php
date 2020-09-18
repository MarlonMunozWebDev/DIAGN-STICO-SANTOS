<?php
  //CAMBIANDO DATOS MANUALMENTE
  //echo 'editar.php?id=1&producto=nuevo&descripcion=Soy nuevo';
  //echo '<br>';

  //GUARDAR EN VARIABLES LOS DATOS CAPTADOS POR EL METODO GET DE LA URL
  $id = $_GET['id'];
  $nosotros_titulo = $_GET['nosotros_titulo'];
  $nosotros_descripcion = $_GET['nosotros_descripcion'];
  $promociones_anuncio = $_GET['promociones_anuncio'];
  $estudios_descripcion = $_GET['estudios_descripcion'];
  $caracteristica1_titulo = $_GET['caracteristica1_titulo'];
  $caracteristica1_descripcion = $_GET['caracteristica1_descripcion'];
  $caracteristica2_titulo = $_GET['caracteristica2_titulo'];
  $caracteristica2_descripcion = $_GET['caracteristica2_descripcion'];
  $caracteristica3_titulo = $_GET['caracteristica3_titulo'];
  $caracteristica3_descripcion = $_GET['caracteristica3_descripcion'];

  //echo $id;
  //echo '<br>';
  //echo $producto;
  //echo '<br>';
  //echo $descripcion;

  //INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
  include_once 'conexion.php';

  //EDITAR
  $sql_editar = 'UPDATE principal_informacion SET nosotros_titulo=?, nosotros_descripcion=?, promociones_anuncio=?, estudios_descripcion=?,caracteristica1_titulo=?, caracteristica1_descripcion=?, caracteristica2_titulo=?, caracteristica2_descripcion=?, caracteristica3_titulo=?, caracteristica3_descripcion=? WHERE id=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($nosotros_titulo,$nosotros_descripcion,$promociones_anuncio,$estudios_descripcion,$caracteristica1_titulo,$caracteristica1_descripcion,$caracteristica2_titulo,$caracteristica2_descripcion,$caracteristica3_titulo,$caracteristica3_descripcion,$id));

  //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
  $pdo = null;
  $sentencia_editar = null;
  header('location:principal_informacion.php');
 ?>