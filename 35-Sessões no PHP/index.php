<?php
session_start();
require_once('header.php');

if (isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
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
    <label for="email">
        E-mail:
        <br>
        <input type="text" name="email" id="email">
    </label>
    <br><br>

    <input type="submit" value="Enviar">
</form>