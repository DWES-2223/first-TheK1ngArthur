<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>243</title>
    <?php
        $cantidad = $_GET['quantitat'];
    ?>
</head>
<body>
<form action="244b.php" method="post">
    <?php
        for ($i = 0; $i < $cantidad; $i++) {
            echo 'Producto ' . ($i + 1) . '<br>';
            echo '<input type="text" placeholder="Nombre" name="noms[]"<br>';
            echo '<input type="text" placeholder="Precio" name="precios[]"<br><br>';
        }
    ?>
    <input type="submit" value="submit">
</form>
</body>
</html>

