<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_informacion = 'SELECT * FROM principal_informacion';
$sent_informacion = $pdo->prepare($sql_informacion);
$sent_informacion->execute();
$resultado_informacion = $sent_informacion->fetchAll();

if($_GET) {
  $id = $_GET['id'];
  $unico_informacion = 'SELECT * FROM principal_informacion WHERE id=?';
  $sentunico_informacion = $pdo->prepare($unico_informacion);
  $sentunico_informacion->execute(array($id));

  $resunico_informacion = $sentunico_informacion->fetch();
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
          bottom: 1200px;
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
    
    <title>PRINCIPAL INFORMACIÓN</title>
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
    <h2 class="bg-primary text-white mt-3 p-3 rounded">PRINCIPAL INFORMACIÓN</h2> <br>
    
        <div class="col-12">
        <div class="col-12">
             <!--CONDICIONAL CUANDO HALLA UN METODO CONTRARIO A GET MUESTRAME ESTE APARTADO-->
                <?php if(!$_GET): ?>
                    <div class="col-12">
                      <div class="col-12">
                        <table class="formulario table bg-light rounded">
                        <?php  foreach($resultado_informacion as $datos): ?>
                        <tbody>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>NOSOTROS TÍTULO</h6>
                            <?php echo $datos['nosotros_titulo']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>NOSOTROS DESCRIPCIÓN</h6>
                            <?php echo $datos['nosotros_descripcion']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>PROMOCIONES ANUNCIO</h6>
                            <?php echo $datos['promociones_anuncio']?></td>
                          </tr>

                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA ESTUDIOS <br>ESTUDIOS DESCRIPCIÓN</h6>
                            <?php echo $datos['estudios_descripcion']?></td>
                          </tr>

                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 1 - TÍTULO</h6>
                            <?php echo $datos['caracteristica1_titulo']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 1 - DESCRIPCIÓN</h6>
                            <?php echo $datos['caracteristica1_descripcion']?></td>
                          </tr>

                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 2 - TÍTULO</h6>
                            <?php echo $datos['caracteristica2_titulo']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 2 - DESCRIPCIÓN</h6>
                            <?php echo $datos['caracteristica2_descripcion']?></td>
                          </tr>
                        
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 3 - TITULO</h6>
                            <?php echo $datos['caracteristica3_titulo']?></td>
                          </tr>
                          <tr>
                            <td><h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>CARACTERISTICA 3 - DESCRIPCIÓN</h6>
                            <?php echo $datos['caracteristica3_descripcion']?></td>
                          </tr>
                          <tr>
                            <td>
                              <a href="principal_informacion.php?id=<?php echo $datos['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"> </a>
                            </td>
                          </tr>
                        </tbody>
                        <?php  endforeach ?>
                      </table>
                    </div>


                    <?php
                      //CERRAMOS LA CONEXION DE LA BD Y LA SENTENCIA PARA BORRAR LO INTRODUCIDO
                      $pdo = null;
                      $sent_generales = null;
                      ?>
                  </div>
                  </div>
                <?php endif ?>

                <?php if($_GET): ?>
                <button class="btn btn-primary btn-ayuda">Ayuda</button>
                <h4>EDITAR</h4>
                <!--TENDRA EL METODO GET Y LA ACCION SERA EL ARCHIVO EDITAR.PHP-->
                <form method="GET" action="editar_informacion.php">
                <!--INPUT ID OCULTO-->
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_informacion['id'] ?>">
                
                <h6 class="text-primary font-weight-bold">PÁGINA PRINCIPAL <br>NOSOTROS TÍTULO</h6>
                <input type="text" class="form-control" name="nosotros_titulo"
                value="<?php echo $resunico_informacion['nosotros_titulo'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>NOSOTROS DESCRIPCIÓN</h6>
                <textarea class="form-control mt-2" rows="2" name="nosotros_descripcion"><?php echo $resunico_informacion['nosotros_descripcion'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>PROMOCIONES ANUNCIO</h6>
                <input type="text" class="form-control mt-2" name="promociones_anuncio"
                value="<?php echo $resunico_informacion['promociones_anuncio'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA ESTUDIOS <br>ESTUDIOS DESCRIPCIÓN</h6>
                <textarea class="form-control mt-2" rows="2" name="estudios_descripcion"><?php echo $resunico_informacion['estudios_descripcion'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 1 - TÍTULO</h6>
                <input type="text" class="form-control mt-2" name="caracteristica1_titulo"
                value="<?php echo $resunico_informacion['caracteristica1_titulo'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 1 - DESCRIPCIÓN</h6>
                <textarea class="form-control mt-2" rows="2" name="caracteristica1_descripcion"><?php echo $resunico_informacion['caracteristica1_descripcion'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 2 - TÍTULO</h6>
                <input type="text" class="form-control mt-2" name="caracteristica2_titulo"
                value="<?php echo $resunico_informacion['caracteristica2_titulo'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 2 - DESCRIPCIÓN</h6>
                <textarea class="form-control mt-2" rows="2" name="caracteristica2_descripcion"><?php echo $resunico_informacion['caracteristica2_descripcion'] ?></textarea>
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 3 - TITULO</h6>
                <input type="text" class="form-control mt-2" name="caracteristica3_titulo"
                value="<?php echo $resunico_informacion['caracteristica3_titulo'] ?>">
                <h6 class="text-primary font-weight-bold mt-4">PÁGINA PRINCIPAL <br>CARACTERISTICA 3 - DESCRIPCIÓN</h6>
                <textarea class="form-control mt-2" rows="2" name="caracteristica3_descripcion"><?php echo $resunico_informacion['caracteristica3_descripcion'] ?></textarea>
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
