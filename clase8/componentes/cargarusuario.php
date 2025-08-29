<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$usuario = $_POST['nombreUsuario'];
$password = password_hash($_POST['pass'], PASSWORD_DEFAULT, array('cost'=>4));

include("../recursos.php");

$nick->registrarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['nombreUsuario'], $password );


header("Location: ../unidad8.php?ok_reg");

?>