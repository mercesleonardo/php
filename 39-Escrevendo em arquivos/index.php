<?php

$texto = 'Leonardo Carvalho';
file_put_contents('nome.txt', $texto);
$texto = file_get_contents('nome.txt');
$texto.= " \nama Jéssica";
file_put_contents('nome.txt', $texto);


echo "Arquivo criado com sucesso <br/>";
echo $texto;