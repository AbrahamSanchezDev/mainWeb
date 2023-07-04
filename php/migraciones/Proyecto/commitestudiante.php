#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function

include '../commitbase.php';
function estudiantescommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE estudiantes(
        ID_estudiantes INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(21) NOT NULL,
        apellido_P VARCHAR(21),
        apellido_M VARCHAR(21),
        matricula VARCHAR(20)
        );");

}
function estudiantesrollback()
{
    #deshaser los cambios de commit
    _rollback('estudiantes');
}

?>