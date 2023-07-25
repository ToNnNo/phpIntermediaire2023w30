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