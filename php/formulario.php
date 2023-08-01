<?php
include_once '../config.php';
include_once 'limpiezaregex.php';
include_once '../encriptado.php';

include_once 'logger.php';
#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}

if (usuarioEscritor()->connect_error) {
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
    $nombre = limpiarRegexNormal($nombre);
    $apellido = limpiarRegexNormal($apellido);
    $telefono = limpiarRegexNormal($telefono);
    $colonia = limpiarRegexNormal($colonia);
    $direccion = limpiarRegexNormal($direccion);
    $Tipo_Servicio = limpiarRegexNormal($Tipo_Servicio);
    $correo = limpiarRegex($correo);
    $fecha_de_cita = limpiarRegex($fecha_de_cita);
    $fecha_de_hoy = limpiarRegex($fecha_de_hoy);
    $quien_lo_atendio = limpiarRegexNormal($quien_lo_atendio);


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

    $sql = "INSERT INTO formulario(Nombre,Apellido,Telefono,Colonia,Direccion,Servicio,Correo,Fecha_de_cita,Fecha_de_hoy,Quien_lo_atendio) VALUES ('$nombre','$apellido','$telefono','$colonia','$direccion','$Tipo_Servicio','$correo','$fecha_de_cita','$fecha_de_hoy','$quien_lo_atendio');";



    #echo ($sql);

    if (usuarioEscritor()->query($sql) === TRUE) {

        loggerRegister(usuarioEscritor(), $sql);
        echo "<br>";
        echo ("Posted!");
        header("Location:../index.html");

    } else {
        echo "FAIL!";
        header("Location:../index.html");
    }



}
usuarioEscritor()->close();
?>