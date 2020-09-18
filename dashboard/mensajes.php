<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_mensajes = 'SELECT * FROM mensajes';
$sent_mensajes = $pdo->prepare($sql_mensajes);
$sent_mensajes->execute();
$resultado_mensajes = $sent_mensajes->fetchAll();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    
    <title>MENSAJES</title>
  </head>
  <body style="font-family: 'Poppins',sans-serif">
  <div class="container-fluid tabla">


    <div class="row">
    <div class="dashboard col-md-2 bg-primary">
     <a href="generales.php">Generales</a>
     <a href="principal_informacion.php">Principal Información</a>
     <a href="principal_promociones.php">Promociones Principales</a>
     <a href="promociones.php">Promociones</a>
     <a href="sucursales.php">Sucursales</a>
     <a href="mensajes.php">Mensajes</a>
     <a href="estudios.php">Estudios</a>
     <a href="complementos.php">Complementos</a>
     <a href="../index.php">Catálogo de imágenes</a>
     <a href="../login/cerrar.php" class="text-white md-0">Cerrar Sesion</a>
    </div>

    <div class="col-md-10">
    <h2 class="bg-primary text-white mt-3 p-3 rounded">MENSAJES DE CONTACTO</h2> <br>
    
        <div class="col-12 mt-4">
        <div class="col-12">
        <table class="formulario table bg-light rounded">
            <thead class="text-primary">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Fecha</th>
                <th scope="col">Mensaje</th>
              </tr>
            </thead>
            <tbody>
              <?php  foreach($resultado_mensajes as $datos): ?>
              <tr>
                <td><?php echo $datos['nombre']?></td>
                <td><?php echo $datos['correo']?></td>
                <td><?php echo $datos['telefono']?></td>
                <td><?php echo $datos['fecha']?></td>
                <td><?php echo $datos['mensaje']?></td>
              </tr>
              <?php  endforeach ?>
            </tbody>
          </table>

          <?php
            $pdo = null;
            $sent_mensajes = null;
            ?>
        </div>
        </div>
    </div>
    </div>
  </body>
</html>
