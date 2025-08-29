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
		<h2>Eventos</h2>
		<h4>Ingrese una fecha para calcular los dias restantes</h4>
		<div id="formulario"">
		<form action="componentes/calculo_fecha.php" method="POST">
			<label for="dia">Dia:</label>
			<input type="number" name="dia" min="1" max="31" required>
			<label for="mes">Mes:</label>
			<input type="number" name="anio" min="1" max="12" required>
			<label for="anio">Año:</label>
			<input type="number" name="anio" min="1900" required>
			<input type="submit" value="Calcular">
		</form>
		</div>

		<div id="mensaje">
			<?php 
			if(isset($_GET['yapaso'])) {
				echo "<p>La fecha ingresada es menor a la fecha de hoy, ingrese otra fecha </p>";
		}
			?>
			<?php 
			if(isset($_GET['dias'])) {
				echo "<p> Faltan ".$_GET['dias']." dias para la fecha ingresada.</p>";
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