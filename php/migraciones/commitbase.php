<?php
#commit -> enviamos a la base de datos , cambios.
#rollback -> dehacer los cambios del commit.

function _commit($crearTableText)
{
    #php Sapi name
    #cli -> Common Line Interface / consola
    #apache2handler -> navegador
   
    #Ejecutar UNICAMENTE en consola
    if(php_sapi_name() !== 'cli'){
        die("solo se puede abrir desde la consola");
    }
  
    #va a hacer tablas
    #PHP Data Object
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=clase3a","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->beginTransaction();
       
        #execute
        $pdo->exec($crearTableText);

        $pdo->commit();
    } catch (Exception $e) {

        echo $e;
    }  

}
function _rollback($nombredetabla)
{
    #Ejecutar UNICAMENTE en consola
    if(php_sapi_name() !== 'cli'){
        die("solo se puede abrir desde la consola");
    }
    #deshaser los cambios de commit
    #PHP Data Object
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=clase3a","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->beginTransaction();
       
        #execute
        $pdo->exec("DROP TABLE $nombredetabla");

        $pdo->commit();
    } catch (Exception $e) {

        echo $e;
    }  
}
?>