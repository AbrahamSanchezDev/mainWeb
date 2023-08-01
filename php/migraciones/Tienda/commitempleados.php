<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include_once __DIR__ .'../../commitbase.php';

function empleadoscommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE empleados(
        ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(21), 
        Apellido VARCHAR(21), 
        Puesto VARCHAR(21) 
        );");

}
function empleadosrollback()
{
    #deshaser los cambios de commit
    _rollback('empleados');
}

?>