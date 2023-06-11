<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUHOME</title>
    <link rel="stylesheet" href="../../statics/styles/style.css">

</head>
<body>
    <header class="login">
        <h1>Selecciona tu casa</h1>
    </header>
    <main>
        <span class="backbtn">
            <button id="regresar">Regresar</button>
            <button id="aceptar">Aceptar</button>
        </span>
        <span class="containerhome">
            <section id="halCont" class="homeCW">
                <article>
                    <h3 id="halT">Halcones</h3>
                    <img class="imgCW" src="https://cdn0.bioenciclopedia.com/es/posts/3/3/1/halcon_peregrino_133_orig.jpg" alt="halcon">
                </article>
            </section>
            <section  id="tepoCont" class="homeCW">
                <article>
                    <h3 id="tepoT" >Teporingos</h3>
                    <img class="imgCW" src="https://oncenoticias.digital/wp-content/uploads/2021/12/conejo-teporingo-se-extingue-en-nevado-de-toluca.jpg" alt="teporingo">
                </article>
            </section>
            <section id="ajoCont" class="homeCW">
                <article>
                    <h3 id="ajoT">Ajolotes</h3>
                    <img class="imgCW" src="https://www.kebuena.com.mx/wp-content/uploads/2023/02/Di%CC%81a-del-Ajolote_KeBuena.jpg" alt="ajolote">
                </article>
            </section>
        </span>
    </main>
    <script src="./dynamics/javascript/funcionalidad.js"></script>
</body>
</html>