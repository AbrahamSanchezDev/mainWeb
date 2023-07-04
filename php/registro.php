<?php
include_once '../config.php';
include_once 'limpiezaregex.php';

include_once 'logger.php';
#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}

if ($conn->connect_error) {
    echo "Error en la conexion";
} else {

    #echo "conexion exitosa";
    $user = $_POST['usuario'];
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $pass = $_POST['pswd'];

    $name = limpiarRegexNormal($name);
    $user = limpiarRegexNormal($user);
    $email = limpiarRegex($email);
    $pass = limpiarRegex($pass);


    $passEncriptada = hash('sha256', $pass);
    ;

    #echo ($user . ' ' .  $name . ' ' . $email  . ' ' . $pass);

    $sql = "INSERT INTO usuarios(nombre,usuario,correo,pswrd) VALUES ('$name','$user','$email','$passEncriptada');";



    #echo ($sql);

    if ($conn->query($sql) === TRUE) {

        loggerRegister($conn, $sql);
        echo "<br>";
        echo ("Posted!");
        header("Location:../html/iniciosesion.html");

    } else {
        echo "FAIL!";
        header("Location:../index.html");
    }



}
$conn->close();
?>