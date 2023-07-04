#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include '../commitbase.php';

function salonescommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE salones(
        ID_salon INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        Nombre VARCHAR(21),
        ID_edificio INT,
        FOREIGN KEY (ID_edificio) REFERENCES edificios(ID_edificio)    
        );");

}
function salonesrollback()
{
    #deshaser los cambios de commit
    _rollback('salones');
}

?>