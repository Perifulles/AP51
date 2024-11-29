<?php
function calculaSalario($horas, $tarifa = 10) {
    if ($horas > 40) {
        $extras = $horas - 40;
        return (40 * $tarifa) + ($extras * $tarifa * 1.25);
    }
    return $horas * $tarifa;
}

$empleados = [
    'Juan' => ['horas' => 40, 'tarifa' => 15],
    'Perico' => ['horas' => 20, 'tarifa' => 25],
    'Andrés' => ['horas' => 45]
];

foreach ($empleados as $nombre => $datos) {
    $tarifa = $datos['tarifa'] ?? 10;
    $salario = calculaSalario($datos['horas'], $tarifa);
    echo "$nombre ha cobrado $salario€ esta semana.\n";
}
?>
