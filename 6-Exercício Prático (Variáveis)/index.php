<?php

$lista = [
    'nome' => 'Leonardo',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "DESTREZA: ".$lista['atributos']['destreza']."<br/>";
