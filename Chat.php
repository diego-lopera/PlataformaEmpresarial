<?php

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Deco_Chat.css">

    <script>
        function ajax(){
        var req = new XMLHttpRequest();

        req.onreadystatechange = function(){
         if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }

    req.open('GET','insert.php',true);
    req.send();
    }

    setInterval(function(){ajax();},1000);
        
    </script>

    <title>CHAT</title>
</head>
<body onLoad="ajax();" >
    <div id="contenedor" class="contenedor" >
        <div id="caja-chat" class="caja-chat">
            <div id="chat" class="chat">
            </div>
        </div>
        <form method="POST" action="Chat.php">
            <input type="text" name="Nombre" placeholder="ingresa tu nombre">
            <textarea name="Mensaje" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        
        <?php
             if(isset($_POST['enviar']) && $_POST['Nombre'] == "" && $_POST['Mensaje'] == ""){
                echo "Invalido ,meta lo que es";
                
            }else if(isset($_POST['enviar'])){
                    $nombre = $_POST['Nombre'];
                    $mensaje = $_POST['Mensaje'];

                    $consulta = "INSERT INTO chat (Nombre,Mensaje) VALUES ('$nombre','$mensaje')";
                    $ejecutar = $conexion->query($consulta);
            }
        ?>

    </div>
</body>
</html>