<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include_once __DIR__ .'../../commitbase.php';

function carrerascommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE carreras(
        ID_carrera INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(21)
        );");

}
function carrerasrollback()
{
    #deshaser los cambios de commit
    _rollback('carreras');
}

?>