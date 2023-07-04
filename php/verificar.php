<?php
include_once '../config.php';
include_once 'logger.php';
include_once 'limpiezaregex.php';

#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}

if ($conn->connect_error) {
    echo "Error en la conexion";

} else {
    
    $email = $_POST['correo'];
    $pass = $_POST['pswd'];

    $email = limpiarRegex( $email);
    $pass = limpiarRegex($pass);

    $passEncriptada = hash('sha256', $pass);

    $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND pswrd = '$passEncriptada'";

    $resultado = $conn->query($sql);

    loggerRegister($conn, $sql);
    if ($resultado->num_rows > 0) {
        header("Location:../html/bienvenido.html");

    } else {
        echo "FAIL!";
        header("Location:../html/iniciosesion.html");
    }

}
$conn->close();
?>