<?php

function subsequencia() {
    for($i=0;$i<10;$i++) {
        echo $i."<br/>";
    }

    echo "<hr/>";
}

function latir() {
    echo "Au, au";

    echo "<hr/>";
}

subsequencia();
latir();

function gritar() {
    echo "Ahhhhhh!! <br/>";
}

for($n=0;$n<20;$n++) {
    gritar();
}
