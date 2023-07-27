<?php

namespace Classes\Animal;

abstract class AbstractAnimal {

    private string $name;

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

    public function boire(): string 
    {
        return $this->name . " boit de l'eau";
    }

    abstract public function manger(): string;

    abstract public function crier(): string;
}