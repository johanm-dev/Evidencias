<?php
$saldo = 500000;
$retiro = 120000;

// Se validan los casos en el orden pedido
if ($retiro <= 0) {
    echo "Valor inválido";
} elseif ($retiro > $saldo) {
    echo "Saldo insuficiente";
} elseif ($retiro % 10000 != 0) {
    echo "Solo se entregan múltiplos de $10.000";
} else {
    $saldo = $saldo - $retiro;
    echo "Retiro exitoso. Nuevo saldo: $saldo";
}
