<?php 
/* como se esta incluyendo este script en otro (unidad4), 
se debe salir como ruta desde la misma ubicacion 
desde donde se invoco la funcion, en este caso unidad 4 */
$src_img = imagecreatefromjpeg("imagenes/unidad4.jpg"); 
$alto = imagesy($src_img)/5;
$ancho = imagesx($src_img)/5;
$dst_img = imagecreatetruecolor($ancho, $alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($dst_img, "imagenes/hola.jpg");
imagedestroy($dst_img);


?>