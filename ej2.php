<?php
function numRomano($num) {
    $romanos = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V', 6 => 'VI', 7 => 'VII', 8 => 'VIII', 9 => 'IX', 10 => 'X'];
    return $romanos[$num] ?? "Número fuera de rango";
}

echo "Introduce un número entre 1 y 10: ";
$numero = intval(trim(fgets(STDIN)));
echo "El número romano es: " . numRomano($numero) . "\n";
?>
