<?php 

class Client {

    public const MONSIEUR = "Monsieur";
    public const MADAME = "Madame";

    public static string $class_version = "1.0";
    private static int $nb_instance = 0;

    private ?string $firstname; // ?string peut recevoir soit une valeur string ou null

    private ?string $lastname;

    private ?DateTime $birthday;

    private ?string $email;

    private ?string $civility; // Monsieur/Madame => M / Mme | monsieur / madame

    public function __construct(
        ?string $firstname = null, 
        ?string $lastname = null, 
        ?DateTime $birthday = null, 
        ?string $email = null,
        ?string $civility = null
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthday = $birthday;
        $this->email = $email;
        $this->civility = $civility;

        self::$nb_instance++;
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

    public function getCivility(): string
    {
        return $this->civility;
    }
 
    public function setCivility(?string $civility): self
    {
        $this->civility = $civility;

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

    public static function getNbInstance(): int 
    {
        return self::$nb_instance;
    }
}