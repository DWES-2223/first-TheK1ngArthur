<!DOCTYPE html>
<html lang="en">
<?php
$name = "Arthur";
$surname = "Dias Teixeira";
$email = "arthurdteixeira2004@gmail.com";
$birthyear = 2004;
$phone = 633313248;
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
            <td><?=$surname?></td>
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
