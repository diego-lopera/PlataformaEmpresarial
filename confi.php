<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion de usuario</title>
</head>
<body>
<?php 
     $server= "localhost";
     $usuari= "Diego";
     $contraseñ= "20030315";
     $bd= "loginplataforma";
     
     $conexion = mysqli_connect($server,$usuari,$contraseñ,$bd)
           or die ("ERROR DE CONEXION");

           $Usuario = $_POST['Usuariol'];
           $Contraseña = $_POST['Contraseñal'];
           mysqli_query($conexion, "UPDATE infousuarios set Contraseña='$Contraseña' where Usuario='$Usuario'")
           or die ("Error al actualizar");

           mysqli_close($conexion);
           echo "Datos Actualizados";
 
    ?>
</body>
</html>