<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de usuarios</title>
</head>
<body>
<?php 
$server= "localhost";
$usuari= "Diego";
$contraseñ= "20030315";
$bd= "loginplataforma";

$conexion = mysqli_connect($server,$usuari,$contraseñ,$bd)
      or die ("ERROR DE CONEXION");

      $Nombres = $_POST['Nombres'];
      $Apellidos =  $_POST['Apellidos'];
      $GG =  $_POST['GG'];
      $Usuario =  $_POST['Usuario'];
      $Contraseña =   $_POST['Contraseña'];
      $TP =  $_POST['TU'];

      $insertar = "INSERT into infousuarios values ('$Nombres','$Apellidos','$GG','$Usuario','$Contraseña','$TP')";

      $resultado = mysqli_query($conexion, $insertar)
      or die ("Error al insertar");

      mysqli_close($conexion);
      echo "Datos insertados correctamente";

 ?>
    
</body>
</html>