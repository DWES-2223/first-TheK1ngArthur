<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221</title>
</head>
<body>
<?php
    $mensaje = "";
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
        $mensaje .= $i;
        $mensaje .= ($i == 10) ? "=" : "+";
    }
    echo $mensaje . $suma;
?>
</body>
</html>
