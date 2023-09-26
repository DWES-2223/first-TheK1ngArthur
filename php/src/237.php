<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>237</title>
    <?php
        $noms = $_POST['noms'];
        $alturas = $_POST['alturas'];
        $emails = $_POST['emails'];
    ?>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Alçada</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $alturaMajor = 0;
        $alturaMenor = $alturas[0];
        for ($j = 0; $j < count($alturas); $j++) {
            if($alturas[$j] > $alturaMajor){
                $alturaMajor = $alturas[$j];
            } else if ($alturas[$j] < $alturaMenor){
                $alturaMenor = $alturas;
            }
        }
        for ($i = 0; $i < count($noms); $i++) {
            echo '<tr>';
            echo '<td>' . $noms[$i] .'</td>';
            echo (($alturas[$i] == $alturaMajor) ? '<td style="background-color:green">' : (($alturaMenor == $alturas[$i]) ? '<td style="background-color:red">' : '<td>')) . $alturas[$i] .'</td>';
            echo '<td>' . $emails[$i] .'</td>';
            echo '<tr>';
        }
        ?>
    </tbody>
</table>
</body>
</html>
