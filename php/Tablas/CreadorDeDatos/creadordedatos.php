<?php

include_once '../../../config.php';
include_once '../creatablas.php';
#Ejecutar UNICAMENTE en consola
if(php_sapi_name() !== 'cli'){
    die("solo se puede abrir desde la consola");
}
if ($conn->connect_error) {
    echo "Error en la conexion";
} else {

    $sqlcarreras = "INSERT INTO carreras(Nombre) VALUES ('TIS'),('MET'),('PIA');";
    if ($conn->query($sqlcarreras) === FALSE) {
        echo "ERROR EN INSERT DATA A CARRERAS";
    }
    $sqledificios = "INSERT INTO edificios(Nombre,Posicion_z,Posicion_x,Descripcion) VALUES ('Edificio A','10.1','5.1','Dentro de este edificio puedes encontrar multiples departamentos'),('Edificio B','20.1','25.1','Dentro de este edificio puedes encontrar multiples departamentos'),('Edificio C','30.1','35.1','Dentro de este edificio puedes encontrar multiples departamentos'),('Edificio D','40.1','45.1','Dentro de este edificio puedes encontrar multiples departamentos');";
    if ($conn->query($sqledificios) === FALSE) {
        echo "ERROR EN INSERT DATA A EDIFICIOS";
    }
    $sqlsalones = "INSERT INTO salones(Nombre,ID_edificio) VALUES ('1',1),('2',1),('3',1),('4',1),('5',1),
    ('101',2),('102',2),('103',2),('104',2),('105',2),
    ('201',3),('202',3),('203',3),('204',3),('205',3),
    ('301',4),('302',4),('303',4),('304',4),('305',4);";
    if ($conn->query($sqlsalones) === FALSE) {
        echo "ERROR EN INSERT DATA A Salones";
    }

    $nombreAlumno = "Abe";
    $Apellido_P = "Sanchez";
    $Apellido_M = "Fonseca";
    $Matricula = "10";
    $ID_Carrera = 4;
    $Grado = '3';
    $Grupo = 'A';
    for ($i = 0; $i < 10; $i++) {
        $variable1 = $nombreAlumno . uniqid() . mt_rand();
        $variable2 = $Apellido_P . $i;
        $variable3 = $Apellido_M . $i;
        $variable4 = $Matricula . $i;
        $variable5 = $ID_Carrera;
        $variable6 = $Grado;
        $variable7 = $Grupo;

        $sql2 = "INSERT INTO usuario(Nombre,Apellido_P,Apellido_M,Matricula,ID_Carrera,Grado,Grupo) VALUES ('$variable1','$variable2','$variable3','$variable4','$variable5','$variable6','$variable7');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }

    $nombreEmpleado = "Axel";
    $apellidoPEmpleado = "Apellido_P";
    $apellidoMEmpleado = "Apellido_M";
    $numeroDeEmpleado = 100;
    for ($i = 0; $i < 10; $i++) {
        $variable1 = $nombreEmpleado . uniqid() . mt_rand();
        $variable2 = $apellidoPEmpleado . $i;
        $variable3 = $apellidoMEmpleado . $i;
        $variable4 = $numeroDeEmpleado . $i;

        $sql2 = "INSERT INTO usuario(Nombre,Apellido_P,Apellido_M,NumeroDeEmpleado) VALUES ('$variable1','$variable2','$variable3','$variable4');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }


    CrearTablaDataDe4($conn, 'tienda', 'NombreDeProducto', 'Precio', 'Existencias', 'Caducidad', 'Papas', 1, '10', 'Junio/');
    CrearTablaDataDe3($conn, 'venta', 'NombreDeProducto', 'CantidadDeProductos', 'Total', 'JUAN', 10, 2);
    CrearTablaDataDe5($conn, 'inventario', 'NombreDeProducto', 'ExistenciasIniciales', 'Entradas', 'Salidas', 'Stock', 'PAPAS', 100, 10, 20, 90);
    CrearTablaDataDe3($conn, 'empleados', 'Nombre', 'Apellido', 'Puesto', 'JUAN', 'PERES', 'Conductor');
    CrearTablaDataDe5($conn, 'creditos', 'Nombre', 'Apellido', 'FechaDeCompra', 'FechaDePago', 'TotalDeCompra', 'MARCO', 'Rodriguez', 'Mayo/', 'Julio/', 32);

    CrearTablaDataDe4($conn, 'estudiantes', 'nombre', 'apellido_P', 'apellido_M', 'matricula', 'MARCOS', 'LOPEZ', 'JUAREZ', '10');

    
    for ($i = 0; $i < 10; $i++) {
        $roomID = random_int(1, 10);
        $sql3 = "INSERT INTO horarios(Horario_Inicio,Horario_Fin,Dia,Nombre_materia,ID_salon) VALUES ('11:00:00','12:00:00','Lunes','Programacion','$roomID');";


        if ($conn->query($sql3) === FALSE) {
            echo "FAILED " . $i;
        } else {
            echo 'Added ' . $i;
        }
    }
}

$conn->close();
?>