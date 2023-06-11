<?php

require "./dynamics/php/seguridad.php";

$usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
$contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;

// ------------------------------------HASHEO DE CONTRA------------------------------------

//cifrado
// $contraCifrada = cifrar($contraseña);
// $contraDescifrada = descifrar($contraCifrada);
// echo "Contra cifrada: $contraCifrada <br>";
    // echo "Contra normal: $contraDescifrada <br>";
    
    // $contraHash = hashearContra($contraseña);
    $sal = generarSal();
    $pimienta = generarPimienta();
    $contraHash = hashearContra($contraseña.$pimienta.$sal);

    //echo "Contraseña hash: $contraHash <br>";
    
    function pass(){
        if(verificar_contra($contra, $contraseñaCorrecta, $salOriginal)){
            echo "Contraseña correcta";
        }else{
            echo "Contraseña incorrecta";
        }
    }

    // ------------------------------------PASO A LA BASE DE DATOS------------------------------------
    
    $include = include("./dynamics/php/config.php");
    $conexion = connect();
    $con = connect();

    
    if($include && $con){
        $peticion = "INSERT INTO usuarios (user, pass) VALUES ('$usuario', '$contraseña')";
        $query = mysqli_query($con, $peticion);
       // echo $query;
        //mysqli_query
        //  si introducida -> bool(true)
        //  no introducida -> bool(false)
    }else{
        echo "hubo un problema T-T";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasasW</title>
    <link rel="stylesheet" href="./statics/styles/style.css">
    <link rel = "stylesheet" href = "./statics/styles/animations.css">
</head>
<body>
    <header class="login 1" >
        <h1>CASAS DEL CURSO WEB</h1>
    </header>
    <h3 class="login 2">Inicio de sesión</h3>
    <main>
        <div class="login 3">
            <form action="./dynamics/php/verificacion.php" method="post">
                <label for="usuario" class = "4">Usuario <br>
                    <input type="text" name="usuario" id="usuario">
                </label><br><br>
                <label for="contraseña" class = "5">Contraseña <br>
                    <input type="password" name="contraseña" id="contraseña">
                </label><br><br>
                <label for="verPass" class = "6">Ver contraseña <br>
                    <input type="checkbox" name="verPass" id="verPass">
                </label><br><br>
                <div id="btns">
                <button type="submit" class = "7">Enviar</button><br>
                <button type="reset" class = '8'>Corregir</button><br>
                <button id="registrarse" class = '9'>Registrarse</button>
                </div>
            </form>
        </div>
    </main>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>
