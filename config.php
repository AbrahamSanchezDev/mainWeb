<?php
//la ubicacion de donde esta el archivo .env
function leerENV($path)
{
    try {
        $contenido = file_get_contents($path);


        // var lineas = []
        $lineas = explode("\n", $contenido);
        //["#","cred","bd)localhost","name=usuario"]

        $envDATA = [];
        foreach ($lineas as $linea) {
            $linea = trim($linea);
            if (empty($linea) || strpos($linea, '#') === 0) {
                continue;
            }
            list($key, $value) = explode('=', $linea, 2);

            $envDATA[$key] = trim($value);

        }

        return $envDATA;

    } catch (\Throwable $th) {
        //throw $th;
        echo $th;
    }

}

$datosDeENV = leerENV(__DIR__ . '/.env');

#4 Variables Indispensables
$nombreserver = "localhost";

$usuariobdLectura = $datosDeENV['DB_USERLECTURA'];
$passLectura = $datosDeENV['DB_PASSLECTURA'];

$usuariobdEscritura = $datosDeENV['DB_USERESCRITURA'];
$passEscritura = $datosDeENV['DB_PASSESCRITURA'];

$nombredb = "clase3a";

$connLectura = new mysqli($nombreserver, $usuariobdLectura, $passLectura, $nombredb);
$conn = new mysqli($nombreserver, $usuariobdEscritura, $passEscritura, $nombredb);

?>