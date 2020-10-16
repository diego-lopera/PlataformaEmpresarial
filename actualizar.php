<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actualizar</title>
</head>
<body>
    <?php 
     $server= "localhost";
     $usuari= "Diego";
     $contraseñ= "20030315";
     $bd= "loginplataforma";
     
     $conexion = mysqli_connect($server,$usuari,$contraseñ,$bd)
           or die ("ERROR DE CONEXION");

           $Usuario = $_POST['Usuario'];
           $Contraseña = $_POST['Contraseña'];
           mysqli_query($conexion, "UPDATE infousuarios set  Contraseña='$Contraseña' where Usuario='$Usuario'")
           or die ("Error al actualizar");

           mysqli_close($conexion);
           echo "Datos Actualizados";
 
    ?>
</body>
</html>