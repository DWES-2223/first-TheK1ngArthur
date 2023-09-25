<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>234</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Alçada</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sumaAltura = 0;
    $persones = [
        ['nom' => 'Arthur','alçada' => 185,'email' => "arthurdias@gmail.com"],
        ['nom' => 'Viti','alçada' => 200, 'email' => "viti@gmail.com"],
        ['nom' => 'Boki','alçada' => 174, 'email' => "elboki@gmail.com"],
        ['nom' => 'Jadex','alçada' => 170, 'email' => "jadex2004j@gmail.com"],
        ['nom' => 'NikoPiki','alçada' => 190, 'email' => "nikopiki11@gmail.com"]];
    for ($i = 0; $i < count($persones); $i++) {
        echo '<tr>';
        echo '<td>' . $persones[$i]['nom'] . '</td>';
        echo '<td>' . $persones[$i]['alçada'] . '</td>';
        echo '<td>' . $persones[$i]['email'] . '</td>';
        echo '<tr>';
        $sumaAltura += $persones[$i]['alçada'];
    }
    $alturaMedia = $sumaAltura / count($persones);
    ?>
    </tbody>
</table>
<div>Altura media : <?=$alturaMedia?></div>
</body>
</html>
