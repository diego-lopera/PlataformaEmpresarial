<?php

    include "db.php";

    $consulta = "SELECT * FROM chat ORDER BY ID DESC";
    $ejecutar = $conexion->query($consulta);
        while($fila = $ejecutar->fetch_array()):
?>
    <div id="datos-chat" class="datos-chat">
        <span style="color: blue"><?php echo $fila['Nombre']; ?>: </span>
        <span style="color: rgb(68, 62, 62);"><?php echo $fila['Mensaje']; ?></span>
        <span style="float: right;"><?php echo formatearFecha($fila['Fecha']); ?></span>
    </div>
 <?php endwhile; ?>