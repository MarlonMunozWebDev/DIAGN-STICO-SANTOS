<?php 
    include_once 'dashboard/conexion.php';

  $sql_leer = 'SELECT * FROM promociones';
  $sentencia_leer = $pdo->prepare($sql_leer);
  $sentencia_leer->execute();

  $promociones = $sentencia_leer->FetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .promociones {
          padding: 1rem;
        }

        .promocion {
          background: #056faf;
          padding: 1.5rem;
          margin-bottom: 2rem;
          border-radius: 1rem;
          min-height: 13rem;
          color: orange;
          webkit-box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
		      -moz-box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
		      box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
        }
        .promocion h3 {
          color: #fff;
        }

        .precio {
          font-weight: 700!important;
          color: #fcbf1e;
          font-size: 2rem;
        }

        .iconos {
          display: flex;
          justify-content: center;
        }

        .iconos img {
          height: 1.5rem;
          margin: 1rem;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>PROMOCIONES</h2>

      <hr>
      <div class="row">
        <?php  foreach($promociones as $promocion): ?>
        <div class="promociones col-md-6">
          <div class="promocion">
            <h3><?php echo $promocion['nombre']?></h3>
            <p class="precio">$<?php echo $promocion['precio']?></p>
            <p><?php echo $promocion['descripcion']?></p>
          </div>
        </div>
        <?php  endforeach ?>
      </div>
            
</body>
</html>