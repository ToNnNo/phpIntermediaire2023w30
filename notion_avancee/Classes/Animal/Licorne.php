<?php

namespace Classes\Animal;

class Licorne extends AbstractAnimal {

    public function manger(): string
    {
        return $this->getName() . " mange de l'herbe";
    }

    public function crier(): string
    {
        return $this->getName() . " hennit !";
    }

    public function scintiller(): string 
    {
        return $this->getName() . " émet un halo de lumière multicolore !";
    }

}