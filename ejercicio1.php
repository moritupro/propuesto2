<?php
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1; // El factorial de 0 o 1 es 1
    } else {
        return $n * factorial($n - 1); // Llamada recursiva
    }
}

echo factorial(5); // Salida esperada: 120
?>
