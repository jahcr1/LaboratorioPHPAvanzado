<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_anio = $_POST['anio'];

$fecha_ingresada = date("Y-m-d",mktime(0,0,0, $fecha_mes, $fecha_dia, $fecha_anio));
$fecha_actual = date("Y-m-d");

if ($fecha_ingresada<$fecha_actual) { 
    header("Location:../unidad2.php?yapaso#mensaje");

} 
    else {
        $calculo = strtotime($fecha_ingresada)- strtotime($fecha_actual);
        $dias = intval($calculo/86400);
        header("Location:../unidad2.php?dias=$dias");

    }



?>