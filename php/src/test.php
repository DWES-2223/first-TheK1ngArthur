<?php
include ("Persona8.php");
include ("Empleado.php");
$empleado = new Empleado("a","a",25,3333,[111111111,222222222]);
echo $empleado->listarTelefonos();
$empleado->vaciarTelefonos();
echo $empleado->listarTelefonos();

