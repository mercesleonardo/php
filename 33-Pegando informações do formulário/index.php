<?php

require_once('header.php');
?>

<form action="recebedor.php" method="GET">
    <label for="nome">
        Nome:
        <br>
        <input type="text" name="nome" id="nome">
    </label>
    <br><br>
    <label for="idade">
        Idade:
        <br>
        <input type="text" name="idade" id="idade">
    </label>
    <br><br>

    <input type="submit" value="Enviar">
</form>