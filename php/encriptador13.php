<?php

function rot_13char($char)
{
    $upperCase = range('A', 'Z');
    $lowerCase = range('a', 'z');

    if (in_array($char, $upperCase)) {
        $index = (array_search($char, $upperCase) + 13) % 26;
        return $upperCase[$index];
    } else if (in_array($char, $lowerCase)) {
        $index = (array_search($char, $lowerCase) + 13) % 26;
        return $lowerCase[$index];
    } else {
        return $char;
    }
}
function des_rot_13char($char)
{
    $upperCase = range('A', 'Z');
    $lowerCase = range('a', 'z');

    if (in_array($char, $upperCase)) {
        $index = (array_search($char, $upperCase) - 13 + 26) % 26;
        return $upperCase[$index];
    } else if (in_array($char, $lowerCase)) {
        $index = (array_search($char, $lowerCase) - 13 + 26) % 26;
        return $lowerCase[$index];
    } else {
        return $char;
    }
}
function rot13($muchoTexto)
{
    //Mensaje completo
    $encriptado = "";
    //cuantos caracteres hay en el msj
    $longitud = strlen($muchoTexto);
    for ($i = 0; $i < $longitud; $i++) {
        $char = $muchoTexto[$i];
        $encriptado .= des_rot_13char($char);
    }
    return $encriptado;
}
function des_rot13($muchoTexto)
{
    //Mensaje completo
    $encriptado = "";
    //cuantos caracteres hay en el msj
    $longitud = strlen($muchoTexto);
    for ($i = 0; $i < $longitud; $i++) {
        $char = $muchoTexto[$i];
        $encriptado .= rot_13char($char);
    }
    return $encriptado;
}

$miMensaje = "cualquier cosa jojo";

$encriptada = rot13($miMensaje);
echo $encriptada;

echo "  -  ";
echo des_rot13($encriptada);

?>