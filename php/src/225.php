<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>225</title>
    <?php
        $files = $_POST['files'];
        $columnes = $_POST['columnes'];
        $abecedario = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    ?>
</head>
<body>
<table>
    <?php
    for($i = 0; $i < $files;$i++){
    ?>
    <tr>
        <?php
        for($j = 1; $j <= $columnes; $j++){
            echo ' <td>'. substr($abecedario,$i,1) . $j .'</td> ';
        }
        ?>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
