<?php

$pdo = new PDO("mysql:dbname=teste;host=localhost", "root", "861907");

$sql = $pdo->query("SELECT * FROM usuarios");

echo"TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($dados);