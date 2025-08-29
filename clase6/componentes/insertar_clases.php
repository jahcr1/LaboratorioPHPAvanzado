<?php 
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

$conexion = mysqli_connect('localhost','root','','phpavanzado') or exit ("No se pudo conectar a la BASE DE DATOS LOCAL.");

mysqli_query($conexion, "INSERT INTO clases VALUES(DEFAULT,'$unidad','$fecha')");

header("Location:../unidad1.php?ok");

?>