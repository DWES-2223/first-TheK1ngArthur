<?php

$billetesBanco = [100,50,20,10,5,2];
$billetes = [0,0,0,0,0,0];

$dinero = $_GET['dinero'];

$contBilletes = 0;
while($contBilletes < 6){
    if($dinero >= $billetesBanco[$contBilletes]){
        $dinero -= $billetesBanco[$contBilletes];
        $billetes[$contBilletes]++;
        if($dinero >= $billetesBanco[$contBilletes]){
            continue;
        }
    }
    $contBilletes += 1;
}
for ($i = 0; $i < count($billetes) - 2; $i++) {
    echo $billetes[$i] . " billet de " . $billetesBanco[$i] .  "<br>";
}

echo $billetes[5] . " moneda de " . $billetesBanco[5];
