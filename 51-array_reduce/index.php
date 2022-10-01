<?php
/*
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo "Total: " . $total;
*/

$pessoas = [
    ['nome' => 'Leonardo', 'sexo' => 'M', 'nota' => 9],
    ['nome' =>'Jessica', 'sexo' =>'F', 'nota' => 9.5],
    ['nome' =>'Daniel', 'sexo' =>'M', 'nota' => 6],
    ['nome' =>'Duda', 'sexo' =>'F', 'nota' => 10],
    ['nome' =>'Adan', 'sexo' =>'M', 'nota' => 8],
    ['nome' =>'Deivid', 'sexo' =>'M', 'nota' => 7]
];

function contar_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal ++;
    }
    return $subtotal;
}

function soma_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');
$soma_m = array_reduce($pessoas, 'soma_m');
$media_m = $soma_m / $total_m;

echo "Total de homens: " . $total_m.'<br/>';
echo " Notas dos homens: " . $soma_m.'<br/>';
echo "Media: " . $media_m;