<?php
$count = 0;
for($i=0;$i<100;$i++) {

    $count++;
    if($count < 10){
        echo '-';
    } else {
        echo '-'.'</br>';
        $count = 0;
    }
}