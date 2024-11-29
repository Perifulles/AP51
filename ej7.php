<?php

$archivo = 'texto.php';
if (!file_exists($archivo)) {
    die("El archivo $archivo no existe.\n");
}
$texto = file_get_contents($archivo);

function buscarPalabra($texto, $palabra) {
    $conteo = substr_count(strtolower($texto), strtolower($palabra));
    if ($conteo > 0) {
        echo "La palabra '$palabra' aparece $conteo veces.\n";
    } else {
        echo "La palabra '$palabra' no se encuentra en el texto.\n";
    }
}

function reemplazarPalabra(&$texto, $palabra) {
    $texto = str_ireplace($palabra, strtoupper($palabra), $texto);
}

echo "Introduce la palabra a buscar: ";
$palabra = trim(fgets(STDIN));

buscarPalabra($texto, $palabra);

echo "¿Quieres reemplazar '$palabra' por su versión en mayúsculas? (s/n): ";
$opcion = strtolower(trim(fgets(STDIN)));
if ($opcion === 's') {
    reemplazarPalabra($texto, $palabra);
    file_put_contents($archivo, $texto);
    echo "Se reemplazó '$palabra' por su versión en mayúsculas en el archivo.\n";
}
?>
