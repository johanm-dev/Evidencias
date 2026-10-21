<?php
$l1 = 5;
$l2 = 5;
$l3 = 8;

// Primero se valida que cada lado sea menor que la suma de los otros dos
if ($l1 < $l2 + $l3 && $l2 < $l1 + $l3 && $l3 < $l1 + $l2) {
    if ($l1 == $l2 && $l2 == $l3) {
        echo "Equilátero";
    } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
        echo "Isósceles";
    } else {
        echo "Escaleno";
    }
} else {
    echo "No forma un triángulo";
}
