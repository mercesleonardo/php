<?php

require_once('header.php');
?>

<form action="recebedor.php" method="POST">
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
    <label for="nome">
        E-mail:
        <br>
        <input type="text" name="email" id="email">
    </label>
    <br><br>

    <input type="submit" value="Enviar">
</form>