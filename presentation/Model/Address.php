<?php 

class Address {

    // code valide en php 7.4/8

    /*private ?string $street;
    private ?string $zipcode;
    private ?string $city;
    private ?string $country;

    public function __construct(
        ?string $street = null,
        ?string $zipcode = null,
        ?string $city = null,
        ?string $country = null
    ) {
        $this->street = $street;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->country = $country;
    }*/

    // code valide uniquement à partir de php 8.0
    public function __construct(
        private ?string $street = null,
        private ?string $zipcode = null,
        private ?string $city = null,
        private ?string $country = null
    ) { }
 
    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }
 
    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }
 
    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getFullAddress(): string 
    {
        return $this->getStreet(). "<br />" . 
            $this->getZipcode(). " " . $this->getCity() . "<br />" .
            $this->getCountry();
    }
}