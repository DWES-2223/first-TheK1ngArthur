<?php

function esParell(int $num):bool{
    return $num%2==0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[$i] = rand($min,$max);
    }
    return $array;
}

function countParells(array &$array): int{
    $parells = 0;
    for ($i = 0; $i < count($array); $i++) {
        if(esParell($array[$i])){
            $parells += 1;
        }
    }
    return $parells;
}

function major(...$nums) : int{
    $major = 0;
    for ($i = 0; $i < count($nums); $i++) {
        if($nums[$i] > $major){
            $major = $nums[$i];
        }
    }
    return $major;
}

function concatenar(...$paraules) : string {
    return join(" ",$paraules);
}

function digits(int $num): int {
    $stringNum = (string)$num;
    if($num > 0){
        return strlen($stringNum);
    }
    return strlen($stringNum) - 1;
}

function digitsN(int $num, int $post): int {
    $stringNum = (string)$num;
    return (int) substr($stringNum,$post-1,1);
}

function llevaDarrere(int $num, int $cant): int {
    $stringNum = (string)$num;
    if($cant > strlen($stringNum)){
        return 0;
    }
    return (int) substr($stringNum,0,strlen($stringNum) - $cant);
}

function llevaDavant(int $num, int $cant): int {
    $stringNum = (string)$num;
    if($cant > strlen($stringNum)){
        return 0;
    }
    return (int) substr($stringNum,$cant,strlen($stringNum) - $cant);
}

function peseta2euros(float $pesetes,float $cotizacion = 0.006) : float {
    return number_format($pesetes * $cotizacion,0,'.','');
}

function euro2pesetes(float $euros, float $cotizacion = 166) : float {
    return number_format($euros * $cotizacion,0,'.','');
}

function vell(array $dates): mixed {
    $vell = 0;
    $fechaVell = new DateTime(date("Y"));
    foreach ($dates as $indice => $valor) {
        $fechaRecord = new DateTime($valor);
        if($fechaRecord < $fechaVell){
            $fechaVell = $fechaRecord;
            $vell = $indice;
        }
    }
    return $vell;
}

function jove(array $natalicis, array $dates): mixed {
    $jove = 0;
    $cont = 0;
    $posicioJove = 0;
    foreach ($natalicis as $indice => $natalici) {
        $diferencia = any($dates[$indice]) - $natalici;
        if($cont == 0){
            $jove = $diferencia;
        } else if ($diferencia < $jove){
            $jove = $diferencia;
            $posicioJove = $indice;
        }
        $cont += 1;
    }
    return $posicioJove;
}

function any(string $data):string{
    $dataDateTime = new DateTime($data);
    return $dataDateTime->format("Y");
}

function laureado(array $valors):mixed {
    $contMesRepetit = 0;
    $mesRepetit = "";
    foreach ($valors as $subvalors) {
        $contActual = 0;
        foreach ($valors as $values) {
            if($subvalors == $values){
                $contActual += 1;
            }
        }
        if($contActual > $contMesRepetit){
            $contMesRepetit = $contActual;
            $mesRepetit = $subvalors;
        }
    }
    return $mesRepetit;
}

function fecha_inglesa(string $fecha):string{
    $fechaDateTime = new DateTime($fecha);
    return $fechaDateTime->format("Y/m/d");
}

function array_column_ext($array, $columnkey, $indexkey = null): array
{
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}