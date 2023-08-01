<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include_once __DIR__ .'../../commitbase.php';

function ventacommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE venta(
        ID_productos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        NombreDeProducto VARCHAR(21), 
        CantidadDeProductos INT, 
        Total INT 
        );");

}
function ventarollback()
{
    #deshaser los cambios de commit
    _rollback('venta');
}

?>