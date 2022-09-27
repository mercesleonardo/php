<?php

$lista = [
    'Leonardo', 
    'Jéssica', 
    'Daniel', 
    'Adan', 
    'Deivid',
    'Duda',
    'Celi'
];

$aprovados = [
    'Leonardo',
    'Jéssica',
    'Duda'
];

$reprovados = array_diff($lista, $aprovados);

echo "TOTAL: " .count($lista)."<br/>"; // Total de itens no array
echo count($reprovados)."<br/>"; // Total de itens reprovados

$numeros = [5, 10, 40, 25, 22, 8, 60];

$infiltrados = array_filter($numeros, function($item) {
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});

$dobrados = array_map(function($item) {
    return $item * 2;
}, $numeros);

print_r($dobrados);
print_r($infiltrados);