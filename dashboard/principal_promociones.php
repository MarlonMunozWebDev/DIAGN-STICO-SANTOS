<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_principal = 'SELECT * FROM principal_promociones';
$sent_principal = $pdo->prepare($sql_principal);
$sent_principal->execute();
$resultado = $sent_principal->fetchAll();

//AGREGAR
if($_POST) {
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $agregar_principal = 'INSERT INTO promociones_principal (nombre,precio,descripcion) VALUES (?,?)';
  $sentencia_agregar = $pdo->prepare($agregar_principal);
  $sentencia_agregar->execute(array($nombre,$precio,$descripcion));
  $sentencia_agregar = null;
  $pdo = null;

  header('location:principal_promociones.php');
}

//SOLO MODIFCA LOS VALORES CON EL ID OBTENIDO
if($_GET) {
  $id = $_GET['id'];
  $sql_unico = 'SELECT * FROM principal_promociones WHERE id=?';
  $sentencia_unico = $pdo->prepare($sql_unico);
  $sentencia_unico->execute(array($id));
  $resultado_unico = $sentencia_unico->fetch();
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
        margin: -1rem;
      }

      .ayuda {
          bottom: 200px;
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

    <title>PROMOCIONES PRINCIPALES</title>
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
      <h2 class="bg-primary text-white p-3 mt-3 rounded ">PROMOCIONES PRINCIPALES</h2> <br>

        <div class="col-12">
          <div class="col-12">
            <!--CONDICIONAL CUANDO HALLA UN METODO CONTRARIO A GET MUESTRAME ESTE APARTADO-->
            <?php if(!$_GET): ?>
              <div class="col-12 mt-4">
              <div class="col-12">
              <table class="formulario table bg-light rounded">
                      <thead class="text-primary">
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Promoción Principal</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Descripción</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  foreach($resultado as $dato): ?>
                        <tr>
                          <th scope="row"></th>
                          <td><?php echo $dato['nombre']?></td>
                          <td><?php echo $dato['precio']?></td>
                          <td><?php echo $dato['descripcion']?></td>
                          <td class="d-flex">
                          <a href="principal_promociones.php?id=<?php echo $dato['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"></a>
                        </td>
                        </tr>
                        <?php  endforeach ?>
                      </tbody>
                    </table>

                    <?php
                    $pdo = null;
                    $sent_principal = null;
                    ?>
              </div>
            </div>
                <?php endif ?>

                <?php if($_GET): ?>
                <button class="btn btn-primary btn-ayuda">Ayuda</button>
                <h4>EDITAR</h4>
                  <!--TENDRA EL METODO GET Y LA ACCION SERA EL ARCHIVO EDITAR.PHP-->
                  <form method="GET" action="editar_principales.php" class="row">
                    <!--INPUT ID OCULTO-->
                    <input type="hidden" class="form-control mt-2" name="id"
                    value="<?php echo $resultado_unico['id'] ?>">
                    <h6 class="text-primary font-weight-bold m-3">NOMBRE</h6>
                    <input type="text" class="form-control col-9" name="nombre"
                    value="<?php echo $resultado_unico['nombre'] ?>">
                    <h6 class="text-primary font-weight-bold m-3">PRECIO</h6>
                    <input type="text" class="form-control col ml-2" name="precio"
                    value="<?php echo $resultado_unico['precio'] ?>">
                    <h6 class="text-primary font-weight-bold m-3">DESCRIPCION</h6>
                    <textarea class="form-control mt-2" rows="2" name="descripcion"><?php echo $resultado_unico['descripcion'] ?></textarea>
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
