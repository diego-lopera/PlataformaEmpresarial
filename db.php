<?php

$servidor = "localhost";
$usuario = "Diego";
$password = "20030315";
$base_datos = "loginplataforma";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

function formatearFecha($fecha){
    return date('g:i a', strtotime($fecha));
}

?>