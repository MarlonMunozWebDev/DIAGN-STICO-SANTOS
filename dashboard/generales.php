<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_generales = 'SELECT * FROM generales';
$sent_generales = $pdo->prepare($sql_generales);
$sent_generales->execute();
$resultado_generales = $sent_generales->fetchAll();

//AGREGAR
if($_POST) {
  $nombre_laboratorio = $_POST['nombre_laboratorio'];
  $nombre_corto = $_POST['nombre_corto'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo_electronico = $_POST['correo_electronico'];
  $aviso_privacidad = $_POST['aviso_privacidad'];
  $mision = $_POST['mision'];
  $vision = $_POST['vision'];

  $agregar_general = 'INSERT INTO generales (nombre_laboratorio,nombre_corto,direccion,telefono,correo_electronico,aviso_privacidad,mision,vision) VALUES (?,?)';
  $sentencia_general = $pdo->prepare($agregar_general);
  $sentencia_general->execute(array($nombre_laboratorio,$nombre_corto,$direccion,$telefono,$correo_electronico,$aviso_privacidad,$mision,$vision));
  $sentencia_general = null;
  $pdo = null;
  header('location:generales.php');
}

//SOLO MODIFCA LOS VALORES CON EL ID OBTENIDO
if($_GET) {
  $id = $_GET['id'];
  $unico_general = 'SELECT * FROM generales WHERE id=?';
  $sentunico_general = $pdo->prepare($unico_general);
  $sentunico_general->execute(array($id));
  $resunico_general = $sentunico_general->fetch();
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
          bottom: 1100px;
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
    <title>INFORMACIÓN GENERAL</title>
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
    <h2 class="bg-primary text-white mt-3 p-3 rounded">INFORMACIÓN GENERAL</h2> <br>

        <div class="col-12">
        <div class="col-12">
             <!--CONDICIONAL CUANDO HALLA UN METODO CONTRARIO A GET MUESTRAME ESTE APARTADO-->
                <?php if(!$_GET): ?>
                  <div class="col-12">
                      <div class="col-12">
                        <table class="formulario table bg-light rounded">
                        <?php  foreach($resultado_generales as $datos): ?>
                        <tbody>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">NOMBRE</h6>
                            <?php echo $datos['nombre_laboratorio']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">NOMBRE CORTO</h6>
                            <?php echo $datos['nombre_corto']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">DIRECCIÓN</h6>
                            <?php echo $datos['direccion']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">TELÉFONO</h6>
                            <?php echo $datos['telefono']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">CORREO</h6>
                            <?php echo $datos['correo_electronico']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">AVISO DE PRIVACIDAD</h6>
                            <?php echo $datos['aviso_privacidad']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">POLÍTICA DE CALIDAD</h6>
                            <?php echo $datos['politica_calidad']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">MISIÓN</h6>
                            <?php echo $datos['mision']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">VISIÓN</h6>
                            <?php echo $datos['vision']?></td>
                          </tr>
                          <tr>
                            <td>
                              <a href="generales.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"> </a>
                            </td>
                          </tr>
                        </tbody>
                        <?php  endforeach ?>
                      </table>
                    </div>


                    <?php
                      $pdo = null;
                      $sent_generales = null;
                      ?>
                  </div>
                  </div>
                <?php endif ?>

                <?php if($_GET): ?>
                <button class="btn btn-primary btn-ayuda">Ayuda</button>
                <h2>EDITAR</h2>
                <!--TENDRA EL METODO GET Y LA ACCION SERA EL ARCHIVO EDITAR.PHP-->
                <form method="GET" action="editar_generales.php">
                <!--INPUT ID OCULTO-->
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_general['id'] ?>">
                
                <h6 class="text-primary font-weight-bold">NOMBRE</h6>
                <input type="text" class="form-control" name="nombre_laboratorio"
                value="<?php echo $resunico_general['nombre_laboratorio'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">NOMBRE CORTO</h6>
                <input type="text" class="form-control mt-2" name="nombre_corto"
                value="<?php echo $resunico_general['nombre_corto'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">DIRECCIÓN</h6>
                <input type="text" class="form-control mt-2" name="direccion"
                value="<?php echo $resunico_general['direccion'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">TELÉFONO</h6>
                <input type="text" class="form-control mt-2" name="telefono"
                value="<?php echo $resunico_general['telefono'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">CORREO</h6>
                <input type="email" class="form-control mt-2" name="correo_electronico"
                value="<?php echo $resunico_general['correo_electronico'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">AVISO DE PRIVACIDAD</h6>
                <textarea class="form-control mt-2" rows="4" name="aviso_privacidad"><?php echo $resunico_general['aviso_privacidad'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">POLÍTICA DE CALIDAD</h6>
                <textarea class="form-control mt-2" rows="4" name="politica_calidad"><?php echo $resunico_general['politica_calidad'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">MISIÓN</h6>
                <textarea class="form-control mt-2" rows="4" name="mision"><?php echo $resunico_general['mision'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">VISIÓN</h6>
                <textarea class="form-control mt-2" rows="4" name="vision"><?php echo $resunico_general['vision'] ?></textarea>
                <button class="btn btn-primary mt-3">Guardar</button>
                </form>
            <?php endif ?>
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
