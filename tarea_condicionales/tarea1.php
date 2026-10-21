<?php
$a = 8;
$b = 15;
$c = 11;

// Se compara cada número con los otros dos
if ($a >= $b && $a >= $c) {
    $mayor = $a;
} elseif ($b >= $a && $b >= $c) {
    $mayor = $b;
} else {
    $mayor = $c;
}

echo "El mayor es $mayor";
