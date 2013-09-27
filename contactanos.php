<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Contáctanos, queremos escucharte | ilecnova</title>
		<meta name="viewport" content="width=device-width, maximun-escale1=1" />
		<meta name="description" content="Obtenga información sobre Sistemas de Energía y productos de Energía Renovables en la Riviera Maya.">
		<meta charset="UTF-8">
		<meta name="keywords" content="ilecnova, Ingeniería en Energía Renovable, Riviera Maya">
		<meta name="author" content="">
		<meta name="Publisher" content="Ilecnova">
		<meta name="google-site-verification" content="">
		<meta name="robots" content="noindex, nofollow">
		<meta href="" rel="author">
		<meta name="distribution" content="web">
		<meta name="copyright" content="">
		<meta name="classification" Content="">
		<meta name="alexaVerifyID" content="">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
		<link rel="canonical" href="http://ilecnova.com.mx/">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/estilos-generales.css" />
		<link rel="stylesheet" type="text/css" href="css/estilos-contacto.css" />
		<link rel="stylesheet" type="text/css" href="css/header.css" />
		<link rel="stylesheet" type="text/css" href="css/footer.css" />
		<link rel="stylesheet" type="text/css" href="css/highlight-ilecnova.css" />
		<script type="text/javascript" src="js/prefixfree.min.js" ></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script>
		<script type="text/javascript" src="js/validar-form.js" ></script>
		<script src="https://maps.googleapis.com/maps/api/js?&sensor=false"></script>
		<script type="text/javascript" src="js/mi_mapa.js" ></script>
	</head>
<body>
	<section id="contenedor">
		<?php include("scripts/header.php"); ?>
 		<section id="cuerpo" class="shadow">
	 		<article class="articulo">
	 			<h1>Dirección</h1>
	 			<div id="map-canvas"></div>
	 			<figure>
	 					<img src="img/logo-oficial.png" />
	 					<figcaption>
	 						<div><strong>ilecnova</strong></div>
	 						<div><span>Ingeniería en Energía Renovable</span></div>
	 					</figcaption>
	 			</figure>
	 			<p>
	 				Reg. XX, SM XX, MZ XX, LT. XX, C. de las torres<br />
	 				Col. Galaxia del Carmen II, CP. 77710<br />
	 				Playa del Carmen, Q. Roo
	 			</p>
	 			<p>
	 				Telefono: 984 000 00 00<br />
	 				Email: info@ilecnova.com.mx<br />
	 			</p>
	 			<p>
	 				Horarios de asistencia: de 8.00 a 17.00 hrs<br />
	 				Lunes a Sábado<br />
	 			</p>
	 			<p>
	 				Mtro. Francisco Martínez<br />
	 				Sistemas de Energía Alternativas
	 			</p>
	 		</article><!--
	 		--><article class="articulo">
	 			<h2>Formulario de contacto</h2>
	 			<div class="error" id="div_error">
	 				<p class="p_error" id="p_error"></p>
	 				</div>
	 			<form name="form-contactacto" action="gracias-por-contactarnos.php" method="post" id="" onsubmit="return validar_form()">
		 				<p>
		 					<label>*Nombre</label>
		 					<input class="style-input" id="nombre" type="text" value="" name="nombre" maxlength="40" required/>
		 				</p>
		 				<p>
		 					<label>*Apellidos</label>
		 					<input class="style-input" id="apellidos" type="text" value="" name="apellido" maxlength="40" required/>
		 				</p>
		 				<p>
		 					<label>*Email</label>
		 					<input class="style-input" id="email" type="text" value="" name="email" maxlength="30" required/>
		 				</p>
		 				<p>
		 					<label>*Teléfono</label>
		 					<input class="style-input" id="telefono" type="text" value="" name="telefono" maxlength="10" required/>
		 				</p>
		 				<p>
		 					<label>Dirección</label>
		 					<input class="style-input" type="text" value="" name="direccion" maxlength="100" required/>
		 				</p>
		 				<p>
		 					<label>*Mensaje</label>
		 					<textarea class="style-input" id="mensaje" rows="5" value="" name="mensaje" required/></textarea>
		 				</p>
		 				<input class="btn" type="submit" value="Enviar" name="envio" id="" />
	 			</form>
	 		</article>
 		</section>
		<?php include("scripts/footer.php"); ?>
	</section>
	<script type="text/javascript" src="js/mostrarOcultar.js"></script>
</body>
</html>