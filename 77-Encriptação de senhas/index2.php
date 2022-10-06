<?php
$hash = '$2y$10$SV.QOeUCGOId1f9IVBtghuQgCzdz.Iy13uekKk12BI8E1gDhGKeSC';
$senha = '1234';

if(password_verify($senha, $hash)) {
    echo 'Senha correta';
} else {
    echo 'Senha incorreta';
}