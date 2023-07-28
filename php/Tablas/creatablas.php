<?php
#Ejecutarlo Unicamente en el navegador
if (php_sapi_name() !== 'apache2handler') {
    die("no se puede abrir desde la consola");
}
function CrearTablaDataDe2($conn, $tableName, $varname1, $varname2, $var1, $var2)
{

    for ($i = 0; $i < 10; $i++) {
        $variable1 = $var1 . uniqid() . mt_rand();
        $variable2 = $var2 . $i;

        $sql2 = "INSERT INTO $tableName($varname1,$varname2) VALUES ('$variable1','$variable2');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }

    echo "CREATED TABLES FOR " . $tableName;
}
function CrearTablaDataDe3($conn, $tableName, $varname1, $varname2, $varname3, $var1, $var2, $var3)
{


    for ($i = 0; $i < 10; $i++) {
        $variable1 = $var1 . uniqid() . mt_rand();
        $variable2 = $var2 . $i;
        $variable3 = $var3 . $i;


        $sql2 = "INSERT INTO $tableName($varname1,$varname2,$varname3) VALUES ('$variable1','$variable2','$variable3');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }

    echo "CREATED TABLES FOR " . $tableName;

}
function CrearTablaDataDe4($conn, $tableName, $varname1, $varname2, $varname3, $varname4, $var1, $var2, $var3, $var4)
{
    for ($i = 0; $i < 10; $i++) {
        $variable1 = $var1 . uniqid() . mt_rand();
        $variable2 = $var2 . $i;
        $variable3 = $var3 . $i;
        $variable4 = $var4 . $i;

        $sql2 = "INSERT INTO $tableName($varname1,$varname2,$varname3,$varname4) VALUES ('$variable1','$variable2','$variable3','$variable4');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }

    echo "CREATED TABLES FOR " . $tableName;

}

function CrearTablaDataDe5($conn, $tableName, $varname1, $varname2, $varname3, $varname4, $varname5, $var1, $var2, $var3, $var4, $var5)
{
    for ($i = 0; $i < 10; $i++) {
        $variable1 = $var1 . uniqid() . mt_rand();
        $variable2 = $var2 . $i;
        $variable3 = $var3 . $i;
        $variable4 = $var4 . $i;
        $variable5 = $var5 . $i;

        $sql2 = "INSERT INTO $tableName($varname1,$varname2,$varname3,$varname4,$varname5) VALUES ('$variable1','$variable2','$variable3','$variable4','$variable5');";


        if ($conn->query($sql2) === FALSE) {
            echo "FAILED " . $i;
        }
    }

    echo "CREATED TABLES FOR " . $tableName;

}

function CrearTablaDataDe8($tableName, $varname1, $varname2, $varname3, $varname4, $varname5, $varname6, $varname7, $varname8, $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8)
{
    include '../config.php';
    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        for ($i = 0; $i < 10; $i++) {
            $variable1 = $var1 . uniqid() . mt_rand();
            $variable2 = $var2 . $i;
            $variable3 = $var3 . $i;
            $variable4 = $var4 . $i;
            $variable5 = $var5 . $i;
            $variable6 = $var6 . $i;
            $variable7 = $var7 . $i;
            $variable8 = $var8 . $i;

            $sql2 = "INSERT INTO $tableName($varname1,$varname2,$varname3,$varname4,$varname5,$varname6,$varname7,$varname8) VALUES ('$variable1','$variable2','$variable3','$variable4','$variable5','$variable6','$variable7','$variable8');";


            if ($conn->query($sql2) === FALSE) {
                echo "FAILED " . $i;
            }
        }

        echo "CREATED TABLES FOR " . $tableName;

    }
    $conn->close();
}
?>