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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }
 
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }
 
    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(?DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFullname(): string
    {
        return $this->firstname . " " . $this->lastname;
    }

    // la méthode toString est appelé automatique quand on
    // utilise le mot clé "echo" devant une instance
    public function __toString(): string
    {
        return "Objet de type Client";
    }
}