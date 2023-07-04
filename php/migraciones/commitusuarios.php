#commitusuarios
<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.
#commitusuarios -> archivo
#usuariorollback -> function
if(php_sapi_name() !== 'cli'){
    die("solo se puede abrir desde la consola");
}
function usuarioscommit()
{
    #va a hacer tablas
    #PHP Data Object
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=class3a","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->beginTransaction();
       
        #execute
        $pdo->exec("CREATE TABLE usuario1(
            ID_usuarios1 INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(21) NOT NULL,
            apellidos VARCHAR(21) NOT NULL,
            columa4 TEXT NOT NULL
            );");

        $pdo->commit();
    } catch (Exception $e) {

        echo $e;
    }  

}
function usuariorollback()
{
    #deshaser los cambios de commit
    #PHP Data Object
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=class3a","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->beginTransaction();
       
        #execute
        $pdo->exec("DROP TABLE usuarios1");

        $pdo->commit();
    } catch (Exception $e) {

        echo $e;
    }  
}
?>