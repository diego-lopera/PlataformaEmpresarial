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

      $materia = $_POST['Materia'];
      $tarea =  $_POST['Tarea'];
      $FL =  $_POST['FechaLimite'];

      $insertar = "INSERT into materias values ('$materia','$tarea','$FL')";

      $resultado = mysqli_query($conexion, $insertar)
      or die ("Error al insertar");

      mysqli_close($conexion);
      echo "Datos insertados correctamente";

 ?>
    
</body>
</html>