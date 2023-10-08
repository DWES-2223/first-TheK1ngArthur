<?php

abstract class Person
{
    protected $name;
    protected $surname;
    protected $age;

    abstract public static function toHtml(Person $p) : string ;
}