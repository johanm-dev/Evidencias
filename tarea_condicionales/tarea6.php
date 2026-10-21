<?php
$mes = 5;
$anio = 2024;

switch ($mes) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "31 días";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30 días";
        break;
    case 2:
        // Año bisiesto: divisible por 4 y no por 100, o divisible por 400
        if (($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0) {
            echo "29 días";
        } else {
            echo "28 días";
        }
        break;
    default:
        echo "Mes inválido";
}
