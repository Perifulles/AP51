<?php
function dameNumero() {
    return rand(1, 49);
}

function loteriaPrimitiva() {
    $numeros = [];
    while (count($numeros) < 6) {
        $nuevoNumero = dameNumero();
        if (!in_array($nuevoNumero, $numeros)) {
            $numeros[] = $nuevoNumero;
        }
    }
    return $numeros;
}

$combinacion = loteriaPrimitiva();
echo "La combinación de lotería es: " . implode(", ", $combinacion) . "\n";
?>
