<?php

function multiplicar(int $n1, int $n2, int $n3 = 1) {
    $resultado = $n1 * $n2 * $n3;
    return $resultado;
}

$x = multiplicar(3, 2);
$y = multiplicar(5, 5, 2);
$w = ($x + $y);

echo "Total: ".$w."<hr/>";