<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

if (isset($_POST['enviar_comm'])) { ?> <?php

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    setlocale(LC_TIME,'spanish');

    $contenido = "<p>Nombre: ".$_POST['nombre']."</p>\n<p>Apellido: ".$_POST['apellido']."</p>\n<p>Email: ".$_POST['correo']."</p>\n<p>Comentario: ".$_POST['comentario']."</p>\n<p>Hora: ".strftime('%c')."</p><hr/>\n";
            $datos = fopen("../datos_personales.txt",'a+');
            fputs($datos, $contenido);
            fpassthru($datos);
            fclose($datos);
    }

header("Location:../unidad3.php?ok#comentarios");
?>