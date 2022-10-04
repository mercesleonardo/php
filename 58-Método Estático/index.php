<?php

class Matematica {

    public static string $nome ='Leonardo';

    public static function somar($x, $y) {
        return $x + $y;
    }
}

echo Matematica::somar(9, 11)."<br/>";
echo Matematica::$nome;
