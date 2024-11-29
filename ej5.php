<?php
function edadHumana($edadPerro) {
    return log($edadPerro) * 16 + 31;
}

function sobrePeso(&$datos) {
    $sobrepeso = 0;
    foreach ($datos as $perro) {
        $edadHumana = edadHumana($perro['edad']);
        $peso = $perro['peso'];
        if (($edadHumana >= 60 && $peso > 7) || ($edadHumana < 40 && $peso > 3) || ($edadHumana >= 40 && $edadHumana < 60 && $peso > 6)) {
            $sobrepeso++;
        }
    }
    return $sobrepeso;
}

$datos = [
    ['edad' => 5, 'peso' => 4],
    ['edad' => 2, 'peso' => 8],
    ['edad' => 10, 'peso' => 6],
];

echo "Número de perros con sobrepeso: " . sobrePeso($datos) . "\n";
?>
