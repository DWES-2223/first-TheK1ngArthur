<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>234</title>
</head>
<body>
<table>
<tr>
    <th>Nom</th>
    <th>Alçada</th>
</tr>
    <?php
    $sumaAltura = 0;
    $persones = [
        ['nom' => 'Arthur','alçada' => 185],
        ['nom' => 'Viti','alçada' => 200],
        ['nom' => 'Boki','alçada' => 174],
        ['nom' => 'Jadex','alçada' => 170],
        ['nom' => 'NikoPiki','alçada' => 190]];
    for ($i = 0; $i < count($persones); $i++) {
        echo '<tr>';
        echo '<td>' . $persones[$i]['nom'] . '</td>';
        echo '<td>' . $persones[$i]['alçada'] . '</td>';
        echo '<tr>';
        $sumaAltura += $persones[$i]['alçada'];
    }
    $alturaMedia = $sumaAltura / count($persones);
    ?>
</table>
    <div>Altura media : <?=$alturaMedia?></div>
</body>
</html>