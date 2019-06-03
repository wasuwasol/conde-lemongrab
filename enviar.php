<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contacto - Lemongrab</title>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin Slab"><link rel="stylesheet" type="text/css" href="css/estilo-contacto.css">
	</head>	
	<body>
		<div id="contenedor" class="gradient-pattern">
			<header>
				<h1>El Conde de Lemongrab</h1>
				<a href="index2.html">
				<img src= "img/titulo2.png" alt="El Conde de Lemongrab" 
				style="width:722px;height:260px;">
				</a>
			</header>
			<nav> 
				<ul>
				  <li><a href="index2.html">Inicio</a></li>
				  <li><a href="galeria.html">Galería</a></li>
				  <li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
		<div>
			<article id="presentacion1">
				<div class="formulario">
					<?php
	$destino="jschenone88@gmail.com";
	$remite="From:<Lemongrab>j.schenone88@gmail.com";
	$asunto="Contacto desde la Lemongrab";
	$mensaje="Nombre: ".$_POST['nombre']."\n";
	$mensaje.="Apellido: ".$_POST['apellido']."\n";
	$mensaje.="¿Cuál es tu ser?: ".$_POST['pregunta1']."\n";
	$mensaje.="¿Como va tu día?: ".$_POST['pregunta2']."\n";
	$mensaje.="Si fueras a salir con una de las princesas de hora de aventura ¿Cuál sería?: ".$_POST['pregunta3']."\n";
	$mensaje.="¿En que casa de hora de aventuras vivirías?: ".$_POST['pregunta4']."\n";
	$mensaje.="E-mail: ".$_POST['email']."\n";
	$mensaje.="Mensaje: ".$_POST['msj']."\n";
	
	if (isset($_POST['nombre']) or isset($_POST['email'])){
		mail($destino,$asunto,$mensaje);
		echo "<p>Gracias por el contacto, en breve recibirá un contacto.</p>";
	}else{
		echo "<p>Error: Por favor complete todos los campos del formulario.</p>";
		echo "<p><a href='contacto.html'>Volver</a></p>";
	}
	?>
				</div> 
			</article>
		</div>
			<footer>
					<a href="webextra.html">
					<h3 class="nombrepropio">Jorge Schenone</h3>
					</a>
				<div id="redes">
					<a href="https://twitter.com/hashtag/adventuretime">
					<img src="img/twitter.png">
					</a>
						<a href="https://www.youtube.com/channel/UCnuY1SnJjQPHFNHcihjd3lg/featured">
						<img src="img/youtube.png">
						</a>
					<a href="https://www.facebook.com/adventuretime/?fref=ts">
					<img src="img/facebook.png">
					</a>
				</div>
			</footer>
		</div>
	</body>
</html>

