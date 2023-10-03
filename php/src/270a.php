<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>270</title>
    <?php
    ?>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($records as $clave => $record){
        ?>
        <tr><td><?=$clave?></td>
        <?php
        foreach ($record as $valor){
            ?>
            <td><?=$valor?></td>
            <?php
        }
        ?>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
