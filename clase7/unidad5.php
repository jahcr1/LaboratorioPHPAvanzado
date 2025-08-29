<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>

		<?php 
		
		function contenido_captcha() {
			$patron = "0123456789abcdefghijklmnopqrstuvxyz!%&/";

			$clave = '';

			for ($i=0; $i<5; $i++) {
				$clave .= $patron[rand(0,35)];
			}
			return $clave;

		}
		$_SESSION['captcha'] = contenido_captcha();

		?>

		<div class="form-base">
			<form action="componentes/cargar.php" method="POST">
				<label for="nombre"><span class="label_form">Escriba su nombre.</span></label>
				<input type="text" name="nombre" maxlength="50" placeholder="Nombre" required>
				<label for="apellido"><span class="label_form">Escriba su Apellido.</span></label>
				<input type="text" name="apellido" placeholder="Apellido"  maxlength="70" required>
				<label for="correo"><span class="label_form">Correo Electrónico.</span></label>
				<input type="email" name="correo" maxlength="120" placeholder="Escriba su correo Electrónico" required>
				<label for="consulta"><span class="label_form">Escriba su consulta.</span></label>
				<textarea name="consulta" placeholder="Escriba su consulta aqui..." cols="30" rows="10" maxlength="500"></textarea>

				<!-- Aca inserto la imagen captcha creada en php con formato de imagen -->
				<img src="componentes/imagen_captcha.php" alt="No se vé no?">
				<input type="text" name="codigo" placeholder="Ingrese el captcha" required>

				<input type="submit" value="Enviar Consulta" name="enviar_consulta" style="margin-bottom: 20px;">
			</form>
		</div>
		<div id="mensaje">
			
		<?php 
		
		if(isset($_GET['ok'])){
			
			echo "<p>Tus datos fueron cargados correctamente.</p>";
		} else if (isset($_GET['malisimo'])) {
			echo "<p>Tus datos ni se cargaron guachin.</p>";
		}

		?>
		</div>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>