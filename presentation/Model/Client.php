<?php 

class Client {

    private ?string $firstname; // ?string peut recevoir soit une valeur string ou null

    private ?string $lastname;

    private ?DateTime $birthday;

    private ?string $email;

    public function __construct(?string $firstname = null, ?string $lastname = null, ?DateTime $birthday = null, ?string $email = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthday = $birthday;
        $this->email = $email;
    }

    // getter / setter

    public function getFullname(): string
    {
        return $this->firstname . " " . $this->lastname;
    }
}