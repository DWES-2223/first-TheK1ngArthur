<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>236</title>
    <?php
        $quantitat = $_POST['quantitat']
    ?>
</head>
<body>
<form action="237.php" method="post">
<?php
for ($i = 0; $i < $quantitat; $i++) {
        echo 'Persona ' . ($i + 1) ;
        echo '<br><label>Nombre: <input type="text" name="noms[]"></label><br>';
        echo '<label>Altura: <input type="number" name="alturas[]"></label><br>';
        echo '<label>Email: <input type="email" name="emails[]"></label><br><br>';
    }
?>
    <input type="submit" value="submit">
</form>
</body>
</html>
