<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Gracias | Ilecnova</title>
		<meta name="viewport" content="width=device-width, maximun-escale1=1" />
		<meta name="description" content="">
		<meta charset="UTF-8">
		<meta name="keywords" content="">
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
		<link rel="stylesheet" type="text/css" href="css/estilos-msj-enviado.css" />
		<link rel="stylesheet" type="text/css" href="css/header.css" />
		<link rel="stylesheet" type="text/css" href="css/footer.css" />
		<script type="text/javascript" src="js/prefixfree.min.js" ></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script>
	</head>
<body>
	<section id="contenedor">
		<?php include("scripts/header.php"); ?>
 		<section id="cuerpo" class="shadow">
	 		<article class="articulo">
	 				<?php

							$nombre = $_POST['nombre'];
							$apellidos = $_POST['apellidos'];
							$email = $_POST['email'];
							$telefono = $_POST['telefono'];
							$direccion = $_POST['direccion'];
							$mensaje = $_POST['mensaje'];

						if($nombre==="" or $apellidos==="" or $email==="" or $telefono==="" or $mensaje===""){
							echo "<p>Los campos Nombre, Apellidos, Email, Teléfono y Mensaje son obligatorios. Por favor intente de nuevo</p>";
						}else{
						if(filter_var($email, FILTER_VALIDATE_EMAIL)){
								if(is_numeric($telefono)){
										$destinatario = 'marcomtz_02@hotmail.com';
										$asunto = 'Contacto desde Ilecnova.com.mx';
										$mensaje_mail = "Este mensaje fue enviado por ".$nombre." ".$apellidos."\r\n";
										$mensaje_mail .= "Email: ".$email."\r\n";
										$mensaje_mail .= "Telefono: ".$telefono."\r\n";
										$mensaje_mail .= "Direccion: ".$direccion."\r\n";
										$mensaje_mail .= "Mensaje: ".$mensaje."\r\n";
										$mensaje_mail .= "Enviado el: ". date('d/m/y', time());

										if(mail($destinatario, $asunto, $mensaje_mail)){
											echo "<h1>Gracias por contactarnos!</h1>";
										}else{echo "<p>Ocurrio un error al enviar el mensaje, porfavor escribanos a: info(arroba)ilecnova.com.mx</p>";}
								}else{echo "<p>El campo Teléfono solo admite carecteres númericos. Por favor intente de nuevo</p>";}
							}else{echo "<p>Por favor ingrese un email válido. Por favor intente de nuevo</p>";}
						}
					?>
	 			</p>
	 		</article>
 		</section>
		<?php include("scripts/footer.php"); ?>
	</section>
	<script type="text/javascript" src="js/mostrarOcultar.js"></script>
</body>
</html>







