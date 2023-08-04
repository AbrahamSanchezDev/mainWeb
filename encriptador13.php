<?php
function rot_13char($char){
    //$char -> nuestro mensaje
    //mayusculas
    //[A,B,C,D,...Z]
    $upperCase = range('A','Z');
    $lowerCase = range('a','z');
    //hola
    //[h]
    //[a,b,c,d,e...z]
    //[0,1,2,3,4....25]
    //h, este en [A,B,C,D....Z]
    //-13.+.26.%.26;

    if (in_array($char, $upperCase)){
        //[Z] -> array_search -> 3
        $index = (array_search($char,
        $upperCase) + 13) % 26;
        return $upperCase[$index];
    }else if(in_array($char, $lowerCase)){
     $index = (array_search($char,$lowerCase) + 13) %26;
     return $lowerCase[$index];
    }else{
        return $char;
    }
}

function rot13($muchoTexto){
    //nuestro mensaje completo 
    $encriptado = "";
    //cuantos caracteres tiene el mensaje
    $longitud = strlen($muchoTexto);
    $encriptado ="";
    $longitud = strlen($muchoTexto);
    for ($i=0; $i < $longitud ; $i++){
        $char = $muchoTexto[$i];
        $encriptado .= rot_13char($char);
    }
    return $encriptado;
}

function rot_13chardesencriptado($char){
    //$char -> nuestro mensaje
    //mayusculas
    //[A,B,C,D,...Z]
    $upperCase = range('A','Z');
    $lowerCase = range('a','z');
    //hola
    //[h]
    //[a,b,c,d,e...z]
    //[0,1,2,3,4....25]
    //h, este en [A,B,C,D....Z]
    //-13.+.26.%.26;

    if (in_array($char, $upperCase)){
        //[Z] -> array_search -> 3
        $index = (array_search($char,
        $upperCase) - 13+26) % 26;
        return $upperCase[$index];
    }else if(in_array($char, $lowerCase)){
     $index = (array_search($char,$lowerCase) - 13+26) %26;
     return $lowerCase[$index];
    }else{
        return $char;
    }
}

function rot13desencriptado($muchoTexto){
    //nuestro mensaje completo 
    $encriptado = "";
    //cuantos caracteres tiene el mensaje
    $longitud = strlen($muchoTexto);
    $encriptado ="";
    $longitud = strlen($muchoTexto);
    for ($i=0; $i < $longitud ; $i++){
        $char = $muchoTexto[$i];
        $encriptado .= rot_13chardesencriptado($char);
    }
    return $encriptado;
}
    $miMensaje = "cualquier cosa";
    $miMnesajeEncriptado = rot13($miMensaje);
    $miMensajeDesencriptado = rot13desencriptado($miMnesajeEncriptado);
    echo $miMnesajeEncriptado . " : ". $miMensajeDesencriptado;
?>
