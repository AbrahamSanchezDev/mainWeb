#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include '../commitbase.php';

function horarioscommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE horarios(
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
        ID_carrera INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(21)
        );");

}
function horariosrollback()
{
    #deshaser los cambios de commit
    _rollback('horarios');
}

?>