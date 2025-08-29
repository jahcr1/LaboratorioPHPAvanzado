<?php 
include("clases/basededatos.php");
include("clases/producto.php");
include("clases/carrito.php");
include("clases/user.php");


$baseDatos = new BaseDatos('localhost', 'root', '', 'phpavanzado');
$productos = new producto($baseDatos);

$compras = new carrito($baseDatos);

$nick = new user($baseDatos);

?>