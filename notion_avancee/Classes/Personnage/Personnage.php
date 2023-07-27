<?php

namespace Classes\Personnage;

use Classes\Animal\AbstractAnimal;

class Personnage {

    private string $name;
    private array $animals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function capture(AbstractAnimal $animal): bool 
    {
        $result = rand(1, 6); 

        if( $result < 4 ) {
            return false;
        }

        $this->animals[] = $animal;
        return true;
    }
}