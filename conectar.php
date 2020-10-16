<?php 
    $mysqli = new mysqli('localhost','Diego','20030315','loginplataforma');
   
    if($mysqli->connect_errno):
        echo "Error de conexion ".$mysqli->connect_error;
    endif;    

   /* $conexion=mysqli_connect("localhost","Diego","20030315","loginplataforma");*/
?>