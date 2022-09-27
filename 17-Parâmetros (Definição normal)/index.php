<?php

function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;  
}

$soma=somar(3, 2);

function multiplicar($n1, $n2) {
    $resultado = $n1 * $n2;
    return $resultado;
}

$x = multiplicar(3, 2);
$y = multiplicar(5, 5);
$w = ($x + $y);

echo "Total: ".$soma."<hr/>";
echo "Total: ".$w."<hr/>";