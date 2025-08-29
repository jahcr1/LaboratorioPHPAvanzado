<?php 
session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

if($codigo == $_SESSION['captcha']) {

    $conexion = mysqli_connect('localhost','root','','phpavanzado') or exit ("No se pudo conectar a la BASE DE DATOS LOCAL.");

    /**
     * aca poner la query para insertar datos en la tabla consultas
     */
    mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT,'$nombre','$apellido','$correo','$consulta')");

    header("Location:../unidad5.php?ok");
    
} else {
    header("Location:../unidad5.php?malisimo");
}

?>