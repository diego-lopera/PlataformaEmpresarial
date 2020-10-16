<?php 

$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];

session_start();
$_SESSION['Usuario']=$Usuario;

include('db1.php');

$consulta="SELECT*FROM infousuarios where Usuario='$Usuario' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conexion1, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:adm.php");
}else {
    ?>
    <?php
    include("index2.php");
    ?>
    <h1>Error, Usuario no valido</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion1);