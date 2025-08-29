<?php 
include("recursos.php");

$cod = $_GET['codigo'];

$compras->eliminar_compra($cod);

header("Location: unidad7.php");



?>