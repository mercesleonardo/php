<?php

$bolo1 = [
    'açucar', 
    'farinha de trigo', 
    'ovo', 
    'leite', 
    'fermento em pó'
];

$bolo2 = [
    'chocolate',
    'limão',  
    ...$bolo1,
    'corante'
];

$bolo3 = [
    'laranja',
    ...$bolo2
];

echo $bolo3[4]."<br>";
print_r($bolo3);