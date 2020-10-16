<?php 
     $server= "localhost";
     $usuari= "Diego";
     $contraseñ= "20030315";
     $bd= "loginplataforma";
     
     $conexion = mysqli_connect($server,$usuari,$contraseñ,$bd)
           or die ("ERROR DE CONEXION");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../CSS/Style.css"> <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>Ver registros</title>
</head>
<body class="bd">

<img class="esc2" src="../Resources/escudo.png" height="80" width="70" alt="escudo colegio empresarial">
    <header class="headerregistros">Plataforma 2.0 Colegio Empresarial</header> <br>

<div id="bbd">
    <table>
		<tr>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>GrupoYGrado</td>
			<td>Usuario</td>
      <td>Contraseña</td>	
      <td>TipoUsuario</td>	
		</tr>

		<?php 
		$sql="SELECT * from infousuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombres'] ?></td>
			<td><?php echo $mostrar['Apellidos'] ?></td>
			<td><?php echo $mostrar['GrupoYGrado'] ?></td>
			<td><?php echo $mostrar['Usuario'] ?></td>
      <td><?php echo $mostrar['Contraseña'] ?></td>
      <td><?php echo $mostrar['TipoUsuario'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table> </div>



    
           
</body>
</html>