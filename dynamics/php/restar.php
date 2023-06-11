<?php
    require "config.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        session_start()
        $sql = "SELECT pts_ind FROM usuarios WHERE user = '$_SESION["usuario"]'";
        $res = mysqli_query($conexion, $sql);
        $res1 = mysqli_fetch_assoc($res);
        $res1 -= 1;
        $sql2 = "UPDATE casas SET pts_home = $resp WHERE home = '$_SESION["casa"]'";
        $res2 = mysqli_query($conexion, $sql2);
        $respuesta = mysqli_fetch_assoc($res2); 
        echo json_encode($respuesta);
    }
?>