#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include '../commitbase.php';

function inventariocommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE inventario(
        ID_productos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        NombreDeProducto VARCHAR(21), 
        ExistenciasIniciales INT, 
        Entradas INT,
        Salidas INT,
        Stock INT
        );");

}
function inventariorollback()
{
    #deshaser los cambios de commit
    _rollback('inventario');
}

?>