<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include_once __DIR__ .'../../commitbase.php';

function usuariocommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE usuario(
        ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        Nombre VARCHAR(21),
        Apellido_P VARCHAR(21),
        Apellido_M VARCHAR(21),
        Matricula INT,
        ID_Carrera INT,
        Grado VARCHAR(2),
        Grupo VARCHAR(2), 
        NumeroDeEmpleado INT,
        FOREIGN KEY (ID_Carrera) REFERENCES carreras(ID_Carrera)    
        );");

}
function usuariorollback()
{
    #deshaser los cambios de commit
    _rollback('usuario');
}

?>