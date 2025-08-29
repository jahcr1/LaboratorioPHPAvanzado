<?php session_start(); ?>

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
		<h2>Ingreso de usuario</h2>
<!-- Aca va el formulario de ingreso-->
<div class="container">
	<form action="./componentes/verificarusuario.php" method="POST" class="form-horizontal" autocomplete="off">

	<div class="form-group mb-3">
		<label for="correo" class="col-md-3 control-label">Ingrese un correo electrónico: </label>
		<div class="col-md-9">
			<input type="email" class="form-control" name="correo" placeholder="pepito@hotmail.com" required maxlength="50">
		</div>
	</div>

	<div class="form-floating mb-3">
		<label for="pass">Ingrese una contraseña</label>
		<input type="password" class="form-control" name="pass" placeholder="Password" required maxlength="10">
	</div>

	<div class="form-group">
		<div class="cold-md-offset-3 col-md-9">
			<button type="submit" class="btn btn-secondary btn-lg mt-3 p-2">Ingresar</button>
		</div>
	</div>

	</form>
</div>

<?php    

if(isset($_GET['ok'])) {

	//
}

?> 



<!-- Ponemos el form de registro-->
<h2>Registro de usuario</h2>
<div class="container">
	<form action="./componentes/cargarusuario.php" method="POST" id="formularioReg">
		<input type="text" name="nombre" placeholder="Nombre" required maxlength="30">
		<input type="text" name="apellido" placeholder="Apellido" required maxlength="50">
		<input type="email" name="correo" placeholder="Correo Electronico" required maxlength="120">
		<input type="text" name="nombreUsuario" placeholder="Nombre de Usuario" required maxlength="20">
		<input type="password" name="pass" placeholder="Password" required maxlength="10">
		<input type="submit" value="Registrar">
	</form>

	<?php 
	include ("recursos.php");

	if(isset($_GET['ok_reg'])){
		echo "<p>Usuario Registrado</p>";
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