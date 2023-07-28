<?php
 #Ejecutarlo Unicamente en el navegador
 if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}
function limpiarRegexNormal($inputString){
    $regex = "/[^a-zA-Z0-9]/";
    $returnString = preg_replace($regex,"",$inputString);
    return $returnString;
}
function limpiarRegex($inputString){
    $regex = "/[^a-zA-Z0-9@.-_]/";
    $returnString = preg_replace($regex,"",$inputString);
    return $returnString;
}

?>