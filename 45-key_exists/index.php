<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 36,
    'empresa' => 'Hoop',
    'cor' => 'pardo',
    'profissao' => 'programador'
];

if(key_exists('idade',$array)) {
    $idade = $array['idade'];
    echo $idade.' anos';
} else {
    echo 'Não tem idade';
}
