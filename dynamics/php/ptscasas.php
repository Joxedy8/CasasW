<?php
    require "config.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        session_start()
        $sql = "SELECT SUM(pts_ind) FROM usuarios WHERE home = '$_SESSION["casa"]'";
        $res = mysqli_query($conexion, $sql);
        $respuesta = mysqli_fetch_assoc($res);
        echo json_encode($respuesta);
    }
?>