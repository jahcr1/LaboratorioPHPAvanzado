<?php 
session_start();

header("Content-type: image/jpeg"); /* le damos formato al encabezado o archivo */
$img = imagecreate(120, 40); /* parametros en pixel */

$color_fondo = imagecolorallocate($img, 179, 215,255);

$color_texto = imagecolorallocate($img, 61, 0, 155);
imagestring($img, 5, 30, 10, $_SESSION['captcha'], $color_texto);

imagejpeg($img);

?>