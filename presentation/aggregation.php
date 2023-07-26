<?php

require_once("./Model/Address.php");
require_once("./Model/Client.php");


// Créer une classe Address
// Address
//  string street
//  string zipcode (2A000 - 2B000)
//  string city 
//  string country

// Créer le constructeur + accesseurs (getter/setter)

// Créer une instance d'Address

$address = new Address("256 avenue de la marne", "59000", "Lille", "France");

// echo $address->getFullAddress();

$client = new Client("John", "Doe");
$client->setAddress($address); // l'agrégation

echo "<h2>Adresse de ".$client->getFullname()."</h2>";
echo "<address>";
echo $client->getAddress()->getFullAddress();
echo "</address>";