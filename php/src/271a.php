<?php
extract($_POST);
include("atletes.php");
if(isset($prova,$marca,$atleta,$natalici,$club,$data,$lloc)){
    if (array_key_exists($prova,$records)) {
        $records[$prova]["marca"] = $marca;
        $records[$prova]["atleta"] = $atleta;
        $records[$prova]["natalici"] = $natalici;
        $records[$prova]["club"] = $club;
        $records[$prova]["data"] = $data;
        $records[$prova]["lloc"] = $lloc;
        include("270a.php");
    }
}
