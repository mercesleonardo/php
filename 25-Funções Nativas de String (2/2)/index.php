<?php

$nomeCompleto = "leonardo carvalho";

$posicao = strpos($nomeCompleto, 'c');

$nomes = explode(' ', $nomeCompleto); // transformar em arrays

if($posicao !== false) {
    echo "Achou! <br/>";
} else {
    echo "Não achou! <br/>";
}

echo $posicao."<br/>";
echo ucfirst($nomeCompleto)."<br/>";
echo ucwords($nomeCompleto)."<br/>";
//print_r($nomes);


$numero = 12345.34;
echo 'R$ '. number_format($numero, 2, ',', '.',)."<br/>";