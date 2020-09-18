<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_promociones = 'SELECT * FROM promociones';
$sent_promociones = $pdo->prepare($sql_promociones);
$sent_promociones->execute();
$resultado_promociones = $sent_promociones->fetchAll();

//AGREGAR
if($_POST) {
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $vigencia = $_POST['vigencia'];
  $fecha_ini = $_POST['fecha_ini'];
  $fecha_fin = $_POST['fecha_fin'];

  $agregar_promocion = 'INSERT INTO promociones (nombre,precio,descripcion,vigencia,fecha_ini,fecha_fin) VALUES (?,?,?,?,?,?)';
  $sentencia_promocion = $pdo->prepare($agregar_promocion);
  $sentencia_promocion->execute(array($nombre,$precio,$descripcion,$vigencia,$fecha_ini,$fecha_fin));
  $sentencia_promocion = null;
  $pdo = null;

  header('location:promociones.php');
}

//SOLO MODIFCA LOS VALORES CON EL ID OBTENIDO
if($_GET) {
  $id = $_GET['id'];
  $unico_promocion = 'SELECT * FROM promociones WHERE id=?';
  $sentunico_promocion = $pdo->prepare($unico_promocion);
  $sentunico_promocion->execute(array($id));
  $resunico_promocion = $sentunico_promocion->fetch();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    
    <title>PROMOCIONES</title>
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
    <h2 class="bg-primary text-white mt-3 p-3 rounded">PROMOCIONES</h2> <br>

        <div class="col-12">
        <div class="col-12">
             <!--CONDICIONAL CUANDO HALLA UN METODO CONTRARIO A GET MUESTRAME ESTE APARTADO-->
                <?php if(!$_GET): ?>
                <h4>AGREGAR</h4>
                <form method="POST" class="row">
                    <input type="text" class="form-control col-9" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control col ml-2" name="precio" placeholder="Precio">
                    <textarea class="form-control mt-2" rows="2" name="descripcion" placeholder="Descripción"></textarea>
                    <h6 class="text-dark font-weight-bold m-3">DESACTIVADO</h6><input type="range" class="form-control col-1 mt-2" name="vigencia" min="0" max="1"><h6 class="text-dark font-weight-bold m-3">ACTIVADO</h6>
                    <h6 class="text-primary font-weight-bold m-3">FECHA INICIO</h6>
                    <input type="date" class="form-control col-3 mt-2" name="fecha_ini" placeholder="Fecha Inicio">
                    <h6 class="text-primary font-weight-bold m-3">FECHA FIN</h6>
                    <input type="date" class="form-control col-3 mt-2" name="fecha_fin" placeholder="Fecha Fin">
                    <button class="btn btn-primary mt-3 col-1">Aceptar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <h4>EDITAR</h4>
                <!--TENDRA EL METODO GET Y LA ACCION SERA EL ARCHIVO EDITAR.PHP-->
                <form method="GET" action="editar_promociones.php" class="row">
                <!--INPUT ID OCULTO-->
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_promocion['id'] ?>">
                
                <h6 class="text-primary font-weight-bold m-3">NOMBRE</h6>
                <input type="text" class="form-control col-9" name="nombre"
                value="<?php echo $resunico_promocion['nombre'] ?>">
                <h6 class="text-primary font-weight-bold m-3">PRECIO</h6>
                <input type="text" class="form-control col ml-2" name="precio"
                value="<?php echo $resunico_promocion['precio'] ?>">
                <h6 class="text-primary font-weight-bold m-3">DESCRIPCION</h6>
                <textarea class="form-control mt-2" rows="2" name="descripcion"><?php echo $resunico_promocion['descripcion'] ?></textarea>
                <h6 class="text-primary font-weight-bold m-3">ESTADO</h6>
                <input type="range" class="form-control col-2 mt-2" name="vigencia" min="0" max="1" value="<?php echo $resunico_promocion['vigencia'] ?>">
                <h6 class="text-primary font-weight-bold m-3">FECHA INICIO</h6>
                <input type="date" class="form-control col-3 mt-2" name="fecha_ini"
                value="<?php echo $resunico_promocion['fecha_ini'] ?>">
                <h6 class="text-primary font-weight-bold m-3">FECHA FIN</h6>
                <input type="date" class="form-control col-3 mt-2" name="fecha_fin"
                value="<?php echo $resunico_promocion['fecha_fin'] ?>">
                <button class="btn btn-primary mt-3 col-2">Guardar</button>
                 
            <?php endif ?>
        </div>
        </div>

        <div class="col-12 mt-4">
        <div class="col-12">
        <table class="formulario table bg-light rounded">
            <thead class="text-primary">
              <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Fin</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php  foreach($resultado_promociones as $datos): ?>
              <tr>
                <th scope="row"></th>
                <td><?php echo $datos['nombre']?></td>
                <td><?php echo $datos['precio']?></td>
                <td><?php echo $datos['descripcion']?></td>
                <td><?php if ($datos['vigencia']==0) {echo "Desactivado";}
                if ($datos['vigencia']==1) {echo "Activado";}?></td>
                <td><?php echo $datos['fecha_ini']?></td>
                <td><?php echo $datos['fecha_fin']?></td>
                <td>
                  <a href="promociones.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"></a>
                  <a href="eliminar_promociones.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/delete.png" alt="eliminar" style="height:1.5rem; border-radius: 4px"></a>
                </td>
              </tr>
              <?php  endforeach ?>
            </tbody>
          </table>

          <?php
            $pdo = null;
            $sent_promociones = null;
            ?>
        </div>
        </div>
    </div>
    </div>
  </body>
</html>
