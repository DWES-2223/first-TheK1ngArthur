<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>220</title>
</head>
<body>
<ul>
<?php
        for($i = 1;$i <= 50;$i++){
          if(($i % 2) == 0){
              echo "<li>$i</li>";
          }
        }
    ?>
</ul>
</body>
</html>