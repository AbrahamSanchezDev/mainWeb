<?php

function encriptarStringConHash($inputString){
    return hash('sha256',$inputString);
}
function encriptarStringConM5($inputString){
    return md5($inputString);
}

/*
SHA256, MD5 -> unidireccional
AES-256-CBC -> bidireccional
AES-256, CBC (bloque de cadenas encripdatas || cipher blockchaining)
*/

function encriptarTexto($texto,$key,$iv){
//iv = interacion vectoral
    $cipher = "AES-256-CBC";
    $opciones = OPENSSL_RAW_DATA;
    //bits
    $encriptado = openssl_encrypt($texto,$cipher,$key,$opciones,$iv);

    //bits -> bytes
    //bytes -> legible a nosotros
    return base64_encode($encriptado);
}
function desencriptarTexto($texto,$key,$iv){
    $cipher = "AES-256-CBC";
    $opciones = OPENSSL_RAW_DATA;
    $desencriptado = openssl_decrypt(base64_decode($texto),$cipher,$key,$opciones,$iv);

    return $desencriptado;
}

$key = "*EstaEsMiLLaveYNoTeLaSabras!ja!*";//DEBE DE SER DE 32 caracteres
$ivText = '6578616d706c652a';// DEBE DE SER DE 16 caracteres
$iv = $ivText;

//PRUEVAS PARA VER SI FUNCIONA
$encriptame ="Hola Mundo !";
$encriptado = encriptarTexto($encriptame,$key,$iv);
$deincriptado = desencriptarTexto($encriptado,$key,$iv);

//DEBUG LOGS
//  echo (" " . strlen($ivText)."\n");
// echo("Tamaño " . strlen($key) . "\n");
// echo "AAA : " . strlen($iv) . " \n ";
// echo $iv . "\n";

// echo $encriptado;
// echo "   la desincriptada es:   ";
// echo $deincriptado;


?>