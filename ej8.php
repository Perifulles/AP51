<?php

$archivo = 'datos.php';
if (!file_exists($archivo)) {
    die("El archivo $archivo no existe.\n");
}
$texto = file_get_contents($archivo);


function numeroCaracteres($texto) {
    return strlen(str_replace([' ', "\n"], '', $texto));
}


function numeroPalabras($texto) {
    return str_word_count($texto);
}


function numeroFrases($texto) {
    return preg_match_all('/[.!?]/', $texto);
}


function numeroParrafos($texto) {
    return substr_count($texto, "\n") + 1;
}


function letraModa($texto) {
    $texto = strtolower(str_replace([' ', "\n"], '', $texto));
    $frecuencias = count_chars($texto, 1);
    arsort($frecuencias);
    return chr(array_key_first($frecuencias));
}


function palabraModa($texto) {
    $palabras = str_word_count(strtolower($texto), 1);
    $frecuencias = array_count_values($palabras);
    arsort($frecuencias);
    return array_key_first($frecuencias);
}


$numCaracteres = numeroCaracteres($texto);
$numPalabras = numeroPalabras($texto);
$numFrases = numeroFrases($texto);
$numParrafos = numeroParrafos($texto);
$promedioLetrasPorPalabra = $numCaracteres / $numPalabras;
$promedioPalabrasPorFrase = $numPalabras / $numFrases;
$promedioFrasesPorParrafo = $numFrases / $numParrafos;
$letraModa = letraModa($texto);
$palabraModa = palabraModa($texto);


echo "Número de caracteres (sin espacios ni saltos): $numCaracteres\n";
echo "Número de palabras: $numPalabras\n";
echo "Número de frases: $numFrases\n";
echo "Número de párrafos: $numParrafos\n";
echo "Promedio de letras por palabra: $promedioLetrasPorPalabra\n";
echo "Promedio de palabras por frase: $promedioPalabrasPorFrase\n";
echo "Promedio de frases por párrafo: $promedioFrasesPorParrafo\n";
echo "Letra más frecuente: $letraModa\n";
echo "Palabra más frecuente: $palabraModa\n";
?>
