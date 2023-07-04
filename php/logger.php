<?php
 #Ejecutarlo Unicamente en el navegador
 if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}
#funcion de registro de eventos
function loggerRegister($conn, $sql)
{
    #el sql escape le agrega un caracter de escape para convertirlo en texto plano
    #variable del evento texto plano
    $Evento = "Evento : " . $conn->real_escape_string($sql);
    #crear consuilta SQL para registro
    $sql1 = "INSERT INTO registros(registro) VALUES ('$Evento')";
    #guardar registro
    if ($conn->query($sql1) === TRUE) {


    }
}
?>