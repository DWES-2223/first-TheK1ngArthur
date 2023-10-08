<?php

class Manager extends Worker
{
    private float $income;

    public function calcularSueldo(): float
    {
        return $this->income + ($this->income*($this->age/100));
    }
}