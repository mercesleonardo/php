<?php
/*
$dizimo = function(int $valor) {
    return $valor * 0.1;
};
*/

$dizimo = fn(int $valor) => $valor * 0.2;

echo $dizimo(100);