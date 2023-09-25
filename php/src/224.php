<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>224</title>
</head>
<body>
<?php
$quantitat = $_POST['quantitat'];
for ($i = 0; $i < $quantitat; $i++) {
    echo '<input type="number" name="quantitat' . $i . '" value = "quantitat' . $i . '">';
}
$valors = $_POST;
$suma = 0;
foreach ($valors as $valor) {
    $suma += $valor;
}
echo $suma;
?>
</body>
</html>

