<?php

$dizimo = function(int $valor) {
    return $valor * 0.1;
};

$doacao = $dizimo;

echo $doacao(90);