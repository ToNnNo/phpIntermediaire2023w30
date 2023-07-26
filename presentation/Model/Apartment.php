<?php

class Apartment {

    private int $number;

    public function __construct(int $number)
    {
        echo "Création d'un appartement<br />";
        $this->number = $number;
    }

    public function __destruct()
    {
        echo "Destruction d'un appartement<br />";
    }
}