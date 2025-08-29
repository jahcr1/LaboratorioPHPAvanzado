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
		<h2>Productos</h2>
		<?php 
		include("recursos.php");
		

		$mostrarProd = $productos->listar_productos();
		$mostrarCarrito = $compras->listar_compra();
		?>
		
		<table>
	<tr>
		<th>Codigo</th>
		<th>Producto</th>
		<th>Descripcion</th>
		<th>Precio</th>
	</tr>
<?php
	for($i=0; $i < count($mostrarProd); $i++) {
?>
	<tr>
		<td><?php echo $mostrarProd[$i]['codigo']?></td>
		<td><?php echo $mostrarProd[$i]['producto']?></td>
		<td><?php echo $mostrarProd[$i]['descripcion']?></td>
		<td><?php echo $mostrarProd[$i]['precio']?></td>
		<td><a href="altas.php?codigo=<?php echo $mostrarProd[$i]['codigo']?>&producto=<?php echo $mostrarProd[$i]['producto']?>&descripcion=<?php echo $mostrarProd[$i]['descripcion']?>&precio=<?php echo $mostrarProd[$i]['precio']?>">Comprar</a></td>
	</tr>
<?php } ?>
		</table>
		<p id=lala></p>
	</section>
	
	<aside>
    <h2>Carrito</h2>

	<table>
	<tr>
		
		<th>Codigo</th>
		<th>Producto</th>
		<th>Precio</th>
	</tr>
	<?php 
	for($i=0; $i < count($mostrarCarrito); $i++) {
	?>
	<tr>
		
		<td><?php echo $mostrarCarrito[$i]['codigo']?></td>
		<td><?php echo $mostrarCarrito[$i]['producto']?></td>
		<td><?php echo $mostrarCarrito[$i]['precio']?></td>
		<td><a href="bajas.php?codigo=<?php echo $mostrarCarrito[$i]['id_compra']?>">Eliminar</a></td>
		
	</tr>
<?php } ?>
	</table>
	

    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>