#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include '../commitbase.php';

function tiendacommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE tienda(
        ID_tienda INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        NombreDeProducto VARCHAR(21), 
        Precio FLOAT, 
        Existencias INT, 
        Caducidad VARCHAR(21) 
        );");

}
function tiendarollback()
{
    #deshaser los cambios de commit
    _rollback('tienda');
}

?>