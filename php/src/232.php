<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>232</title>
    <?php
        $lletres = [];
        const EME = 'M';
        const EFE = 'F';
        const HUNDRED_ELEMENTS = 100;
    ?>
</head>
<body>
<ul>
<?php
    $emes = 0;
    $efes = 0;
    for($i = 0;$i < HUNDRED_ELEMENTS;$i++){
        $random = rand(0,1);
        if($random == 0){
            $lletres[$i] = EME;
            $emes += 1;
        } else {
            $lletres[$i] = EFE;
            $efes += 1;
        }
    }
    echo '<li>Número de MILFs: ' . $emes . '</li>';
    echo '<li>Número de Fs: ' . $efes . '</li>';
?>
</ul>
</body>
</html>