<?php

$ingredientes = [
    'Açucar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
]; 

/*
foreach($ingredientes as $ingrediente) {
    echo "Item: ".$ingrediente."<br/>";  
}
*/

echo '<h2>Ingredientes</h2>';

/*
foreach($ingredientes as $chave => $ingrediente) {
    echo "Item ".($chave + 1).": ".$ingrediente."<br/>";
}
*/

echo '<ul>';

foreach($ingredientes as $ingrediente) {
    echo '<li>'.$ingrediente.'</li>';
}
echo '</ul>';