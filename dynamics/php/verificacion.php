<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.html');
    }
    $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
    if($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header('Location: ./selecciona.php');
    }else{
        echo "No te registraste";
    }
?>