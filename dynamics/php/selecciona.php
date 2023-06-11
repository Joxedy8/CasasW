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
    <link rel="stylesheet" href="../../statics/styles/style.css">

</head>
<body>
    <header class="login">
        <h1>Selecciona tu casa</h1>
    </header>
    <main>
        <span class="backbtn">
            <form action="./pagPrincipal" method="post">
                    <input type="hidden" id="casa" >
                <button id="regresar">Regresar</button>
                <button id="aceptar" type="submit">Aceptar</button>
            </form>
        </span>
        <span class="containerhome">
            <section id="halCont" class="homeCW">
                <article>
                    <h3 id="halT">Halcones</h3>
                </article>
            </section>
            <section  id="tepoCont" class="homeCW">
                <article>
                    <h3 id="tepoT" >Teporingos</h3>
                </article>
            </section>
            <section id="ajoCont" class="homeCW">
                <article>
                    <h3 id="ajoT">Ajolotes</h3>
                </article>
            </section>
        </span>
    </main>
    <script src="../javascript/funcionalidad.js"></script>
</body>
</html>