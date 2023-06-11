<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../statics/styles/style.css">
    <link rel = "stylesheet" href = "../../statics/styles/animations.css">
</head>
<body>
<?php
    require "config.php";
    $conexion = connect();
    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{}
?>
    <header class="login">
        <h1 class = "1">CASAS DEL CURSO WEB</h1>
    </header>
    <h3 class="login 2">Registro</h3>
    <main>
        <div class="login 3">
        <form action="../../index.php" method="post">
            
                <label for="usuario" class = "4">Usuario <br>
                    <input type="text" name="usuario" id="usuario" >
                </label><br><br>
                <label for="contraseña" class = "5">Contraseña <br>
                    <input type="password"" name="contraseña" id="contraseña">
                </label><br><br>
                <label for="verPass" class = "6">Ver contraseña <br>
                    <input type="checkbox" name="verPass" id="verPass">
                </label><br><br>
                <div id="btns" >
                <button type="submit" class = "7">Enviar</button><br>
                <button type="reset" class = '8'>Corregir</button><br>
                <button id="iniciar_sesion" class = '9'>Iniciar Sesion</button>
                </div>
                </div>
            </form>
        </div>
    </main>
    <script src="../javascript/funcionalidad.js"></script>
</body>
</html>