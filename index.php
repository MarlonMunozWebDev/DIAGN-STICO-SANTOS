<?php session_start(); ?>
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
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
	window.onload = function(){
		var contenedor = document.getElementById('contenedor_carga');

		contenedor.style.visibility = 'hidden';
		contenedor.style.opacity = '0';
	}
	</script>

	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">
<?php 
include_once 'dashboard/conexion.php';
  $sql_imagenes = 'SELECT * FROM imagenes';
  $sentencia_imagenes = $pdo->prepare($sql_imagenes);
  $sentencia_imagenes->execute();
  $imagenes = $sentencia_imagenes->FetchAll();

  if($_GET) {
	$id = $_GET['id'];
	$unico_imagen = 'SELECT * FROM imagenes WHERE id=?';
	$sentunico_imagen = $pdo->prepare($unico_imagen);
	$sentunico_imagen->execute(array($id));
	$resunico_imagen = $sentunico_imagen->fetch();
  }
?>
 <?php  foreach($imagenes as $imagen): ?>
<style>
	.menu_imagenes {
		padding: 2rem 3rem;
		background: #EBF5FB;
		color: #000!important;
	}

	.menu_imagenes h2 {
		color: #fff;
	}

	.imagenes {
		display: flex;
		justify-content: space-between;	
		}

	.fondo {
		background: #fff;
		border-radius: 1rem;
		height: 11rem;
		width: 28rem;
		margin: 1rem;
		padding: 0.5rem;
		webkit-box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
		-moz-box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
		box-shadow: 1px 3px 6px 2px rgba(0,0,0,0.75);
	}

		.tema1-g1 {
			background-image: url(images/1-fondo-1.png);
			background-size: cover;
		}

		.tema1-g2 {
			background-image: url(images/1-fondo-2.png);
			background-size: cover;
		}

		.tema1-g3 {
			background-image: url(images/1-fondo-3.png);
			background-size: cover;
		}

		.tema1-g4 {
		background-image: url(images/1-fondo-4.png);
		background-size: cover;
		}

		.tema1-g5 {
			background-image: url(images/1-fondo-5.png);
			background-size: cover;
		}

		.tema1-g6 {
			background-image: url(images/1-fondo-6.png);
			background-size: cover;
		}

		.tema1-g7 {
			background-image: url(images/1-fondo-7.png);
			background-size: cover;
		}

		.tema1-g8 {
			background-image: url(images/1-fondo-8.png);
			background-size: cover;
		}

		.tema1-g9 {
			background-image: url(images/1-fondo-9.png);
			background-size: cover;
		}

		.tema1-g10 {
		background-image: url(images/1-fondo-10.png);
		background-size: cover;
		}

		.tema1-g11 {
			background-image: url(images/1-fondo-11.png);
			background-size: cover;
		}

		.tema1-g12 {
			background-image: url(images/1-fondo-12.png);
			background-size: cover;
		}

		.tema1-c1 {
			background-image: url(images/1-azul.png);
			background-size: cover;
		}

		.tema1-c2 {
			background-image: url(images/1-rosa.png);
			background-size: cover;
		}

		.tema1-c3 {
			background-image: url(images/1-rojo.png);
			background-size: cover;
		}

		.tema1-c4 {
			background-image: url(images/1-verde.png);
			background-size: cover;
		}

		.tema1-c5 {
			background-image: url(images/1-morado.png);
			background-size: cover;
		}

		.tema1-c6 {
			background-image: url(images/1-gris.png);
			background-size: cover;
		}

		.tema1-c7 {
			background-image: url(images/1-azul-claro.png);
			background-size: cover;
		}

		.tema1-c8 {
			background-image: url(images/1-rosa-fuerte.png);
			background-size: cover;
		}

		.tema1-c9 {
			background-image: url(images/1-amarillo.png);
			background-size: cover;
		}

		.tema1-c10 {
			background-image: url(images/1-cafe.png);
			background-size: cover;
		}

		.tema1-c11 {
			background-image: url(images/1-verde-fuerte.png);
			background-size: cover;
		}

		.tema1-c12 {
			background-image: url(images/1-negro.png);
			background-size: cover;
		}

		.tema2-g1 {
			background-image: url(images/2-fondo-1.png);
			background-size: cover;
		}

		.tema2-g2 {
			background-image: url(images/2-fondo-2.png);
			background-size: cover;
		}

		.tema2-g3 {
			background-image: url(images/2-fondo-3.png);
			background-size: cover;
		}

		.tema2-g4 {
		background-image: url(images/2-fondo-4.png);
		background-size: cover;
		}

		.tema2-g5 {
			background-image: url(images/2-fondo-5.png);
			background-size: cover;
		}

		.tema2-g6 {
			background-image: url(images/2-fondo-6.png);
			background-size: cover;
		}

		.tema2-g7 {
			background-image: url(images/2-fondo-7.png);
			background-size: cover;
		}

		.tema2-g8 {
			background-image: url(images/2-fondo-8.png);
			background-size: cover;
		}

		.tema2-g9 {
			background-image: url(images/2-fondo-9.png);
			background-size: cover;
		}

		.tema2-g10 {
		background-image: url(images/2-fondo-10.png);
		background-size: cover;
		}

		.tema2-g11 {
			background-image: url(images/2-fondo-11.png);
			background-size: cover;
		}

		.tema2-g12 {
			background-image: url(images/2-fondo-12.png);
			background-size: cover;
		}

		.tema2-c1 {
			background-image: url(images/2-azul.png);
			background-size: cover;
		}

		.tema2-c2 {
			background-image: url(images/2-rosa.png);
			background-size: cover;
		}

		.tema2-c3 {
			background-image: url(images/2-naranja.png);
			background-size: cover;
		}

		.tema2-c4 {
			background-image: url(images/2-verde.png);
			background-size: cover;
		}

		.tema2-c5 {
			background-image: url(images/2-morado.png);
			background-size: cover;
		}

		.tema2-c6 {
			background-image: url(images/2-gris.png);
			background-size: cover;
		}

		.tema2-c7 {
			background-image: url(images/2-azul-claro.png);
			background-size: cover;
		}

		.tema2-c8 {
			background-image: url(images/2-rosa-claro.png);
			background-size: cover;
		}

		.tema2-c9 {
			background-image: url(images/2-amarillo.png);
			background-size: cover;
		}

		.tema2-c10 {
			background-image: url(images/2-cafe.png);
			background-size: cover;
		}

		.tema2-c11 {
			background-image: url(images/2-verde-fuerte.png);
			background-size: cover;
		}

		.tema2-c12 {
			background-image: url(images/2-rojo.png);
			background-size: cover;
		}

		.tema3-g1 {
			background-image: url(images/3-fondo-1.png);
			background-size: cover;
		}

		.tema3-g2 {
			background-image: url(images/3-fondo-2.png);
			background-size: cover;
		}

		.tema3-g3 {
			background-image: url(images/3-fondo-3.png);
			background-size: cover;
		}

		.tema3-g4 {
		background-image: url(images/3-fondo-4.png);
		background-size: cover;
		}

		.tema3-g5 {
		background-image: url(images/3-fondo-5.png);
		background-size: cover;
		}

		.tema3-g6{
			background-image: url(images/3-fondo-6.png);
			background-size: cover;
		}

		.tema3-g7 {
			background-image: url(images/3-fondo-7.png);
			background-size: cover;
		}

		.tema3-g8 {
			background-image: url(images/3-fondo-8.png);
			background-size: cover;
		}

		.tema3-g9 {
			background-image: url(images/3-fondo-9.png);
			background-size: cover;
		}

		.tema3-g10 {
		background-image: url(images/3-fondo-10.png);
		background-size: cover;
		}

		.tema3-g11 {
		background-image: url(images/3-fondo-11.png);
		background-size: cover;
		}

		.tema3-g12{
			background-image: url(images/3-fondo-12.png);
			background-size: cover;
		}

		.tema3-c1 {
			background-image: url(images/3-azul.png);
			background-size: cover;
		}

		.tema3-c2 {
			background-image: url(images/3-rosa.png);
			background-size: cover;
		}

		.tema3-c3 {
			background-image: url(images/3-rojo.png);
			background-size: cover;
		}

		.tema3-c4 {
			background-image: url(images/3-verde.png);
			background-size: cover;
		}

		.tema3-c5 {
			background-image: url(images/3-morado.png);
			background-size: cover;
		}

		.tema3-c6 {
			background-image: url(images/3-azul-rey.png);
			background-size: cover;
		}

		.tema3-c7 {
			background-image: url(images/3-azul-claro.png);
			background-size: cover;
		}

		.tema3-c8 {
			background-image: url(images/3-rosa-fuerte.png);
			background-size: cover;
		}

		.tema3-c9 {
			background-image: url(images/3-gris.png);
			background-size: cover;
		}

		.tema3-c10 {
			background-image: url(images/3-naranja.png);
			background-size: cover;
		}

		.tema3-c11 {
			background-image: url(images/3-verde-fuerte.png);
			background-size: cover;
		}

		.tema3-c12 {
			background-image: url(images/3-negro.png);
			background-size: cover;
		}


	.cambio {
		margin-top: 2rem;
	}

	.menu_cambio {
		margin-top: 2rem;
	}

	.banner_w3ls{
	background: url(<?php echo "images/".$imagen['nombre'].".png"?>) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
	height: 715px;	
	}

	.banner-info {
	background: url(<?php echo "images/".$imagen['color'].".png"?>) no-repeat center;
	background-size: cover;
	height: 715px;
    width: 100%;
	padding: 5em 47em 3em 15em;
}

		#contenedor_carga {
			background-color: #fff;
			height: 100%;
			width: 100%;
			position: fixed;
			-webkit-transition: all 1 ease;
			-o-transition: all 1s ease;
			transition: all 6 ease;
			z-index: 10000;
		}

		#carga {
			border: 10px solid #1A59A6;
			border-top-color: #DE4F13;
			border-top-style: groove;
			height: 60px;
			width: 60px;
			border-radius: 100%;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			-webkit-animation: girar 1.5s linear infinite;
			-o-animation: girar 1.5s linear infinite;
			animation: girar 1.5s linear infinite;
		}

		@keyframes girar {
			from { transform: rotate(0deg);}
			to { transform: rotate(360deg);}
		}

		.catalogo {
            margin-top: 2rem;
            width: 135rem;
        }
        .catalogo nav {
            background: none;
            color: black;
            padding: 1rem;
            margin: 0;
        }

		.catalogo nav a{
            color: #000;
            text-decoration: none;
            font-weight: 700;
            padding: 1rem;
        }

        .catalogo nav a:hover {
            padding: 1rem;
        }

		.menu h2 {
			color:orange;
		}

		.menu {
			height: 850px;
		}

        .seccion {
            color: #000;
            position: absolute;
            display: none;
            padding: 1rem;
        }

        .seccion img {
            height: 4rem;
        }

        .activo {
            background: orange;
            padding: 1rem;
        }

		.prueba {
			margin-bottom: 60rem;
		}

		.menu_colores {
			display: flex;
			margin: 1rem;
		}

		.color {
			height: 5rem;
			width: 5rem;
			margin: 0 1rem;
			border-radius: 10px;
			border: 2px solid #000;
		}

		.color1 {
			background: rgb(241, 58, 58);
		}

		.color2 {
			background: #fff;
		}

		:root {
			  --rojo: rgb(241, 58, 58);
			  --blanco: #fff;
		}

		.banner-text .precio {
			font-size: 3rem;
			font-weight: 700;
			color: var(<?php echo "--".$imagen['precio_color']?>);
		}

		.anuncio-btn {
			background: rgb(0, 110, 255)!important;
			color: #fff!important;
			padding: 0.5rem 1rem;
			border-radius: 0.5rem;
		}

		/*.navegador {
			margin-top: 1rem!important;
		}

		.nombre {
			margin-top: 1.5rem!important;
		}*/	
</style>
<?php  endforeach ?>
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
 
</head>

<body>

<div id="contenedor_carga">
	<div id="carga"></div>
</div>

<?php 
include_once 'dashboard/conexion.php';
  $sql_generales = 'SELECT * FROM generales';
  $sentencia_generales = $pdo->prepare($sql_generales);
  $sentencia_generales->execute();
  $generales = $sentencia_generales->FetchAll();
?>

<div class="contacto bg-primary row text-center">
	<div class="col-md-4">
		<?php  foreach($generales as $general): ?>
			<div class="header-info">
				<img src="images/icon1.png" alt=" "/>
				<p class="direccion top_li"><?php echo $general['direccion']?></p>
			</div>
	</div>

	<div class="col-md-4">
			<div class="header-info">
				<img src="images/icon5.png" alt=" "/>
				<p class="correo top_li mr-lg-0"><?php echo $general['correo_electronico']?></p>
			</div>
			<?php  endforeach ?>
	</div>

	<div class="col-md-4 iconos">
		<a href="https://wa.me/525537002078"><img src="images/whatsapp.png" alt=""></a>
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
			<div class="navegador collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="active">Inicio</a></li>
					<li><a href="about.php">Acerca de Nosotros</a></li>
					<li><a href="codes.php">Promociones</a></li>
					<li><a href="treatments.php">Estudios</a></li>
					<li><a href="http://labsantos.2020mas.com/public">Resultados</a></li>
					<li><a href="contact.php">Contacto</a></li>
					<a href="login/iniciar_sesion.php" target="_blank" class="text-white md-0"><img src="images/usuario.png" alt=""></a>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>
<?php
  if( isset($_SESSION['usuario']) ) { ?>
	 
	 <div class="menu_imagenes col-12">
	 <h3>CATALOGO DE IMAGENES</h3>
	 	<div class="prueba">
		 <div class="catalogo">
        <nav>
            <a href="#seccion1">Tema 1</a>
            <a href="#seccion2">Tema 2</a>
            <a href="#seccion3">Tema 3</a>
        </nav>

        <div class="menu">
            <div id="seccion1" class="seccion">
                <div class="imagenes">
						<div id="btn1-g1" class="fondo tema1-g1"><h2>1-fondo-1</h2></div>
						<div id="btn1-g2" class="fondo tema1-g2"><h2>1-fondo-2</h2></div>
						<div id="btn1-g3" class="fondo tema1-g3"><h2>1-fondo-3</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn1-g4" class="fondo tema1-g4"><h2>1-fondo-4</h2></div>
						<div id="btn1-g5" class="fondo tema1-g5"><h2>1-fondo-5</h2></div>
						<div id="btn1-g6" class="fondo tema1-g6"><h2>1-fondo-6</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn1-g7" class="fondo tema1-g7"><h2>1-fondo-7</h2></div>
						<div id="btn1-g8" class="fondo tema1-g8"><h2>1-fondo-8</h2></div>
						<div id="btn1-g9" class="fondo tema1-g9"><h2>1-fondo-9</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn1-g10" class="fondo tema1-g10"><h2>1-fondo-10</h2></div>
						<div id="btn1-g11" class="fondo tema1-g11"><h2>1-fondo-11</h2></div>
						<div id="btn1-g12" class="fondo tema1-g12"><h2>1-fondo-12</h2></div>
				</div>
				<hr>
				<h2>COLOR DE TEMA</h2>
				<div class="imagenes">
						<div id="btn1-c1" class="fondo tema1-c1"><h2>1-azul</h2></div>
						<div id="btn1-c2" class="fondo tema1-c2"><h2>1-rosa</h2></div>
						<div id="btn1-c3" class="fondo tema1-c3"><h2>1-rojo</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn1-c4" class="fondo tema1-c4"><h2>1-verde</h2></div>
						<div id="btn1-c5" class="fondo tema1-c5"><h2>1-morado</h2></div>
						<div id="btn1-c6" class="fondo tema1-c6"><h2>1-gris</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn1-c7" class="fondo tema1-c7"><h2>1-azul-claro</h2></div>
						<div id="btn1-c8" class="fondo tema1-c8"><h2>1-rosa-fuerte</h2></div>
						<div id="btn1-c9" class="fondo tema1-c9"><h2>1-amarillo</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn1-c10" class="fondo tema1-c10"><h2>1-cafe</h2></div>
						<div id="btn1-c11" class="fondo tema1-c11"><h2>1-verde-fuerte</h2></div>
						<div id="btn1-c12" class="fondo tema1-c12"><h2>1-negro</h2></div>
				</div>
            </div>

            <div id="seccion2" class="seccion">
				<div class="imagenes">
						<div id="btn2-g1" class="fondo tema2-g1"><h2>2-fondo-1</h2></div>
						<div id="btn2-g2" class="fondo tema2-g2"><h2>2-fondo-2</h2></div>
						<div id="btn2-g3" class="fondo tema2-g3"><h2>2-fondo-3</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn2-g4" class="fondo tema2-g4"><h2>2-fondo-4</h2></div>
						<div id="btn2-g5" class="fondo tema2-g5"><h2>2-fondo-5</h2></div>
						<div id="btn2-g6" class="fondo tema2-g6"><h2>2-fondo-6</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn2-g7" class="fondo tema2-g7"><h2>2-fondo-7</h2></div>
						<div id="btn2-g8" class="fondo tema2-g8"><h2>2-fondo-8</h2></div>
						<div id="btn2-g9" class="fondo tema2-g9"><h2>2-fondo-9</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn2-g10" class="fondo tema2-g10"><h2>2-fondo-10</h2></div>
						<div id="btn2-g11" class="fondo tema2-g11"><h2>2-fondo-11</h2></div>
						<div id="btn2-g12" class="fondo tema2-g12"><h2>2-fondo-12</h2></div>
				</div>
				<hr>
				<h2>COLOR DE TEMA</h2>
				<div class="imagenes">
						<div id="btn2-c1" class="fondo tema2-c1"><h2>2-azul</h2></div>
						<div id="btn2-c2" class="fondo tema2-c2"><h2>2-rosa</h2></div>
						<div id="btn2-c3" class="fondo tema2-c3"><h2>2-rojo</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn2-c4" class="fondo tema2-c4"><h2>2-verde</h2></div>
						<div id="btn2-c5" class="fondo tema2-c5"><h2>2-morado</h2></div>
						<div id="btn2-c6" class="fondo tema2-c6"><h2>2-gris</h2></div>
				</div> 

				<div class="imagenes">
						<div id="btn2-c7" class="fondo tema2-c7"><h2>2-azul-claro</h2></div>
						<div id="btn2-c8" class="fondo tema2-c8"><h2>2-rosa-claro</h2></div>
						<div id="btn2-c9" class="fondo tema2-c9"><h2>2-amarillo</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn2-c10" class="fondo tema2-c10"><h2>2-cafe</h2></div>
						<div id="btn2-c11" class="fondo tema2-c11"><h2>2-verde-fuerte</h2></div>
						<div id="btn2-c12" class="fondo tema2-c12"><h2>2-rojo</h2></div>
				</div> 
            </div>

            <div id="seccion3" class="seccion">
				<div class="imagenes">
						<div id="btn3-g1" class="fondo tema3-g1"><h2>3-fondo-1</h2></div>
						<div id="btn3-g2" class="fondo tema3-g2"><h2>3-fondo-2</h2></div>
						<div id="btn3-g3" class="fondo tema3-g3"><h2>3-fondo-3</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn3-g4" class="fondo tema3-g4"><h2>3-fondo-4</h2></div>
						<div id="btn3-g5" class="fondo tema3-g5"><h2>3-fondo-5</h2></div>
						<div id="btn3-g6" class="fondo tema3-g6"><h2>3-fondo-6</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn3-g7" class="fondo tema3-g7"><h2>3-fondo-7</h2></div>
						<div id="btn3-g8" class="fondo tema3-g8"><h2>3-fondo-8</h2></div>
						<div id="btn3-g9" class="fondo tema3-g9"><h2>3-fondo-9</h2></div>
				</div>
				<div class="imagenes">
						<div id="btn3-g10" class="fondo tema3-g10"><h2>3-fondo-10</h2></div>
						<div id="btn3-g11" class="fondo tema3-g11"><h2>3-fondo-11</h2></div>
						<div id="btn3-g12" class="fondo tema3-g12"><h2>3-fondo-12</h2></div>
				</div>
				<hr>
				<h2>COLOR DE TEMA</h2>
				<div class="imagenes">
						<div id="btn3-c1" class="fondo tema3-c1"><h2>3-azul</h2></div>
						<div id="btn3-c2" class="fondo tema3-c2"><h2>3-rosa</h2></div>
						<div id="btn3-c3" class="fondo tema3-c3"><h2>3-rojo</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn3-c4" class="fondo tema3-c4"><h2>3-verde</h2></div>
						<div id="btn3-c5" class="fondo tema3-c5"><h2>3-morado</h2></div>
						<div id="btn3-c6" class="fondo tema3-c6"><h2>3-azul-rey</h2></div>
				</div> 

				<div class="imagenes">
						<div id="btn3-c7" class="fondo tema3-c7"><h2>3-azul-claro</h2></div>
						<div id="btn3-c8" class="fondo tema3-c8"><h2>3-rosa-fuerte</h2></div>
						<div id="btn3-c9" class="fondo tema3-c9"><h2>3-gris</h2></div>
				</div>

				<div class="imagenes">
						<div id="btn3-c10" class="fondo tema3-c10"><h2>3-naranja</h2></div>
						<div id="btn3-c11" class="fondo tema3-c11"><h2>3-verde-fuerte</h2></div>
						<div id="btn3-c12" class="fondo tema3-c12"><h2>3-negro</h2></div>
				</div> 
            </div>
        </div>
				</div>
		 </div>
		 <hr>
		 <h3>Color de Precio</h3>
		 <div class="menu_colores">
			<div id="precio1" class="color color1"></div>
			<div id="precio2" class="color color2"></div>
		</div>
                
				<a href="index.php?id=<?php echo $imagen['id'] ?>" class="m-2"><button class="btn btn-warning mt-3">Menu de cambio</button></a>
				<hr> <br>
				<a href="dashboard/generales.php" class="btn btn-primary">Volver al Administrador</a>
				<a href="cerrar.php" class="btn btn-primary">Cerrar Sesion</a>


				<?php if(!$_GET): ?>
                <form method="POST">
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <div class="menu_cambio">
					<form method="GET" action="cambiar_imagen.php" class="form-inline">
						<input type="hidden" class="form-control mt-2" name="id"
						value="<?php echo $resunico_imagen['id'] ?>">
						<label for="">Ingresa el nombre para confirmar la vista</label> <br> <br>
						<input type="text" class="form-control" name="nombre"
						value="<?php echo $resunico_imagen['nombre'] ?>">
						<label for="">Color</label>
						<input type="text" class="form-control" name="color"
						value="<?php echo $resunico_imagen['color'] ?>">
						<label for="">Precio Color</label>
						<input type="text" class="form-control" name="precio_color"
						value="<?php echo $resunico_imagen['precio_color'] ?>">
						<button class="btn btn-primary mt-3">Guardar</button>
					</form>
				</div>
            <?php endif ?>
		</div>

  <?php } else {
  }?>

<!-- header -->
<!-- banner -->
<div class="banner_w3ls w3layouts">
	<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
	</script>

<?php 
    include_once 'dashboard/conexion.php';
  $sql_leer = 'SELECT * FROM principal_promociones';
  $sentencia_leer = $pdo->prepare($sql_leer);
  $sentencia_leer->execute();
  $promociones_principal = $sentencia_leer->FetchAll();

	$sql_informacion = 'SELECT * FROM principal_informacion';
	$sentencia_informacion = $pdo->prepare($sql_informacion);
	$sentencia_informacion->execute();
	$principal_informacion = $sentencia_informacion->FetchAll();
?>

		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
			
               <?php  foreach($promociones_principal as $promocion): ?>
				<li>
					<div class="banner-info">
						<div class="banner-text">
							<h3><span><?php echo $promocion['nombre']?></span></h3>
							<a class="precio">$<?php echo $promocion['precio']?></a>
							<p class="descripcion"><?php echo $promocion['descripcion']?> </p>
						</div>
					</div>
				</li>
				<?php  endforeach ?>
				
			</ul>
			<div class="clearfix"></div>
		</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<!-- //banner-bottom -->
<!-- services -->
<?php  foreach($principal_informacion as $informacion): ?>
<div class="services_agile">
	<div class="container">
		<div class="services_right w3-agile">
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span><img src="images/icon1.png" alt=" "/></span>
				<h4><?php echo $informacion['caracteristica1_titulo']?></h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p5.jpg" alt=" "/></a></div>
				<p><?php echo $informacion['caracteristica1_descripcion']?></p>
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span><img src="images/icon2.png" alt=" "/></span>
				<h4><?php echo $informacion['caracteristica2_titulo']?></h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p6.jpg" alt=" "/></a></div>
				<p><?php echo $informacion['caracteristica2_descripcion']?></p>
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span><img src="images/icon3.png" alt=" "/></span>
				<h4><?php echo $informacion['caracteristica3_titulo']?></h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p7.jpg" alt=" "/></a></div>
				<p><?php echo $informacion['caracteristica3_descripcion']?></p>
			</div>
		</div>
	</div>
</div>
<!-- //services -->

<!-- care -->
<div class="promo">
<div class="care_agileits">
	<div class="container text-center">
			<h3><?php echo $informacion['promociones_anuncio']?></h3> <br>
			<a href="codes.php" class="anuncio-btn">Ver promociones</a>
	</div>
	<?php  endforeach ?>
</div>
</div>
<!-- //care -->
<div class="bottom_wthree">
	<div class="col-md-6 bottom-left w3-agileits">	
		<figure class="cube-1">
			<div class="btm-hov">
			</div>
		</figure>
		<div class="clearfix"></div>
	</div>
	<?php 
		include_once 'dashboard/conexion.php';
		$sql_informacion = 'SELECT * FROM principal_informacion';
		$sentencia_informacion = $pdo->prepare($sql_informacion);
		$sentencia_informacion->execute();
		$principal_informacion = $sentencia_informacion->FetchAll();
		?>
	<div class="nosotros col-md-6 bottom-right agileits-w3layouts">
	<div class="logo-nosotros">
		<img src="images/logo.jpg" alt="" class="logo_santos">
	</div>
		<div class="btm-right-grid agile">
			<?php  foreach($principal_informacion as $informacion): ?>
			<h2><?php echo $informacion['nosotros_titulo']?></h2>
			<p><?php echo $informacion['nosotros_descripcion']?> </p>
		</div>	
	</div>
	<div class="clearfix"></div>
</div>
<?php  endforeach ?>

<div class="features_w3 agileits">
	<div class="container">
		<h3 class="title">Sucursales</h3>
		<div class="fea_grids w3ls">

		<?php 
		include_once 'dashboard/conexion.php';
		$sql_leer = 'SELECT * FROM sucursales';
		$sentencia_leer = $pdo->prepare($sql_leer);
		$sentencia_leer->execute();
		$sucursales = $sentencia_leer->FetchAll();
		?>
			<?php  foreach($sucursales as $sucursal): ?>
			<div class="col-md-6">
				<div class="sucursal col-12">
					<h4><?php echo $sucursal['nombre']?></h4>
					<p><?php echo $sucursal['datos_generales']?></p>
				</div>
			</div>
			<?php  endforeach ?>
			
		</div>
	</div>
</div>

<div class="footer container-fluid">
	<div class="row">
		<div class="col-md-3">
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
					<h4><?php echo $general['direccion']?></h4>
				<?php  endforeach ?>
		</div>
	</div>
<!-- smooth scrolling -->
	<script>
        $('.catalogo .seccion:first').show();
        $('.catalogo nav a:first').addClass('activo');
        $('.catalogo nav a').on('click', mostrarInformacion);

        function mostrarInformacion(){
            $('.catalogo nav a').removeClass('activo');
            $(this).addClass('activo');
            var enlace = $(this).attr('href');
            $('.catalogo .menu .seccion').fadeOut();
            $(enlace).fadeIn();
            
            return false;
        }

    </script>

	<script>
        $(document).ready(function (){
			var precio1 = { "color": 'rgb(241, 58, 58)'};
            $("#precio1").click(function(e){
                $(".banner-text .precio").css(precio1);
            })

			var precio2 = { "color": '#fff'};
            $("#precio2").click(function(e){
                $(".banner-text .precio").css(precio2);
            })

            var tema1g1 = { "background" :'url(images/1-fondo-1.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g1").click(function(e){
                $(".banner_w3ls").css(tema1g1);
            })

            var tema1g2 = { "background" :'url(images/1-fondo-2.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g2").click(function(e){
                $(".banner_w3ls").css(tema1g2);
            })

            var tema1g3 = { "background" :'url(images/1-fondo-3.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g3").click(function(e){
                $(".banner_w3ls").css(tema1g3);
            })

			var tema1g4 = { "background" :'url(images/1-fondo-4.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g4").click(function(e){
                $(".banner_w3ls").css(tema1g4);
            })

            var tema1g5 = { "background" :'url(images/1-fondo-5.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g5").click(function(e){
                $(".banner_w3ls").css(tema1g5);
            })

            var tema1g6 = { "background" :'url(images/1-fondo-6.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g6").click(function(e){
                $(".banner_w3ls").css(tema1g6);
            })

			var tema1g7 = { "background" :'url(images/1-fondo-7.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g7").click(function(e){
                $(".banner_w3ls").css(tema1g7);
            })

            var tema1g8 = { "background" :'url(images/1-fondo-8.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g8").click(function(e){
                $(".banner_w3ls").css(tema1g8);
            })

            var tema1g9 = { "background" :'url(images/1-fondo-9.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g9").click(function(e){
                $(".banner_w3ls").css(tema1g9);
            })

			var tema1g10 = { "background" :'url(images/1-fondo-10.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g10").click(function(e){
                $(".banner_w3ls").css(tema1g10);
            })

            var tema1g11 = { "background" :'url(images/1-fondo-11.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g11").click(function(e){
                $(".banner_w3ls").css(tema1g11);
            })

            var tema1g12 = { "background" :'url(images/1-fondo-12.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-g12").click(function(e){
                $(".banner_w3ls").css(tema1g12);
            })

			var tema1c1 = { "background" :'url(images/1-azul.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c1").click(function(e){
                $(".banner-info").css(tema1c1);
            })

            var tema1c2 = { "background" :'url(images/1-rosa.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c2").click(function(e){
                $(".banner-info").css(tema1c2);
            })

            var tema1c3 = { "background" :'url(images/1-rojo.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c3").click(function(e){
                $(".banner-info").css(tema1c3);
            })

			var tema1c4 = { "background" :'url(images/1-verde.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c4").click(function(e){
                $(".banner-info").css(tema1c4);
            })

            var tema1c5 = { "background" :'url(images/1-morado.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c5").click(function(e){
                $(".banner-info").css(tema1c5);
            })

            var tema1c6 = { "background" :'url(images/1-gris.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c6").click(function(e){
                $(".banner-info").css(tema1c6);
            })

			var tema1c7 = { "background" :'url(images/1-azul-claro.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c7").click(function(e){
                $(".banner-info").css(tema1c7);
            })

            var tema1c8 = { "background" :'url(images/1-rosa-fuerte.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c8").click(function(e){
                $(".banner-info").css(tema1c8);
            })

            var tema1c9 = { "background" :'url(images/1-amarillo.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c9").click(function(e){
                $(".banner-info").css(tema1c9);
            })

			var tema1c10 = { "background" :'url(images/1-cafe.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c10").click(function(e){
                $(".banner-info").css(tema1c10);
            })

            var tema1c11 = { "background" :'url(images/1-verde-fuerte.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c11").click(function(e){
                $(".banner-info").css(tema1c11);
            })

            var tema1c12 = { "background" :'url(images/1-negro.png) no-repeat center', "background-size": 'cover'};
            $("#btn1-c12").click(function(e){
                $(".banner-info").css(tema1c12);
            })

			var tema2g1 = { "background" :'url(images/2-fondo-1.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g1").click(function(e){
                $(".banner_w3ls").css(tema2g1);
            })

            var tema2g2 = { "background" :'url(images/2-fondo-2.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g2").click(function(e){
                $(".banner_w3ls").css(tema2g2);
            })

            var tema2g3 = { "background" :'url(images/2-fondo-3.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g3").click(function(e){
                $(".banner_w3ls").css(tema2g3);
            })

			var tema2g4 = { "background" :'url(images/2-fondo-4.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g4").click(function(e){
                $(".banner_w3ls").css(tema2g4);
            })

            var tema2g5 = { "background" :'url(images/2-fondo-5.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g5").click(function(e){
                $(".banner_w3ls").css(tema2g5);
            })

            var tema2g6 = { "background" :'url(images/2-fondo-6.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g6").click(function(e){
                $(".banner_w3ls").css(tema2g6);
            })

			var tema2g7 = { "background" :'url(images/2-fondo-7.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g7").click(function(e){
                $(".banner_w3ls").css(tema2g7);
            })

            var tema2g8 = { "background" :'url(images/2-fondo-8.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g8").click(function(e){
                $(".banner_w3ls").css(tema2g8);
            })

            var tema2g9 = { "background" :'url(images/2-fondo-9.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g9").click(function(e){
                $(".banner_w3ls").css(tema2g9);
            })

			var tema2g10 = { "background" :'url(images/2-fondo-10.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g10").click(function(e){
                $(".banner_w3ls").css(tema2g10);
            })

            var tema2g11 = { "background" :'url(images/2-fondo-11.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g11").click(function(e){
                $(".banner_w3ls").css(tema2g11);
            })

            var tema2g12 = { "background" :'url(images/2-fondo-12.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-g12").click(function(e){
                $(".banner_w3ls").css(tema2g12);
            })

			var tema2c1 = { "background" :'url(images/2-azul.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c1").click(function(e){
                $(".banner-info").css(tema2c1);
            })

            var tema2c2 = { "background" :'url(images/2-rosa.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c2").click(function(e){
                $(".banner-info").css(tema2c2);
            })

            var tema2c3 = { "background" :'url(images/2-rojo.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c3").click(function(e){
                $(".banner-info").css(tema2c3);
            })

			var tema2c4 = { "background" :'url(images/2-verde.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c4").click(function(e){
                $(".banner-info").css(tema2c4);
            })

            var tema2c5 = { "background" :'url(images/2-morado.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c5").click(function(e){
                $(".banner-info").css(tema2c5);
            })

            var tema2c6 = { "background" :'url(images/2-gris.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c6").click(function(e){
                $(".banner-info").css(tema2c6);
            })

            var tema2c7 = { "background" :'url(images/2-azul-claro.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c7").click(function(e){
                $(".banner-info").css(tema2c7);
            })

            var tema2c8 = { "background" :'url(images/2-rosa-claro.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c8").click(function(e){
                $(".banner-info").css(tema2c8);
            })

			var tema2c9 = { "background" :'url(images/2-amarillo.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c9").click(function(e){
                $(".banner-info").css(tema2c9);
            })

            var tema2c10 = { "background" :'url(images/2-cafe.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c10").click(function(e){
                $(".banner-info").css(tema2c10);
            })

            var tema2c11 = { "background" :'url(images/2-verde-fuerte.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c11").click(function(e){
                $(".banner-info").css(tema2c11);
            })

			var tema2c12 = { "background" :'url(images/2-rojo.png) no-repeat center', "background-size": 'cover'};
            $("#btn2-c12").click(function(e){
                $(".banner-info").css(tema2c12);
            })

			var tema3g1 = { "background" :'url(images/3-fondo-1.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g1").click(function(e){
                $(".banner_w3ls").css(tema3g1);
            })

            var tema3g2 = { "background" :'url(images/3-fondo-2.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g2").click(function(e){
                $(".banner_w3ls").css(tema3g2);
            })

            var tema3g3 = { "background" :'url(images/3-fondo-3.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g3").click(function(e){
                $(".banner_w3ls").css(tema3g3);
            })

			var tema3g4 = { "background" :'url(images/3-fondo-4.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g4").click(function(e){
                $(".banner_w3ls").css(tema3g4);
            })

            var tema3g5 = { "background" :'url(images/3-fondo-5.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g5").click(function(e){
                $(".banner_w3ls").css(tema3g5);
            })

			var tema3g6 = { "background" :'url(images/3-fondo-6.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g6").click(function(e){
                $(".banner_w3ls").css(tema3g6);
            })

			var tema3g7 = { "background" :'url(images/3-fondo-7.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g7").click(function(e){
                $(".banner_w3ls").css(tema3g7);
            })

            var tema3g8 = { "background" :'url(images/3-fondo-8.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g8").click(function(e){
                $(".banner_w3ls").css(tema3g8);
            })

            var tema3g9 = { "background" :'url(images/3-fondo-9.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g9").click(function(e){
                $(".banner_w3ls").css(tema3g9);
            })

			var tema3g10 = { "background" :'url(images/3-fondo-10.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g10").click(function(e){
                $(".banner_w3ls").css(tema3g10);
            })

            var tema3g11 = { "background" :'url(images/3-fondo-11.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g11").click(function(e){
                $(".banner_w3ls").css(tema3g11);
            })

			var tema3g12 = { "background" :'url(images/3-fondo-12.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-g12").click(function(e){
                $(".banner_w3ls").css(tema3g12);
            })

            var tema3c1 = { "background" :'url(images/3-azul.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c1").click(function(e){
                $(".banner-info").css(tema3c1);
            })

			var tema3c2 = { "background" :'url(images/3-rosa.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c2").click(function(e){
                $(".banner-info").css(tema3c2);
            })

            var tema3c3 = { "background" :'url(images/3-rojo.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c3").click(function(e){
                $(".banner-info").css(tema3c3);
            })

            var tema3c4 = { "background" :'url(images/3-verde.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c4").click(function(e){
                $(".banner-info").css(tema3c4);
            })

			var tema3c5 = { "background" :'url(images/3-morado.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c5").click(function(e){
                $(".banner-info").css(tema3c5);
            })

            var tema3c6 = { "background" :'url(images/3-azul-rey.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c6").click(function(e){
                $(".banner-info").css(tema3c6);
            })

			var tema3c7 = { "background" :'url(images/3-azul-claro.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c7").click(function(e){
                $(".banner-info").css(tema3c7);
            })

			var tema3c8 = { "background" :'url(images/3-rosa-fuerte.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c8").click(function(e){
                $(".banner-info").css(tema3c8);
            })

            var tema3c9 = { "background" :'url(images/3-gris.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c9").click(function(e){
                $(".banner-info").css(tema3c9);
            })

            var tema3c10 = { "background" :'url(images/3-naranja.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c10").click(function(e){
                $(".banner-info").css(tema3c10);
            })

			var tema3c11 = { "background" :'url(images/3-verde-fuerte.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c11").click(function(e){
                $(".banner-info").css(tema3c11);
            })

            var tema3c12 = { "background" :'url(images/3-negro.png) no-repeat center', "background-size": 'cover'};
            $("#btn3-c12").click(function(e){
                $(".banner-info").css(tema3c12);
            })

        });
    </script>
	<a href="https://wa.me/525537002078" style="display: block;" id="toTop"> <span> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>