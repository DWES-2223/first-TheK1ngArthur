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