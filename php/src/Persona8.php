<?php

const LIMITE_EDAT = 66;
class Persona8
{
    protected static int $limite_edat = LIMITE_EDAT;
    public function __construct(
        private string $nom,
        private string $cognoms,
        private int    $edat,
    )
    {
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public static function getFullNameStatic(Persona8 $p8): string
    {
        return $p8->getNom() . " " . $p8->getCognoms();
    }

    public function getFullName(Persona8 $p8){

    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCognoms(): string
    {
        return $this->cognoms;
    }

    public function setCognoms(string $cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    public function getEdat(): int
    {
        return $this->edat;
    }

    public function setEdat(int $edat): void
    {
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string
    {
        return $this->nom . ' ' . $this->cognoms;
    }

    public function estaJubilado(): bool
    {
        return $this->edat >= self::$limite_edat;
    }

    public static function modificaLimite(int $limite): void
    {
        self::$limite_edat = $limite;
    }

    public static function toHtml(Persona8 $p8): string
    {
        return "<p>" . self::getFullNameStatic($p8) . "</p>";
    }

    public function __toString(): string
    {
        return "<p>" . $this->nom . " " . $this->cognoms . "</p>";
    }
}