<?php

abstract class Worker extends Person
{
    protected $phones;
    public static function toHtml(Person $p): string
    {
        // TODO: Implement toHtml() method.
    }

    abstract public function calcularSueldo() : float;

    public function debePagarImpuestos() : bool {
        return false;
    }
}