<?php

require 'classe2.php';
require 'classe1.php';
require 'classes/matematica/basico.php';


$a = new classe1\MinhaClasse();
echo $a->testar()."<br/>";

use classes\matematica\Basico as Basico;
$basico = new Basico();
echo $basico->texto();


