<div id="mostrar_tabla">
    <h3 style="margin-left:200px; margin-top:10px; padding:5px;">Tabla de Clases</h3>
    
    <?php $conexion = mysqli_connect('localhost','root','','phpavanzado') or exit ("No se pudo conectar a la BASE DE DATOS LOCAL.");
    $datos = mysqli_query($conexion, "SELECT * FROM clases");
    while ($lista_clases = mysqli_fetch_assoc($datos)) {

    ?>

    <div class="clases">
        <p>Unidad: <?php echo $lista_clases['unidad']; ?></p>
        <p>Fecha:<?php echo $lista_clases['fecha']; ?></p>
    </div>
    <?php } ?>
</div>