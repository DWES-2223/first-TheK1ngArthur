<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>227</title>
    <?php
    $files = $_POST['files'];
    $columnes = $_POST['columnes'];
    $abecedario = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $cont = $columnes + 1;
    ?>
</head>
<body>
<table>
    <?php
    for($i = 0; $i < $files;$i++){
        $cont -= 1;
    ?>
        <tr>
            <?php
            for($j = 1; $j <= $columnes; $j++){
                if(($j - $i) == 1){
                    echo ' <td>'. substr($abecedario,$i,1) . $j .'</td> ';
                } else if ($cont == $j) {
                    echo ' <td>'. substr($abecedario,$i,1) . $cont .'</td> ';
                } else {
                    echo ' <td></td>';
                }
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>