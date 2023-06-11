<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../statics/styles/style.css">
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
        <h1>CASAS DEL CURSO WEB</h1>
    </header>
    <h3 class="login">Registro</h3>
    <main>
        <div class="login">
            <form action="../index.html" method="post">
                <label for="usuario">Usuario <br>
                    <input type="text" name="usuario" id="usuario">
                </label><br><br>
                <label for="contraseña">Contraseña <br>
                    <input type="password"" name="contraseña" id="contraseña">
                </label><br><br>
                <label for="verPass">Ver contraseña <br>
                    <input type="checkbox" name="verPass" id="verPass">
                </label><br><br>
                <div id="btns" >
                    <button type="submit" id="enviar">Enviar</button><br>
                    <button type="reset" id="corregir">Corregir</button><br>
                    <button id="registrarse">Iniciar sesion</button>
                </div>
            </form>
        </div>
    </main>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>