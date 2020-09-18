<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_sucursales = 'SELECT * FROM sucursales';
$sent_sucursales = $pdo->prepare($sql_sucursales);
$sent_sucursales->execute();
$resultado_sucursales = $sent_sucursales->fetchAll();

//AGREGAR
if($_POST) {
  $nombre = $_POST['nombre'];
  $datos_generales = $_POST['datos_generales'];
  $agregar_sucursal = 'INSERT INTO sucursales (nombre,datos_generales) VALUES (?,?)';
  $sentencia_sucursal = $pdo->prepare($agregar_sucursal);
  $sentencia_sucursal->execute(array($nombre,$datos_generales));
  $sentencia_sucursal = null;
  $pdo = null;
  header('location:sucursales.php');
}

//SOLO MODIFCA LOS VALORES CON EL ID OBTENIDO
if($_GET) {
  $id = $_GET['id'];
  $unico_sucursal = 'SELECT * FROM sucursales WHERE id=?';
  $sentunico_sucursal = $pdo->prepare($unico_sucursal);
  $sentunico_sucursal->execute(array($id));
  $resunico_sucursal = $sentunico_sucursal->fetch();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <style>
      .btn-ayuda {
        float: right;
      }

      .ayuda {
          bottom: 890px;
          left: 15px;
          right: 1%;
          display: none;
	        overflow: hidden;
	        z-index: 999; 
          width: 1375px;
          height: 550px;
          border-radius: 1rem;
          color: #fff;
          padding-top:2rem;
        }
    </style>
    
    <title>SUCURSALES</title>
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
    <h2 class="bg-primary text-white p-3 mt-3 rounded">SUCURSALES</h2> <br>

        <div class="col-12">
        <div class="col-12">
             <!--CONDICIONAL CUANDO HALLA UN METODO CONTRARIO A GET MUESTRAME ESTE APARTADO-->
                <?php if(!$_GET): ?>
                <h4>AGREGAR</h4>
                <form method="POST">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    <textarea class="form-control mt-2" rows="3" name="datos_generales" placeholder="Datos Generales"></textarea>
                    <button class="btn btn-primary mt-3">Aceptar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <button class="btn btn-primary btn-ayuda">Ayuda</button>
                <h4>EDITAR</h4>
                <form method="GET" action="editar_sucursales.php">
                <!--INPUT ID OCULTO-->
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_sucursal['id'] ?>">
                
                <h6 class="text-primary font-weight-bold m-3">NOMBRE</h6>
                <input type="text" class="form-control" name="nombre"
                value="<?php echo $resunico_sucursal['nombre'] ?>">
                <h6 class="text-primary font-weight-bold m-3">DATOS GENERALES</h6>
                <textarea class="form-control mt-2" rows="3" name="datos_generales"><?php echo $resunico_sucursal['datos_generales'] ?></textarea>
                <button class="btn btn-primary mt-3">Guardar</button>
                </form>
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
                <th scope="col">Datos Generales</th>
                <th scope="col-4"></th>
              </tr>
            </thead>
            <tbody>
              <?php  foreach($resultado_sucursales as $datos): ?>
              <tr>
                <th scope="row"></th>
                <td><?php echo $datos['nombre']?></td>
                <td><?php echo $datos['datos_generales']?></td>
                <td class="d-flex">
                  <a href="sucursales.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"></a>
                  <a href="eliminar_sucursales.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/delete.png" alt="eliminar" style="height:1.5rem; border-radius: 4px"></a>
                </td>
              </tr>
              <?php  endforeach ?>
            </tbody>
          </table>

          <?php
            $pdo = null;
            $sent_sucursales = null;
            ?>
        </div>
        <div class="ayuda bg-primary col-12" id="ayuda"><h2>Ayuda</h2>
        <table class="formulario table bg-light rounded">
            <thead class="text-primary">
              <tr>
                <th scope="col">Comando</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estructura</th>
                <th scope="col">Aspecto</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="" alt=" <br>"></td>
                <td>Salto de línea</td>
                <td><img src="" alt="Texto <br> Texto"></td>
                <td>Texto <br> Texto </td>
              </tr>
              <tr>
                <td><img src="" alt="<br> <br>"></td>
                <td>Salto de línea doble</td>
                <td><img src="" alt="Texto <br> <br> Texto"></td>
                <td>Texto <br> <br> Texto</td>
              </tr>
              <tr>
                <td><img src="" alt="<strong> </strong>"></td>
                <td>Letra en negritas</td>
                <td><img src="" alt="<strong> Texto </strong>"></td>
                <td><strong>Texto</strong></td>
              </tr>
              <tr>
                <td><img src="" alt="<em> </em>"></td>
                <td>Letra en cursiva</td>
                <td><img src="" alt="<em> Texto </em>"></td>
                <td><em>Texto</em></td>
              </tr>
              <tr>
                <td><img src="" alt="<hr>"></td>
                <td>División de título</td>
                <td><img src="" alt="Titulo <hr> Parrafo"></td>
                <td>Titulo <hr> Parrafo</td>
              </tr>
            </tbody>
          </table>        
        </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script>
      var ayuda = $('#ayuda');

      $('.btn-ayuda').click(function(){
    ayuda.toggle(500);
    });
    </script>
  </body>
</html>
