<?php

include_once '../config.php';
include_once 'creatablas.php';

#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}
if (usuarioEscritor()->connect_error) {
    echo "Error en la conexion";
} else {
    // echo "conexion exitosa";
    $tableName = $_POST['nombre'];

    $varname1 = $_POST['varname1'];
    $varname2 = $_POST['varname2'];
    $varname3 = $_POST['varname3'];
    $varname4 = $_POST['varname4'];

    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $var3 = $_POST['var3'];
    $var4 = $_POST['var4'];

    if($var3 == null && $var3 == ""){
        CrearTablaDataDe2(usuarioEscritor(),$tableName,$varname1,$varname2,$var1,$var2);
    }
    else if($var4 == null && $var4 == ""){
        CrearTablaDataDe3(usuarioEscritor(),$tableName,$varname1,$varname2,$varname3,$var1,$var2,$var3);
    }
    else{
        CrearTablaDataDe4(usuarioEscritor(),$tableName,$varname1,$varname2,$varname3,$varname4,$var1,$var2,$var3,$var4);
    }
    


    
}
usuarioEscritor() -> close();


?>