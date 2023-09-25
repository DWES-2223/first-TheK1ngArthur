<?php

$edat = $_GET['edat'];

switch (true){
    case ($edat < 3):
        echo "Eres un bebé";
        break;
    case ($edat <= 12):
        echo "Eres un niño";
        break;
    case ($edat >= 13 && $edat <= 17):
        echo "Eres un adolescente";
        break;
    case ($edat >= 18 && $edat <= 66):
        echo "Eres un adulto";
        break;
    default :
        echo "Eres un jubilado";
        break;
}
