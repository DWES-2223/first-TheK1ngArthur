<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>230</title>
    <?php
        $nums = [];
    ?>
</head>
<body>
<ul>
<?php
    for($i = 0;$i < 50;$i++){
        $nums[$i] = rand(0,99);
        echo '<li>' . $i . ': ' . $nums[$i] . '</li> ';
    }
    ?>
</ul>
</body>
</html>