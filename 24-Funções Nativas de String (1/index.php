<?php

$nomesujo = '   Jessica ';
$nomelimpo = trim($nomesujo);
$nome = 'Leonardo Carvalho';

$nomeAlterado = str_replace('Carvalho', 'Mercês', $nome);

$nomeCompleto ='Jessica Lourenço';
$nomeCortado = substr($nomeCompleto, 0, 5); // Pegar as 5 primeiras letras começando do zero

//echo trim($nomesujo); // remove os espaços vazios

echo "Nome sujo: ".strlen($nomesujo)."<br/>"; //Quantos caracteres o a variável tem.
echo "Nome sujo: ".strlen($nomelimpo)."<br/>";

echo strtolower($nome)."<br/>";
echo strtoupper($nome)."<br/>";
echo ($nomeAlterado)."<br/>";
echo ($nomeCortado)."<br/>";