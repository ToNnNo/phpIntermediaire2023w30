<?php

namespace Classes\Vehicule;

final class Ambulance extends Voiture {

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

    public function avancer(): string
    {
        $message = "";
        
        if($this->getSireneState()) {
            $message .= self::SON . " " . self::SON . "! ";
        }

        $message .= parent::avancer();

        return $message;
    }

    // overriding + abstract
    // polymorphisme
}