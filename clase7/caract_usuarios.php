<?php 

include ("./clases/usuarios.php");

$usuario = new Usuarios('Martin','Contreras','25/03/1975');

$usuario->imprime_caracteristicas ();

?>