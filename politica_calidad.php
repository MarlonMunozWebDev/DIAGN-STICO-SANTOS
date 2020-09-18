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
			<?php  foreach($generales as $general): ?>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Acerca de Nosotros</a></li>
					<li><a href="codes.php">Promociones</a></li>
					<li><a href="treatments.php">Estudios</a></li>
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
<div class="typrography wthree all_pad">
	 <div class="container">
		<div class="col-12">
        <h4>Política de Calidad</h4> 
		<hr>
		<p><?php echo $general['politica_calidad']?></p>
		<?php  endforeach ?>
		</div>

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