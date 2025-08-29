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
		<td><a href="altas.php?codigiio=<?php echo $mostrarProd[$i]['codigo']?>&producto=lala">Comprar</a></td>
	</tr>
<?php } ?>
		</table>
		

	</section>
	
	<aside>
    <h2>Carrito</h2>
<?php 
/*if(isset($_GET['codigo'])) {

$seleccionar = $productos->listar_producto($_GET['codigo'] );


/*COMO HAGO PARA PASAR COMO ID TODOS LOS DATOS QUE TRAIGO EN EL ARRAY DEL PRODUCTO Q SELECCIONO PARA PLASMARLO EN LA TABLA DEL CARRITO??? no se como pasarle los parametros

	
}*/
//$sel = $compras->introducir_compra();
/*
$cod = $_GET['codigo'];
$list = $compras->listar_compra($cod);

?>
<table>
	<tr>
		<th>Producto</th>
		<th>Precio</th>
	</tr>
<?php
	for($i=0; $i < count($list); $i++) {
?>
	<tr>
		
		<td><?php echo $list[$i]['producto']?></td>
		<td><?php echo $list[$i]['precio']?></td>
		<td><a href="unidad7.php?codigo=<?php echo $list[$i]['codigo']?>">eliminar</a></td>
	</tr>
<?php } ?>
		</table>

*/
?>
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>