<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
include_once __DIR__ .'../../commitbase.php';

function usuarioscommit()
{
    #va a hacer tablas
    _commit("CREATE TABLE usuarios(
        ID_usuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        nombre VARCHAR(21),
        usuario VARCHAR(21),
        correo VARCHAR(50),
        pswrd TEXT 
        );");

}
function usuariosrollback()
{
    #deshaser los cambios de commit
    _rollback('usuarios');
}

?>