<?php

$idade = 36;


/*
if($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
*/

//(Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

/*
echo($idade < 18) ? 'Menor de idade' : 'Maior de idade';
*/

$menorDeIdade =($idade < 18) ? true : false;

if($menorDeIdade) {
    echo 'Menor';
} else {
    echo 'Maior';
}