<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Plataforma 2.0 Col_Empre</title>
</head>
<body class="Bodyadm">
    <img class="esc3" src="../Resources/escudo.png" height="80" width="70" alt="escudo colegio empresarial">
    <header class="headerindex3">Plataforma 2.0 Colegio Empresarial</header> 

    <div class="registrar">
    <form action="registro.php" method="POST">
        <p>Registar Usuario.</p>
    <p> Nombres: <input type="text" name="Nombres"/><br/></p>
    <p>Apellidos: <input type="text" name="Apellidos"> <br/></p>
    <p>Grado y Grupo: <input type="text" name="GG"> <br/></p>
    <p>Usuario: <input type="text" name="Usuario"> <br/></p>
    <p>Contraseña: <input type="text" name="Contraseña"> <br></p>
    <p>Tipo Usuario: <input type="text" name="TU"> <br/></p>

    <input class="btnañadir" type="submit" value="Añadir" name="btnAñadir">
    </form>
    </div>

<br/> 

    <div class="eliminar">
    <form action="eliminar.php" method="POST">
        <p>Eliminar usuario</p>
    <p> Usuario: <input type="text" name="Usuario"> <br/></p>
     <input class="btnelim" type="submit" value="Eliminar Usuario" name="btnEl">
    </form>
    </div>

    <br>

    <div class="actualizar">
    <form action="actualizar.php" method="POST">
        <p>Actualizar contraseña de usuario</p>
        <p> Usuario: <input type="text" name="Usuario"> <br/></p>
    <p>Contraseña: <input type="password" name="Contraseña"/><br/></p>
    <input class="btnact" type="submit" value="Acualizar" name="btnAC">
    </form>
    </div>

    <br>

    <div class="registros">
        <form action="registros.php" method="POST">
          <p> Para ver los registros: <input class="btnver" type="submit" value="Ver usuarios" name="btnRE"></p>
        </form>
    </div>
    
</body>
</html>