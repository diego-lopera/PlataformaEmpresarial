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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css"> <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Deco_Trabajos.css">
    <link rel="stylesheet" href="../CSS/fontello.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1>Colegio Empresarial</h1>
            <input type="checkbox" id="menu-bar" class="menu-bar">
            <label class="icon-th" for="menu-bar"></label>

            <nav class="menu">
                <a href="">CLASES</a>
                <a href="https://empresarial.edu20.org/portal_news/list">NOTICIAS</a>
                <a href="Chat.php">CHAT</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br>
   
   
   <div id="bbbd">
    <div id="mmt">
    <table>
		<tr>
			<td>Materia</td>
			<td>Tarea</td>
			<td>FechaLimite</td>
		</tr>

		<?php 
		$sql="SELECT * from materias";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Materia'] ?></td>
			<td><?php echo $mostrar['Tarea'] ?></td>
			<td><?php echo $mostrar['FechaLimite'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table> </div></div>


    

</body>
</html>