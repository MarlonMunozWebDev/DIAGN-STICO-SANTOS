<?php
session_start();
if( isset($_SESSION['usuario']) ) {
} else {
  header('location:error.php');
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
    <style>
             .archivo {
                 padding-top: 14rem;
             }
        </style>
    
    <title>ESTUDIOS</title>
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
    <h2 class="bg-primary text-white mt-3 p-3 rounded">ESTUDIOS - ARCHIVO EXCEL</h2> <br>
    
        <form action="files.php" method="post" enctype="multipart/form-data" id="filesForm">
            <div class="col-md-6 offset-md-3 archivo">
                <input class="form-control" type="file" name="fileContacts" >
                <button type="button" onclick="uploadContacts()" class="btn btn-primary form-control mt-2" >Cargar</button>
            </div>
        </form>

    </div>
    </div>
  </body>

  <script type="text/javascript">

    function uploadContacts()
    {
        alert('Subiendo... acepte y espere un momento');
        var Form = new FormData($('#filesForm')[0]);
        $.ajax({

            url: "import.php",
            type: "post",
            data : Form,
            processData: false,
            contentType: false,
            success: function(data)
            {
                alert('Registros Agregados!');
            }
        });
    }

</script>
</html>
