<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222</title>
    <?php
        $base = $_GET['base'];
        $exponente = $_GET['exponent'];
    ?>
</head>
<body>
<?php
if (isset($base) && isset($exponente)) {
    $potencia = 1;
    for ($i = 0;$i < $exponente;$i++){
        $potencia *= $base;
    }
    echo "$base^$exponente = $potencia";
} else {
?>
Posa la base i l'exponent a les variables base i exponent pel QueryString
<?php
}
?>
</body>
</html>
