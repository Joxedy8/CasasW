<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Selecciona tu casa</h1>
    </header>
    <main>
        <form action="./pagPrincipal" method="post">
                <input type="hidden" id="casa" >
            <button id="regresar">Regresar</button>
            <button id="aceptar" type="submit">Aceptar</button>
        </form>
        <section>
            <article>
                <h3>Halcones</h3>
            </article>
        </section>
        <section>
            <article>
                <h3>Teporingos</h3>
            </article>
        </section>
        <section>
            <article>
                <h3>Ajolotes</h3>
            </article>
        </section>
    </main>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>