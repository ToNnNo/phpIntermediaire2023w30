<?php

namespace Classes\Vehicule;

class Ambulance extends Voiture {

    const SON = "PIN PON";

    private bool $sirene;

    public function __construct(
        string $marque, 
        string $modele, 
        bool $sirene = false
    ) {
        parent::__construct($marque, $modele);
        $this->sirene = $sirene;
    }
 
    public function getSireneState(): bool
    {
        return $this->sirene;
    }

    public function changeSireneState(): self
    {
        $this->sirene = !$this->sirene;

        return $this;
    }

    // overriding + abstract
    // polymorphisme
}