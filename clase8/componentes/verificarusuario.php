<?php 
session_start();

$correo = $_POST['correo'];
$pass = $_POST['pass'];

include("../recursos.php");

$nick->verificaUsuario($_POST['correo'], $_POST['pass']);

header("Location: ../unidad8.php?ok_reg");

?>