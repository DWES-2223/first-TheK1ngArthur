<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>272</title>
    <?php
        $records = [];
        include ("atletes.php");
        include ("functions.php")
    ?>
</head>
<body>
    <table>
        <?php
        $dates = array_column_ext($records,'data',-1);
        $clubs = array_column_ext($records,'club',-1);
        $atletes = array_column_ext($records,'atleta',-1);
        $ciutats = array_column_ext($records,'lloc',-1);
        $vell = vell($dates);
        $clubTitols = laureado($clubs);
        $personaRecords = laureado($atletes);
        $ciutatPropicia = laureado($ciutats);
        ?>
        <tr>
            <?php
            foreach ($records as $clave => $valor) {
                if($valor["data"] == $dates[$vell]) {
                    ?>
            <td>Record més antic: <?=$clave?></td>
                    <?php
                    break;
                }
            }
            ?>
        </tr>
        <tr>
            <td>Club amb més títols: <?=$clubTitols?></td>
        </tr>
        <tr>
            <td>Persona amb més records: <?=$personaRecords?></td>
        </tr>
        <tr>
            <td>Ciutat més propicia: <?=$ciutatPropicia?></td>
        </tr>
    </table>
    <?php
    include("270a.php")
    ?>
</body>
</html>
