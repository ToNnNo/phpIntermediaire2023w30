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
        return "Notre ". strtolower(get_class($this)) ." démarre";
    }

    public function avancer(): string
    {
        return "Notre ". strtolower(get_class($this)) ." avance";
    }

    public function arreter(): string
    {
        return "Notre ". strtolower(get_class($this)) ." s'arrete";
    }
}