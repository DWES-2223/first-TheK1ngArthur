<!DOCTYPE html>
<html lang="en">
<?php
$name = $_POST['nom'];
$surname1 = $_POST['cognom1'];
$surname2 = $_POST['cognom2'];
$email = $_POST['email'];
$birthyear = $_POST['any'];
$phone = $_POST['telefon'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>Nom</td>
        <td><?=$name?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?=$surname1 . ' ' . $surname2?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$email?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?=$birthyear?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?=$phone?></td>
    </tr>
</table>
</body>
</html>
