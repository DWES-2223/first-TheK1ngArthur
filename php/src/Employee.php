<?php

class Employee extends Worker
{
    private int $workedHours;
    private float $hourPrice;

    public function calcularSueldo(): float
    {
        return $this->hourPrice * $this->workedHours;
    }
}