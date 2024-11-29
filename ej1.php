<?php
function diferenciaEdad($edad1, $edad2) {
    return abs($edad1 - $edad2);
}

echo "Introduce la edad del primer hermano: ";
$edad1 = intval(trim(fgets(STDIN)));

echo "Introduce la edad del segundo hermano: ";
$edad2 = intval(trim(fgets(STDIN)));

$diferencia = diferenciaEdad($edad1, $edad2);
echo "La diferencia de edad es de $diferencia años.\n";
?>
