<?php
    require "config.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        session_start()
        $ptsInd = 0;

        $sql = "SELECT pts_ind FROM usuarios WHERE ID_USUARIO = '$_SESION["usuario"]'";
        $res = mysqli_query($conexion, $sql);
        $resp = mysqli_fetch_assoc($res);
        $resp += 1;
        $sql2 = "UPDATE casas SET pts_home = $resp WHERE ID_HOME = (num)";
        $respuesta



        echo json_encode($respuesta);
    }
?>