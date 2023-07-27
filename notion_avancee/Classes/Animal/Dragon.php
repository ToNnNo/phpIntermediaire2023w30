<?php

namespace Classes\Animal;

class Dragon extends AbstractAnimal {

    public function manger(): string
    {
        return $this->getName() . " mange un mouton";
    }

    public function crier(): string
    {
        return $this->getName() . " rugit !";
    }

    public function cracherDuFeu(): string
    {
        return $this->getName() . " crache une gerbe de feu";
    }

}