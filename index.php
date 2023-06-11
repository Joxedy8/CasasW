<?php
    require "./dynamics/php/seguridad.php";

    $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
    $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;

    //cifrado
    // $contraCifrada = cifrar($contraseña);
    // $contraDescifrada = descifrar($contraCifrada);
    // echo "Contra cifrada: $contraCifrada <br>";
    // echo "Contra normal: $contraDescifrada <br>";

    // $contraHash = hashearContra($contraseña);
    $sal = generarSal();
    $pimienta = generarPimienta();
    $contraHash = hashearContra($contraseña.$pimienta.$sal);
    echo "Contraseña hash: $contraHash <br>";

    function pass(){
        if(verificar_contra($contra, $contraseñaCorrecta, $salOriginal)){
            echo "Contraseña correcta";
        }else{
            echo "Contraseña incorrecta";
        }
    }
    
    $config = include("./dynamics/php/config.php");
    $conexion = connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasasW</title>
    <link rel="stylesheet" href="./statics/styles/style.css">
</head>
<body>
    <header class="login" >
        <h1>CASAS DEL CURSO WEB</h1>
    </header>
    <h3 class="login">Inicio de sesión</h3>
    <main>
        <div class="login">
            <form action="./dynamics/php/verificacion.php" method="post">
                <label for="usuario">Usuario <br>
                    <input type="text" name="usuario" id="usuario">
                </label><br><br>
                <label for="contraseña">Contraseña <br>
                    <input type="password" name="contraseña" id="contraseña">
                </label><br><br>
                <label for="verPass">Ver contraseña <br>
                    <input type="checkbox" name="verPass" id="verPass">
                </label><br><br>
                <div id="btns">
                    <button type="submit" id="enviar">Enviar</button><br>
                    <button type="reset">Corregir</button><br>
                    <button id="registrarse">Registrarse</button>
                </div>
            </form>
        </div>
    </main>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>