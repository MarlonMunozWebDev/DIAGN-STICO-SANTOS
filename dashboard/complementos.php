<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
}

include_once 'conexion.php';
$sql_chat = 'SELECT * FROM chat';
$sent_chat = $pdo->prepare($sql_chat);
$sent_chat->execute();
$resultado_chat = $sent_chat->fetchAll();

$sql_estudios = 'SELECT * FROM estudios_estado';
$sent_estudios = $pdo->prepare($sql_estudios);
$sent_estudios->execute();
$resultado_estudios = $sent_estudios->fetchAll();

//SOLO MODIFCA LOS VALORES CON EL ID OBTENIDO
if($_GET) {
    $id = $_GET['id'];
    $unico_chat = 'SELECT * FROM chat WHERE id=?';
    $sentunico_chat = $pdo->prepare($unico_chat);
    $sentunico_chat->execute(array($id));
    $resunico_chat = $sentunico_chat->fetch();
  }

  if($_GET) {
    $id = $_GET['id'];
    $unico_estudio = 'SELECT * FROM estudios_estado WHERE id=?';
    $sentunico_estudio = $pdo->prepare($unico_estudio);
    $sentunico_estudio->execute(array($id));
    $resunico_estudio = $sentunico_estudio->fetch();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" >
    
    <title>COMPLEMENTOS</title>
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
    <h2 class="bg-primary text-white mt-3 p-3 rounded">COMPLEMENTOS</h2> <br>
    <?php if(!$_GET): ?>
          <div class="bg-light text-center col-md-3 p-4 mt-2 offset-md-4 archivo rounded">
            <?php  foreach($resultado_chat as $datos): ?>
            <img src="../images/mensaje.png" alt="" class="m-5">
                <h5>CHAT</h5>
                <input type="hidden" class="form-control col mt-2" name="chat_estado" min="0" max="1" value="<?php echo $datos['estado'] ?>">
            <?php  endforeach ?>
            </div>

            <div class="bg-light text-center col-md-3 p-4 mt-5 offset-md-4 archivo rounded">
            <?php  foreach($resultado_estudios as $estudio): ?>
              <img src="../images/precio.png" alt="" class="m-5">
                <h5>ESTUDIOS <br> PRECIO / DESCUENTO</h5>
                <input type="hidden" class="form-control col mt-2" name="estudio_estado" min="0" max="1" value="<?php echo $estudio['estado'] ?>">
                <a href="complementos.php?id=<?php echo $estudio['id'] ?>" class="m-2"><img src="img/edit.png" alt="editar" style="height:1.5rem; border-radius: 4px"></a>
            <?php  endforeach ?>
            </div>
                <?php endif ?>

                <?php if($_GET): ?>
            
                <div class="bg-light col-md-3 p-4 mt-5 offset-md-4 archivo rounded">
                <h5>CHAT</h5>
                <form method="GET" action="editar_estados.php" class="row">
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_chat['id'] ?>">

                <input type="range" class="form-control col mt-2" name="chat_estado" min="0" max="1" value="<?php echo $resunico_chat['estado'] ?>">
                </div>
                
                <div class="bg-light col-md-3 p-4 mt-5 offset-md-4 archivo rounded">
                <h5>ESTUDIOS <br> PRECIO / DESCUENTO</h5>
                <input type="hidden" class="form-control mt-2" name="id"
                value="<?php echo $resunico_estudio['id'] ?>">

                <input type="range" class="form-control col mt-2" name="estudio_estado" min="0" max="1" value="<?php echo $resunico_estudio['estado'] ?>">
                <button class="btn btn-primary mt-3">Guardar</button>

                </form>
                </div>

                 
            <?php endif ?>

    </div>
    </div>
  </body>
</html>
