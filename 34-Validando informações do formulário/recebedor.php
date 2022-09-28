<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $idade && $email) {
    echo "NOME: ".$nome."<br/>";
    echo "IDADE: ".$idade."<br/>";
    echo "EMAIL: ".$email."<br/>";
} else {
    header('Location: index.php');
    exit;
}

/*
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_INT
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT

*/
