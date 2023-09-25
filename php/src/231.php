<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>231</title>
    <?php
    $nums = [];
    const ELEMENTS = 33;
    ?>
</head>
<body>
<ul>
    <?php
    $major = 0;
    $menor = 0;
    $suma = 0;
    for($i = 0;$i < ELEMENTS;$i++){
        $nums[$i] = rand(0,100);
        $suma += $nums[$i];
        if($nums[$i] > $major){
            $major = $nums[$i];
        }
        if($nums[$i] < $menor){
            $menor = $nums[$i];
        }
    }
    $mitjana = $suma/ELEMENTS;
    echo '<li> Mayor: ' . $major . '</li>';
    echo '<li> Menor: ' . $menor . '</li>';
    echo '<li> Mediana: ' . $mitjana . '</li>';
    ?>
</ul>
</body>
</html>
