<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

define('DIEZ',10);
$edat = $_GET['edat']??null;
$diezatras = $edat - DIEZ;
$diezdespues = $edat + DIEZ;
$anyatras = date("Y") - DIEZ;
$anydespues = date("Y") + DIEZ;
$anyjubilacio = date("Y") + (67 - $edat);
?>
<body>
<?php
if(isset($edat)){
    echo "La teu edat a l'any $anyatras era de $diezatras <br>";
    echo "La teu edat a l'any $anydespues serà $diezdespues <br>";
    echo "La teua jubil·lació serà a l'any $anyjubilacio <br>";
} else {
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
?>
</body>
</html>

