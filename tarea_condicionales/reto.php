<?php

$jugador1 = "piedra";
$jugador2 = "tijera";

// Se pasa a minúsculas para aceptar mayúsculas
$j1 = strtolower($jugador1);
$j2 = strtolower($jugador2);

// Validar que las jugadas sean correctas
$validas = ["piedra", "papel", "tijera"];

if (!in_array($j1, $validas) || !in_array($j2, $validas)) {
    echo "Jugada no válida";
} elseif ($j1 == $j2) {
    echo "Empate";
} elseif (
    ($j1 == "piedra" && $j2 == "tijera") ||
    ($j1 == "tijera" && $j2 == "papel") ||
    ($j1 == "papel" && $j2 == "piedra")
) {
    echo "Gana el jugador 1";
} else {
    echo "Gana el jugador 2";
}
