#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include '../commitbase.php';

function creditoscommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE creditos(
        ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(21), 
        Apellido VARCHAR(21), 
        FechaDeCompra VARCHAR(21),
        FechaDePago VARCHAR(21),
        TotalDeCompra FLOAT 
        );");

}
function creditosrollback()
{
    #deshaser los cambios de commit
    _rollback('creditos');
}

?>