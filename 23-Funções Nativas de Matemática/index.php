<?php

/*
$numero = -8.4;
echo abs($numero)."<br/>";
echo pi();
*/

$numero = 8.7; 
$numero2 = 8.788; 
$aleatorio = rand(1, 10); 
$lista = [1, 5, 10, 29, 3];
echo floor($numero)."<br/>"; //Arrredonda para baixo
echo ceil($numero)."<br/>"; //Arrredonda para cima
echo round($numero)."<br/>"; //Arrredonda corretamente
echo round($numero2, 2)."<br/>"; //Arrredonda com duas casas decimais
echo $aleatorio."<br/>"; // Números aleatórios
echo max($lista)."<br/>"; // Número maior
echo min($lista)."<br/>"; // Número menor
