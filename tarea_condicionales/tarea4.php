<?php
$peso = 70;     // kg
$altura = 1.75; // metros

// Cálculo del IMC
$imc = $peso / ($altura * $altura);

// Clasificación
if ($imc < 18.5) {
    $clasificacion = "Bajo peso";
} elseif ($imc < 25) {
    $clasificacion = "Normal";
} elseif ($imc < 30) {
    $clasificacion = "Sobrepeso";
} else {
    $clasificacion = "Obesidad";
}

echo "IMC " . round($imc, 1) . ", $clasificacion";
