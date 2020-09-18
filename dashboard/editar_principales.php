<?php 
//PROMOCIONES PRINCIPALES
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$descripcion = $_GET['descripcion'];

//INCLUIMOS EL ARCHIVO DE LA CONEXION A LA BD
include_once 'conexion.php';

//EDITAR
$sql_editar = 'UPDATE principal_promociones SET nombre=?, precio=?, descripcion=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre,$precio,$descripcion,$id));

//CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
$pdo = null;
$sentencia_editar = null;
header('location:principal_promociones.php');
?>