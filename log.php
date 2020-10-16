<?php 

require 'conectar.php';
sleep(2);

$usuarios = $mysqli->query("SELECT Nombres, TipoUsuario
FROM infousuarios WHERE Usuario = '".$_POST['Usuariop']."'
AND Contraseña = '".$_POST['Contraseñap']."'");


if($usuarios->num_rows==1):
   $datos = $usuarios->fetch_assoc();
   echo json_encode(array('error' => false, 'tipo' => $datos['TipoUsuario']));
else:
    echo json_encode(array('error' => true));
endif;       

$mysqli->close();

?>