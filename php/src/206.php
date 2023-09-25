<?php

$num = $_GET['num'];

echo "El número $num es: ";
echo ($num>0)?'positiu':($num < 0?'negatiu':'zero');
