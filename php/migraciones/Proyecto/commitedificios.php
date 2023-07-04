#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function

include '../commitbase.php';

function edificioscommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE edificios(
        ID_edificio INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        Nombre VARCHAR(21),
        Posicion_z FLOAT,
        Posicion_x FLOAT,
        Descripcion TEXT
        );");

}
function edificiosrollback()
{
    #deshaser los cambios de commit
    _rollback('edificios'); 
}
?>