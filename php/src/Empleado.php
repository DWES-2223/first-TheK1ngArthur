<?php

class Empleado extends Persona8
{
    const SUELDO_MIN_IMPUESTO = 3333;
    private float $sueldo;
    private array $telefons = array();

    /*
     * Afig un telèfon al array (pissarra)
     */
    public function anyadirTelefono(int $telefono) : void {
        $this->telefons[] = $telefono;
    }

    /*
     * Mostra els telèfons separats per comes
     */
    public function listarTelefonos(): string{
        return join(", ", $this->telefons);
    }

    /*
     * Elimina tots els telèfons
     */
    public function vaciarTelefonos(): void {
        $this->telefons = [];
    }

    /*
     * Que retorne un booleà indicant si deu o no pagar impostos (es paguen quan el sou és superior a 3333€)
     */
    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::SUELDO_MIN_IMPUESTO;
    }

    public static function toHtml(Persona8 $p8): string
    {
        $mensaje = "<p>" . parent::toHtml($p8) . "</p>";
        if($p8 instanceof Empleado) {
            $mensaje .= "<ul>";
            foreach ($p8->telefons as $valor) {
                $mensaje .= "<li>" . $valor . "</li>";
            }
            $mensaje .= "</ul>";
        }
        return $mensaje;
    }

    public function __toString(): string {
        $mensaje = "<p>" . parent::__toString() . "</p> <ul>";
            foreach ($this->telefons as $valor) {
                $mensaje .= "<li>" . $valor . "</li>";
            }
            $mensaje .= "</ul>";
        return $mensaje;
    }
}