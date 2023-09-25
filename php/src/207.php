<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$major = $a;
if ($b > $major){
    $major = $b;
} else if ($c > $major) {
    $major = $c;
}

echo "El número mayor es $major";