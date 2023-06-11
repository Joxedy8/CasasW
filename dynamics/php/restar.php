<?php
    require "config.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        $sql = "SELECT SUM(pts_ind) FROM usuarios WHERE ID_USUARIO = (usuario)";
        $res = mysqli_query($conexion, $sql);

        while( $datos = mysqli_fetch_assoc($res)){
            $respuesta[] = $datos; 
        }
        echo json_encode($respuesta);
    }
?>