<?php
include_once '../config.php';
include_once 'limpiezaregex.php';
include_once '../encriptado.php';

include_once 'logger.php';
#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}

if ($conn->connect_error) {
    echo "Error en la conexion";
} else {

    #echo "conexion exitosa";
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $colonia = $_POST['colonia'];
    $direccion = $_POST['direccion'];
    $Tipo_Servicio = $_POST['Tipo_Servicio'];
    $correo = $_POST['correo'];
    $fecha_de_cita = $_POST['fecha_de_cita'];
    $fecha_de_hoy = $_POST['fecha_de_hoy'];
    $quien_lo_atendio = $_POST['quien_lo_atendio'];

    //Limpiar con REGEX
    $nombre = limpiarRegex($nombre);
    $apellido = limpiarRegex($apellido);
    $telefono = limpiarRegex($telefono);
    $colonia = limpiarRegex($colonia);
    $direccion = limpiarRegex($direccion);
    $Tipo_Servicio = limpiarRegex($Tipo_Servicio);
    $correo = limpiarRegexNormal($correo);
    $fecha_de_cita = limpiarRegexNormal($fecha_de_cita);
    $fecha_de_hoy = limpiarRegexNormal($fecha_de_hoy);
    $quien_lo_atendio = limpiarRegex($quien_lo_atendio);


    //Encriptar
    $nombre = encriptarTexto($nombre,$key,$iv);
    $apellido = encriptarTexto($apellido,$key,$iv);
    $telefono = encriptarTexto($telefono,$key,$iv);
    $colonia = encriptarTexto($colonia,$key,$iv);
    $direccion = encriptarTexto($direccion,$key,$iv);
    $Tipo_Servicio = encriptarTexto($Tipo_Servicio,$key,$iv);
    $correo = encriptarTexto($correo,$key,$iv);
    $fecha_de_cita = encriptarTexto($fecha_de_cita,$key,$iv);
    $fecha_de_hoy = encriptarTexto($fecha_de_hoy,$key,$iv);
    $quien_lo_atendio = encriptarTexto($quien_lo_atendio,$key,$iv);
    
    #echo ($user . ' ' .  $name . ' ' . $email  . ' ' . $pass);

    $sql = "INSERT INTO usuarios(Nombre,Apellido,Telefono,Colonia,Direccion,Servicio,Correo,Fecha_de_cita,Fecha_de_hoy,Quien_lo_atendio) VALUES ('$nombre','$apellido','$telefono','$colonia','$direccion','$Tipo_Servicio','$correo','$fecha_de_cita','$fecha_de_hoy','$quien_lo_atendio');";



    #echo ($sql);

    if ($conn->query($sql) === TRUE) {

        loggerRegister($conn, $sql);
        echo "<br>";
        echo ("Posted!");
        header("Location:../html/index.html");

    } else {
        echo "FAIL!";
        header("Location:../index.html");
    }



}
$conn->close();
?>