<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />

    <title>Document</title>
</head>
<body>

<div class="menu_imagenes col-12 bg-primary">
                <h4>AGREGAR</h4>
				<button id="btn" class="btn btn-success">Imagen 1</button>
				<button id="btn2" class="btn btn-success">Imagen 2</button>
				<button id="btn3" class="btn btn-success">Imagen 3</button> <br> <br>
				<a href="index.php?id=<?php echo $imagen['id'] ?>" class="m-2"><button class="btn btn-warning mt-3">Cambiar</button></a>

				<?php if(!$_GET): ?>
                <form method="POST">
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <form method="GET" action="cambiar_imagen.php">
					<input type="hidden" class="form-control mt-2" name="id"
					value="<?php echo $resunico_imagen['id'] ?>">
					<label for="">Ingresa el nombre de fondo para confirmar el cambio</label>
					<input type="text" class="form-control" name="nombre"
					value="<?php echo $resunico_imagen['nombre'] ?>">
					<button class="btn btn-primary mt-3">Guardar</button>
                </form>
            <?php endif ?>
</div>
</body>
</html>