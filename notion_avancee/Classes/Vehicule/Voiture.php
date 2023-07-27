<?php

namespace Classes\Vehicule;

class Voiture {

    private string $marque;
    private string $modele;

    public function __construct(string $marque, string $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }
     
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function demarrer(): string
    {
        // return "Notre ". strtolower(self::class) ." démarre";
        return "Notre ". strtolower(static::class) ." démarre";
    }

    public function avancer(): string
    {
        // return "Notre ". strtolower(self::class) ." avance";
        return "Notre ". strtolower(static::class) ." avance";
    }

    public function arreter(): string
    {
        // return "Notre ". strtolower(self::class) ." s'arrete";
        return "Notre ". strtolower(static::class) ." s'arrete";
    }
}