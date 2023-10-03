<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>243</title>
    <?php
        include("functions.php");
    ?>
</head>
<body>
<form action="243.php" method="post">
    <?php
        if(is_numeric($_POST['euros'])){
            $euros = $_POST['euros'];
            $pesetes = euro2pesetes($euros);
            ?>
            <label>Euros<input type="number" name="euros" placeholder="<?=$euros?>"></label><br>
            <label>Pesetas<input type="number" name="pesetes" value="<?=$pesetes?>" placeholder="<?=$pesetes?>"></label>
        <?php
        } else if (is_numeric($_POST['pesetes'])) {
            $pesetes = $_POST['pesetes'];
            $euros = peseta2euros($pesetes);
            ?>
            <label>Euros<input type="number" name="euros" value="<?=$euros?>" placeholder="<?=$euros?>"></label>
            <label>Pesetas<input type="number" name="pesetes" placeholder="<?=$pesetes?>"></label>
        <?php
        } else {
            echo '<label>Euros<input id="euros" type="number" name="euros"></label><br>';
            echo '<label>Pesetas<input id="pesetes" type="number" name="pesetes"></label>';
        }
    ?>
    <input type="submit" value="submit">
</form>
</body>
</html>