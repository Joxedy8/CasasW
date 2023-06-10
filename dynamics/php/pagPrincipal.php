<?php
    sess

    $sql1 = "SELECT user FROM usuarios";
    $sql2 = "SELECT home FROM casas";
    $res = mysqli_query($conexion, $sql1);
    $res2 = mysqli_query($conexion, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require "config.php";
    $conexion = connect();
    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{
        echo '
        <header>
            <h1>Pagina principal</h1>
        </header>
        <main>
            <h2>¡Bienvenido a la home de la web !</h2>
            <h3>¡Tienes un total de  puntos!</h3>
            <section id="sumar">+</section>
            <section id="restar">-</section>
            <h3>¡Tu poderosa casa es de !</h3>
            <h3>Tu casa tiene un total de   puntos</h3>
        </main>
        ';
    }
?>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>