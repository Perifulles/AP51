<?php
function figura($caracter, $filas) {
    for ($i = 1; $i <= $filas; $i++) {
        echo str_repeat($caracter, $i * 2 - 1) . "\n";
    }
    for ($i = $filas - 1; $i > 0; $i--) {
        echo str_repeat($caracter, $i * 2 - 1) . "\n";
    }
}

figura('*', 4);
?>
