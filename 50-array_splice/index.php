<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

//array_splice($array, 1, 1);
//array_splice($array, 3);
//array_splice($array, 2, 1, 'L');
array_splice($array, 2, 2, ['L', 'R']);

print_r($array);