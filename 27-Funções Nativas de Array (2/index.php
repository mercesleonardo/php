<?php 

$numeros = [
    10,
    20,
    24,
    91,
    18
];

//array_pop($numeros); // remove the last element
//array_shift($numeros); // remove the first element
//print_r($numeros);

if(in_array(91, $numeros)) {
    echo "EXISTE! <br/>";
} else {
    echo "NÃO EXISTE!";
}

$pos =array_search(91, $numeros);

echo $pos."<br/>";

//sort($numeros); //Crescente
//rsort($numeros); //decrescente
//asort($numeros); // ordem crescente sem alterar as chaves de cada item
arsort($numeros); // ordem decrescente sem alterar as chaves de cada item

echo "A chave 3 é: ".$numeros[3]."<br/>";
//print_r($numeros);

///////////////////
/*
$nome = 'Leonardo M Carvalho';
$nomes = explode (' ',$nome);
print_r($nomes);
*/

$nomes = [
    'Leonardo',
    'M',
    'Carvalho'
];

$nome = implode (' ',$nomes);
echo $nome;

