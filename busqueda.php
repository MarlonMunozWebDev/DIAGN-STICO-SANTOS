<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Análisis Clinicos | Laboratorio Clinico</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>
<?php
include_once 'dashboard/conexion.php';
  $sql_chat = 'SELECT * FROM chat';
  $sentencia_chat = $pdo->prepare($sql_chat);
  $sentencia_chat->execute();
  $chat = $sentencia_chat->FetchAll();
?>

<?php  foreach($chat as $est): ?>
<?php $est['estado']?>
<?php  endforeach ?>

<?php
if ($est['estado']==1) { ?>
		<script src="//code.jivosite.com/widget/WjTZmbvqwo" async></script>
 <?php } else { } ?>
 
<style>
	.iconos {
          display: flex;
          justify-content: center;
        }

        .iconos img {
          height: 1.5rem;
          margin: 1rem;
		}
		
		
		.buscador {
			margin-top: 2rem;
		}

		.resultado {
		color: #000!important;
		}

		table {
			background: #F7f9f9;
			margin-top: 2rem;
		}

		.enlace {
			margin-left: 2rem;
		}

</style>
</head>

<?php 
include_once 'dashboard/conexion.php';
  $sql_generales = 'SELECT * FROM generales';
  $sentencia_generales = $pdo->prepare($sql_generales);
  $sentencia_generales->execute();
  $generales = $sentencia_generales->FetchAll();
?>

<body>

<div class="contacto bg-primary row text-center">
	<div class="col-md-4">
		<?php  foreach($generales as $general): ?>
			<p class="top_li"><?php echo $general['direccion']?></p>
	</div>

	<div class="col-md-4">
			<p class="top_li mr-lg-0"><?php echo $general['correo_electronico']?></p>
			<?php  endforeach ?>
	</div>

	<div class="col-md-4 iconos">
		<a href="https://wa.me/525617271185"><img src="images/whatsapp.png" alt=""></a>
		<a href="https://www.facebook.com/2020mas/"><img src="images/facebook.png" alt=""></a>
		<a href="https://www.instagram.com/20.20mas/"><img src="images/instagram.png" alt=""></a>
	</div>
</div>
<!-- header -->
<div class="header_w3l">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<div class="santos">
					<img src="images/logo.jpg" alt="" class="logo-santos">
					<h3 class="nombre">Diagnóstico <br> Clínico Santos</h3>
				</div>
		</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Acerca de Nosotros</a></li>
					<li><a href="codes.php">Promociones</a></li>
					<li><a href="treatments.php" class="active">Estudios</a></li>
					<li><a href="http://2020mas.com/public">Resultados</a></li>
					<li><a href="contact.php">Contacto</a></li>
					<a href="login/iniciar_sesion.php" target="_blank" class="text-white md-0"><img src="images/usuario.png" alt=""></a>

				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>
<!-- header -->
<div class="care_agileits">
	<div class="container">
		<?php 
		include_once 'dashboard/conexion.php';
		$sql_informacion = 'SELECT * FROM principal_informacion';
		$sentencia_informacion = $pdo->prepare($sql_informacion);
		$sentencia_informacion->execute();
		$principal_informacion = $sentencia_informacion->FetchAll();

		$buscar = $_POST['buscar'];
        $sql_estudios = "SELECT * FROM estudios WHERE nombre LIKE '%" .$buscar. "%' ORDER BY nombre ASC ";
        $sent_estudios = $pdo->prepare($sql_estudios);
        $sent_estudios->execute();
		$resultado_estudios = $sent_estudios->fetchAll();
		
		$sql_estado = 'SELECT * FROM estudios_estado';
		$sentencia_estado = $pdo->prepare($sql_estado);
		$sentencia_estado->execute();
		$estado = $sentencia_estado->FetchAll();
		?>

			<h3>ESTUDIOS</h3>
			<?php  foreach($principal_informacion as $informacion): ?>
			<h4><?php echo $informacion['estudios_descripcion']?></h4>
			<?php  endforeach ?>

			<h4 class="mb-5 resultado">Resultados de busqueda: <strong class="text-primary"> <?php echo $buscar?> </strong></h4>
			<form class="buscador form-inline my-5" action="busqueda.php" method="POST">
                <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button> 
                <a href="treatments.php" class="enlace text-primary">Todos los estudios</a>
            </form>

			<?php  foreach($estado as $estudios_estado): ?>
						<?php $estudios_estado['estado']?>
					<?php  endforeach ?>

					<?php if ($estudios_estado['estado']==1) { ?>
						<table class="formulario table bg-light table-bordered">
						<thead class="text-primary">
						<tr>
							<th scope="col">Nombre</th>
							<th class="text-center" scope="col">Días de proceso</th>
							<th class="text-center" scope="col">Precio</th>
							<th class="text-center" scope="col">Condiciones pre analíticas</th>
							<th class="text-center" scope="col">Descuento</th>
						</tr>
						</thead>
						<tbody>
						<?php  foreach($resultado_estudios as $datos): ?>
						<tr>
							<td><?php echo $datos['nombre']?></td>
							<td class="text-center"><?php if ($datos['dias_de_proceso']==0) {echo "Mismo día";}
											if ($datos['dias_de_proceso']==1) {
												echo "1 día";
											}

											if ($datos['dias_de_proceso']>=2) {
												echo $datos['dias_de_proceso'];?> días <?php
											}?></td>
							<td class="text-center">$<?php echo $datos['precio']?></td>
							<td><?php echo $datos['condiciones_pre_analiticas']?></td>
							<td class="text-center"><?php if ($datos['descuento']==0) {echo "";}
							if ($datos['descuento']>=1) {echo $datos['descuento']. "%";}?></td>
						</tr>
						<?php  endforeach ?>
						</tbody>
			            </table>
								
								<?php } else { ?>

									<table class="formulario table bg-light table-bordered">
										<thead class="text-primary">
										<tr>
											<th scope="col">Nombre</th>
											<th class="text-center" scope="col">Días de proceso</th>
											<th class="text-center" scope="col">Condiciones pre analíticas</th>
										</tr>
										</thead>
										<tbody>
										<?php  foreach($resultado_estudios as $datos): ?>
										<tr>
											<td><?php echo $datos['nombre']?></td>
											<td class="text-center"><?php if ($datos['dias_de_proceso']==0) {echo "Mismo día";}
											if ($datos['dias_de_proceso']==1) {
												echo "1 día";
											}

											if ($datos['dias_de_proceso']>=2) {
												echo $datos['dias_de_proceso'];?> días <?php
											}?></td>
											<td><?php echo $datos['condiciones_pre_analiticas']?></td>
										</tr>
										<?php  endforeach ?>
										</tbody>
										</table>
								<?php } ?>
	</div>
</div>

<div class="footer container-fluid">
	<div class="row">
		<div class="seccion col-md-3">
		</div>

		<div class="col-md-3">
			<h4>MAPA DE NAVEGACIÓN</h4>
			<ul class="list-unstyled">
										<li>
											<a href="index.php">Inicio</a>
										</li>
										<li>
											<a href="about.php">Nosotros</a>
										</li>
										<li>
											<a href="treatments.php">Estudios</a>
										</li>
										<li>
											<a href="codes.php">Promociones</a>
										</li>
										<li>
											<a href="http://2020mas.com/public">Resultados</a>
										</li>
										<li>
											<a href="contact.php">Contacto</a>
										</li>
									</ul>
		</div>

		<div class="col-md-3">
			<h4>NOSOTROS</h4>
			<ul class="list-unstyled">

										<li>
											<a href="about.php">Misión y Visión</a>
										</li>
										<li>
											<a href="valores.php">Valores</a>
										</li>
										<li>
											<a href="trabajo.php">Bolsa de Trabajo</a>
										</li>
										<li>
											<a href="aviso_privacidad.php">Aviso de Privacidad</a>
										</li>
										<li>
											<a href="politica_calidad.php">Política de Calidad</a>
										</li>

									</ul>
		</div>
		<div class="col-md-3">
			<h4>CONTACTO</h4>
			<?php  foreach($generales as $general): ?>
					<br>
					<h2><?php echo $general['telefono']?></h2>
					<br>
					<h5><?php echo $general['direccion']?></h5>
				<?php  endforeach ?>
		</div>
	</div>
	</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="https://wa.me/525617271185" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>