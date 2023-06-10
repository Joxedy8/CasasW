<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const DBPASS = "";
    const DBNAME = "home_de_la_web";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        return $conexion;
    }
?>