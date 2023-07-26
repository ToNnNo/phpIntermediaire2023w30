<?php

class Building {

    /**
     * @var Apartment[] $apartments
     */
    private array $apartments = [];

    public function __construct(array $apartments = []) 
    {
        echo "construction du building<br />";
        $this->apartments = $apartments;
    }

    public function getApartments(): array
    {
        return $this->apartments;
    }

    public function add(Apartment $apartment): self
    {
        $this->apartments[] = $apartment;

        return $this;
    }

    public function remove(Apartment $apartment): self
    {
        $key = array_search($apartment, $this->apartments, true);

        if ($key !== false) {
            unset($this->apartments[$key]);
        }

        return $this;
    }

    // La méthode destructeur est appelée dès qu'il n'y a plus de 
    // référence sur un objet donné
    public function __destruct()
    {
        echo "destruction du building<br />";
        foreach($this->apartments as $apartment) {
            $this->remove($apartment);
            unset($apartment);
        }
    }
}