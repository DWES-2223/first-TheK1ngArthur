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
        if(isset($cantidad)) {
            if(is_numeric($cantidad)) {
                for ($i = 0; $i < $cantidad; $i++) {
                    echo 'Producto ' . ($i + 1) . '<br>';
                    echo '<input id="nom ' . $i . '" type="text" placeholder="Nombre" name="nom[]"<br>';
                    echo '<input id="preu ' . $i . '" type="text" placeholder="Precio" name="preu[]"<br><br>';
                }
            } else {
                echo 'Dades incorrectes';
            }
        } else {
            echo 'Dades incorrectes';
        }
    ?>
    <input type="submit" value="submit">
</form>
</body>
</html>

