<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>244b</title>
    <?php
        $nombres = $_POST['nom'];
        $precios = $_POST['preu'];
    include("functions.php");
    ?>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Euros</th>
            <th>Pesetas</th>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i = 0; $i < count($nombres); $i++) {
                echo '<tr>';
                echo '<td>' . $nombres[$i] . '</td>';
                echo '<td>' . $precios[$i] . '</td>';
                echo '<td>' . euro2pesetes($precios[$i]) . '</td>';
                echo '</tr>';
            }
            
        ?>
    </tbody>
</table>
</body>
</html>

