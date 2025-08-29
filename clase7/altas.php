<?php 
include("recursos.php");

$cod = $_GET['codigo'];
$producto = $_GET['producto'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$compras->introducir_compra($cod,$producto,$descripcion,$precio);

/*$variable = $productos->listar_producto($cod);*/

header("Location: unidad7.php");
ec

?>