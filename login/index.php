<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LOGIN</title>
    <style>
      a {
        color: #fff;
        margin: 0 2rem;
        text-decoration: none;
      }

      a:hover {
        color: orange;
      }
    </style>
  </head>

  <?php 
include_once '../conexion.php';
//FETCHALL
  //LEER Y MOSTRAR UNA TABLA
  $sql_generales = 'SELECT * FROM generales';

  //SENTENCIA PREPARADA
  //VARIABLE QUE GUARDARA TODA LA CONEXION PDO Y LA SENTECIA SQL
  $sentencia_generales = $pdo->prepare($sql_generales);
  //LE PONEMOS LA FUNCION PARA QUE SE EJECUTE
  $sentencia_generales->execute();

  //GUARDAMOS EN RESULTADO EL FETCHALL CON EL QUE NOS DEVOLVERA UN ARRAY
  $generales = $sentencia_generales->FetchAll();
  //IMPRIMIMOS EL RESULTADO EL CUAL SERA UN ARRAY
  //var_dump($resultado);
?>
  <body>


    <!--PONEMOS UNA CONDICION DE LINEA (?) PARA QUE SI HAY UNA SESION INICIADA MUESTRE EL NOMBRE-->
    <!--IMPRIMIRMOS SI EL ISSET DA VERDADERO EL NOMBRE ALMACENADO EN LA VARIABLE SESSION-->

    <nav class="navbar navbar-light bg-primary text-light justify-content-between">
          <div class="text-light">
          <?php  foreach($generales as $general): ?>
					<h1><a  href="index.php"><span><?php echo $general['nombre_corto']?></span></a></h1>
				<?php  endforeach ?>

          <a href="../index.php" class="active">Inicio</a>
					<a href="../about.php">Acerca de Nosotros</a>
					<a href="../codes.php">Promociones</a>
					<a href="../treatments.php">Estudios</a>
					<a href="../contact.php">Contacto</a>
          <a href="../registro.php" class="text-white md-0">Iniciar Sesion</a>
          </div>

      <form class="form-inline">
        <h5>Bienvenido: <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario']: 'Invitado' ?></h5>
      </form>
    </nav>
  </body>
</html>
