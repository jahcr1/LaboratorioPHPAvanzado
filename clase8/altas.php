<?php 
include("recursos.php");

$cod = $_GET['codigo'];

$variable = $productos->listar_producto($cod);

header("Location: unidad7.php");

?>