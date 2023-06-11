<?php
    define("ALGORITMO", "aes-256-cbc");
    define ("CONTRA", uniqid());

    // function cifrar ($mensaje){
    //     $longitud = openssl_cipher_iv_length(ALGORITMO); //Obtener la longit del vecto inicialización que ocupa 
    //     //ese algoritmo especifico
    //     $vi = openssl_random_pseudo_bytes($longitud); //General un vi, cadena de bytes aleatorios
    //     $mensajeCifrado = openssl_encrypt($mensaje, ALGORITMO, CONTRA, 0, $vi); // Cifra el mensaje 
    //     $mensajeCifrado = base64_encode($mensajeCifrado."=-=-.-/".$vi);
    //     return $mensajeCifrado;
    // }

    // function descifrar ($mensaje){
    //     $mensaje = base64_decode($mensaje);
    //     $desc_mensaje = explode("=-=-.-/", $mensaje);
    //     $mensaje_cifrado = $desc_mensaje[0];
    //     $vi = $desc_mensaje[1];
    //     $mensajeDescifrado = openssl_decrypt($mensaje_cifrado,ALGORITMO,CONTRA, 0, $vi);//descifrar
    //     return $mensajeDescifrado;
    // }

    function generarSal(){
        $sal = uniqid();
        return $sal;
    }

    function generarPimienta(){
        $caracteres = str_split("ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmñnopqrstuvwxyz");
        $partes_pimienta = array_rand($caracteres, 2);
        $p1 = $caracteres[$partes_pimienta[0]];
        $p2 = $caracteres[$partes_pimienta[1]];
        $pimienta = $p1.$p2;
        return $pimienta;
    }

    function hashearContra ($contra){
        $contraseñaHasheada = hash("SHA256", $contra);
        return $contraseñaHasheada;
    }

    function verificar_contra ($contra, $contraseñaCorrecta, $sal){
        $coincide = false;
        $caracteres = str_split("ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmñnopqrstuvwxyz");
        for($i=0; $i < count($caracteres); $i++){
            for($j=0; $j < count($caracteres); $j++){
                $pimienta = $caracteres[$i].$caracteres[$j];
                $contra = $contra.$pimienta.$sal;
                if(hashearContra($contra.$pimienta.$sal) == $contraseñaCorrecta){
                    $coincide = true;
                    break;
                }
            }
        }
        return true;
    }
?>  