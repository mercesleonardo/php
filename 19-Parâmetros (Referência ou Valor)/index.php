<?php

function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$x = 1;
$y = 2;

$soma = somar($x, $y);

echo "Total: " . $soma;