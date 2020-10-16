<!DOCTYPE html>
<html lang="es">
<head>
    >
    <title>Eliminar</title>
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

          mysqli_query($conexion, "DELETE from infousuarios where Usuario='$Usuario'")
          or die ("Error al eliminar usuario");

          mysqli_close($conexion);
          echo "Datos eliminados";
    ?>
</body>
</html>