<?php 

require_once './Model/Client.php';

$birthday = new DateTime("1980-07-14");

echo $birthday->format('l d F Y');

// création d'une instance de client
$client = new Client("John", "Doe", $birthday, "john.doe@gmail.com");

// transmettre des valeurs sans constructeur et avec des variables public
/* $client->firstname = "John";
$client->lastname = "Doe";
$client->birthday = "1980-07-14";
$client->email = "john.doe@gmail.com"; */

echo "<p>Bonjour ".$client->getFullname()."</p>";

echo "<hr />";

$client2 = new Client("Jane", "Doe");

// $client2->firstname = "Jane";

echo "<p>Bonjour ".$client2->getFullname()."</p>";

// Créer dans la classe Client les accesseurs et mutateurs, puis les utiliser pour mettre à jour une donnée d'un client (email)

$client2
    ->setEmail("jane.doe@gmail.com")
    ->setBirthday(new DateTime("1981-10-21"));

printf(
    "<p>L'adresse email de %s, née le %s est %s</p>", 
    $client2->getFullname(), 
    $client2->getBirthday()->format("l d F Y"),
    $client2->getEmail()
);

// transformer un objet en chaine de caractère