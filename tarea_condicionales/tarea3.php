<?php
$edad = 12;
$pasaje = 3000;

// Se revisa la edad de menor a mayor
if ($edad < 0) {
    echo "Edad inválida";
} elseif ($edad <= 5) {
    echo "$0";
} elseif ($edad <= 17) {
    echo "$" . number_format($pasaje / 2, 0, ',', '.');
} elseif ($edad <= 64) {
    echo "$" . number_format($pasaje, 0, ',', '.');
} else {
    echo "$" . number_format($pasaje / 2, 0, ',', '.');
}
