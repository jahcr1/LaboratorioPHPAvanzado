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
		<h2>Comentarios</h2>
	

	<div>
		<div class="form-base">
			<form action="componentes/comentarios.php" method="POST">
				<label for="nombre"><span class="label_form">Escriba su nombre.</span></label>
				<input type="text" name="nombre" maxlength="50" placeholder="Nombre" required>
				<label for="apellido"><span class="label_form">Escriba su Apellido.</span></label>
				<input type="text" name="apellido" placeholder="Apellido"  maxlength="70" required>
				<label for="correo"><span class="label_form">Correo Electrónico.</span></label>
				<input type="email" name="correo" maxlength="120" placeholder="Escriba su correo Electrónico" required>
				<label for="comentario"><span class="label_form">Escriba su comentario.</span></label>
				<textarea name="comentario" placeholder="Escriba su comentario aqui..." cols="30" rows="10" maxlength="500"></textarea>
				<input type="submit" value="Enviar Comentario" name="enviar_comm">

			</form>

		</div>
		<div id="comentarios">
			<?php 
			echo "<h3>Comentarios</h3>";

		if (file_exists("datos_personales.txt")) { ?>
			<?php	$archivo = fopen("datos_personales.txt", "r") or die ("No se puede leer el archivo.");
				fpassthru($archivo);
			}
			else {
				echo "<p>No existe el archivo de logs.</p>";
			}
			
			?>
		</div>
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