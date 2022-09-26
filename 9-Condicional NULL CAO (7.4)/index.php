<?php

//$nome = 'Jessica ';
//$sobrenome ='Lourenço';


$nomeCompleto = $nome ?? 'Visitante';
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;